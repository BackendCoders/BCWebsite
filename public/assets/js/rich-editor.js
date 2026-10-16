/**
 * Backend Coders - Professional Rich Text Editor (Universal Rock-Solid Suite)
 * Compatible with Quill 1.3.7 & 2.x
 * - Pure white background with deep dark high-contrast visible text (#0f172a).
 * - Undo & Redo history controls.
 * - Clear, readable text pickers for Headings, Fonts, and Sizes.
 * - Bold, Italic, Underline, Strike, Sub/Super, Inline Code, Colors, Align, Lists, Indents.
 * - Blockquote, Code block, Section Divider (<hr>), Table (3x3).
 * - Interactive modals for Links, Media (local upload via AJAX + URL tab), and Video.
 * - Paste interceptor for screenshots (converts clipboard images to clean server URLs).
 * - Raw HTML Source Code Editor (< / >) with real-time two-way synchronization.
 * - Fullscreen distraction-free writing mode.
 * - Live Status Bar: Word count, character count, reading time & sync indicator.
 */

(function () {
    'use strict';

    // 1. High-Contrast SVG Icons for Custom Tools
    const icons = {
        undo: `<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="#0f172a" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7v6h6"></path><path d="M21 17a9 9 0 0 0-9-9 9 9 0 0 0-6 2.3L3 13"></path></svg>`,
        redo: `<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="#0f172a" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M21 7v6h-6"></path><path d="M3 17a9 9 0 0 1 9-9 9 9 0 0 1 6 2.3l3 2.7"></path></svg>`,
        divider: `<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="#0f172a" stroke-width="2.3" stroke-linecap="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="6" y1="6" x2="18" y2="6" stroke-dasharray="2 3"></line><line x1="6" y1="18" x2="18" y2="18" stroke-dasharray="2 3"></line></svg>`,
        table: `<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="#0f172a" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18"></path><path d="M3 15h18"></path><path d="M9 3v18"></path><path d="M15 3v18"></path></svg>`,
        html: `<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="#0f172a" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>`,
        fullscreen: `<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="#0f172a" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>`,
    };

    // 2. CSRF Token Helper
    function getCsrfToken() {
        const meta = document.querySelector('meta[name="csrf-token"]');
        return meta ? meta.getAttribute('content') : '';
    }

    // 3. Toast Notification
    function showToast(message, type = 'success') {
        const existing = document.getElementById('rich-editor-toast');
        if (existing) existing.remove();

        const toast = document.createElement('div');
        toast.id = 'rich-editor-toast';
        toast.className = `fixed bottom-6 right-6 z-[9999999] flex items-center gap-3 px-4 py-3 rounded-2xl shadow-2xl text-sm font-bold transition-all duration-300 transform translate-y-2 opacity-0 ${
            type === 'error'
                ? 'bg-rose-600 text-white shadow-rose-500/30'
                : 'bg-slate-900 text-white shadow-slate-900/30 border border-slate-700'
        }`;

        const icon = type === 'error'
            ? `<svg class="w-5 h-5 flex-shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>`
            : `<svg class="w-5 h-5 flex-shrink-0 text-[#FD5528]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>`;

        toast.innerHTML = `${icon}<span>${message}</span>`;
        document.body.appendChild(toast);

        requestAnimationFrame(() => {
            toast.classList.remove('translate-y-2', 'opacity-0');
        });

        setTimeout(() => {
            toast.classList.add('translate-y-2', 'opacity-0');
            setTimeout(() => toast.remove(), 300);
        }, 3200);
    }

    // 4. Modal Backdrop Helper
    function createModalBackdrop(contentHtml) {
        const backdrop = document.createElement('div');
        backdrop.className = 'rich-editor-modal-backdrop';
        backdrop.innerHTML = `<div class="rich-editor-modal-card p-6">${contentHtml}</div>`;
        document.body.appendChild(backdrop);

        const close = () => {
            backdrop.classList.add('opacity-0');
            setTimeout(() => backdrop.remove(), 150);
        };

        backdrop.addEventListener('click', (e) => {
            if (e.target === backdrop) close();
        });

        const cancelBtn = backdrop.querySelector('[data-modal-cancel]');
        if (cancelBtn) cancelBtn.addEventListener('click', close);

        const escHandler = (e) => {
            if (e.key === 'Escape') {
                close();
                document.removeEventListener('keydown', escHandler);
            }
        };
        document.addEventListener('keydown', escHandler);

        return { backdrop, close };
    }

    // Modal: Insert Link
    function openLinkModal(quill) {
        const range = quill.getSelection(true);
        let currentUrl = '';
        let currentText = '';

        if (range && range.length > 0) {
            currentText = quill.getText(range.index, range.length);
            const format = quill.getFormat(range);
            if (format.link) currentUrl = format.link;
        }

        const modalHtml = `
            <div class="flex items-center justify-between pb-4 border-b border-slate-200">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-[#FD5528]/10 text-[#FD5528] flex items-center justify-center font-bold">🔗</div>
                    <h3 class="text-lg font-bold text-slate-900">Insert / Edit Link</h3>
                </div>
                <button type="button" data-modal-cancel class="text-slate-400 hover:text-slate-700 text-xl font-bold">&times;</button>
            </div>
            <div class="mt-4 space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Link URL</label>
                    <input type="url" id="modalLinkUrl" value="${currentUrl}" placeholder="https://example.com" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 transition">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Display Text</label>
                    <input type="text" id="modalLinkText" value="${currentText}" placeholder="Click here or descriptive text" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 transition">
                </div>
                <div class="flex items-center gap-3 pt-1">
                    <input type="checkbox" id="modalLinkTarget" checked class="h-4 w-4 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]">
                    <label for="modalLinkTarget" class="text-sm font-semibold text-slate-800 cursor-pointer">Open link in a new tab (target="_blank")</label>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-between gap-3 pt-4 border-t border-slate-200">
                ${currentUrl ? '<button type="button" id="modalLinkUnlink" class="px-4 py-2 text-sm font-bold text-rose-600 hover:bg-rose-50 rounded-xl transition">Remove link</button>' : '<div></div>'}
                <div class="flex items-center gap-2">
                    <button type="button" data-modal-cancel class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-100 rounded-xl transition">Cancel</button>
                    <button type="button" id="modalLinkSubmit" class="px-5 py-2 text-sm font-bold text-white bg-[#FD5528] hover:bg-[#e94c20] rounded-xl shadow-lg shadow-[#FD5528]/25 transition">Save Link</button>
                </div>
            </div>
        `;

        const { backdrop, close } = createModalBackdrop(modalHtml);
        const urlInput = backdrop.querySelector('#modalLinkUrl');
        const textInput = backdrop.querySelector('#modalLinkText');
        const submitBtn = backdrop.querySelector('#modalLinkSubmit');
        const unlinkBtn = backdrop.querySelector('#modalLinkUnlink');

        urlInput.focus();

        const handleSave = () => {
            const url = urlInput.value.trim();
            const text = textInput.value.trim();
            if (!url) {
                urlInput.focus();
                return;
            }

            quill.focus();
            if (range) {
                if (range.length > 0) {
                    quill.format('link', url);
                } else if (text) {
                    quill.insertText(range.index, text, 'link', url);
                    quill.setSelection(range.index + text.length);
                } else {
                    quill.insertText(range.index, url, 'link', url);
                    quill.setSelection(range.index + url.length);
                }
            }
            close();
            showToast('Link inserted successfully');
        };

        submitBtn.addEventListener('click', handleSave);
        urlInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') handleSave();
        });

        if (unlinkBtn) {
            unlinkBtn.addEventListener('click', () => {
                quill.focus();
                quill.format('link', false);
                close();
                showToast('Link removed');
            });
        }
    }

    // Modal: Insert / Upload Image
    function openImageModal(quill) {
        const range = quill.getSelection(true) || { index: quill.getLength() };

        const modalHtml = `
            <div class="flex items-center justify-between pb-4 border-b border-slate-200">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-[#FD5528]/10 text-[#FD5528] flex items-center justify-center font-bold">🖼️</div>
                    <h3 class="text-lg font-bold text-slate-900">Insert Image</h3>
                </div>
                <button type="button" data-modal-cancel class="text-slate-400 hover:text-slate-700 text-xl font-bold">&times;</button>
            </div>

            <div class="mt-4 flex border-b border-slate-200">
                <button type="button" id="tabUploadBtn" class="flex-1 pb-2.5 text-sm font-bold text-[#FD5528] border-b-2 border-[#FD5528] transition">Upload from Computer</button>
                <button type="button" id="tabUrlBtn" class="flex-1 pb-2.5 text-sm font-semibold text-slate-500 hover:text-slate-900 transition">Image by URL</button>
            </div>

            <div id="tabUploadContent" class="mt-4 space-y-4">
                <div id="imageDropzone" class="border-2 border-dashed border-slate-300 hover:border-[#FD5528] rounded-2xl p-6 text-center cursor-pointer bg-slate-50 transition group">
                    <input type="file" id="modalImageFile" accept="image/*" class="hidden">
                    <div class="mx-auto w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-slate-500 group-hover:text-[#FD5528] group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <p class="mt-3 text-sm font-bold text-slate-800">Click to choose image or drag & drop here</p>
                    <p class="mt-1 text-xs text-slate-500">PNG, JPG, WebP, GIF, or SVG (up to 10MB)</p>
                    <div id="selectedImagePreview" class="hidden mt-4 relative rounded-xl overflow-hidden border border-slate-200 max-h-48 mx-auto">
                        <img src="" id="previewImg" class="w-full h-auto max-h-48 object-contain bg-slate-900/10">
                        <span id="previewName" class="absolute bottom-2 left-2 right-2 bg-slate-900/80 text-white text-[11px] font-semibold px-2 py-1 rounded truncate"></span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Alt Text (Recommended for SEO & Accessibility)</label>
                    <input type="text" id="modalUploadAlt" placeholder="Brief description of this image" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 transition">
                </div>
            </div>

            <div id="tabUrlContent" class="hidden mt-4 space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Image URL</label>
                    <input type="url" id="modalImageUrl" placeholder="https://example.com/image.webp" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 transition">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Alt Text</label>
                    <input type="text" id="modalUrlAlt" placeholder="Brief description of this image" class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 transition">
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-3 pt-4 border-t border-slate-200">
                <button type="button" data-modal-cancel class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-100 rounded-xl transition">Cancel</button>
                <button type="button" id="modalImageSubmit" class="px-5 py-2 text-sm font-bold text-white bg-[#FD5528] hover:bg-[#e94c20] rounded-xl shadow-lg shadow-[#FD5528]/25 transition flex items-center gap-2">
                    <span id="submitSpinner" class="hidden w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                    <span id="submitText">Upload & Insert</span>
                </button>
            </div>
        `;

        const { backdrop, close } = createModalBackdrop(modalHtml);

        const tabUploadBtn = backdrop.querySelector('#tabUploadBtn');
        const tabUrlBtn = backdrop.querySelector('#tabUrlBtn');
        const tabUploadContent = backdrop.querySelector('#tabUploadContent');
        const tabUrlContent = backdrop.querySelector('#tabUrlContent');
        const dropzone = backdrop.querySelector('#imageDropzone');
        const fileInput = backdrop.querySelector('#modalImageFile');
        const previewContainer = backdrop.querySelector('#selectedImagePreview');
        const previewImg = backdrop.querySelector('#previewImg');
        const previewName = backdrop.querySelector('#previewName');
        const uploadAlt = backdrop.querySelector('#modalUploadAlt');
        const imageUrlInput = backdrop.querySelector('#modalImageUrl');
        const urlAlt = backdrop.querySelector('#modalUrlAlt');
        const submitBtn = backdrop.querySelector('#modalImageSubmit');
        const submitSpinner = backdrop.querySelector('#submitSpinner');
        const submitText = backdrop.querySelector('#submitText');

        let activeTab = 'upload';
        let selectedFile = null;

        tabUploadBtn.addEventListener('click', () => {
            activeTab = 'upload';
            tabUploadBtn.classList.add('text-[#FD5528]', 'border-b-2', 'border-[#FD5528]');
            tabUploadBtn.classList.remove('text-slate-500');
            tabUrlBtn.classList.remove('text-[#FD5528]', 'border-b-2', 'border-[#FD5528]');
            tabUrlBtn.classList.add('text-slate-500');
            tabUploadContent.classList.remove('hidden');
            tabUrlContent.classList.add('hidden');
            submitText.textContent = 'Upload & Insert';
        });

        tabUrlBtn.addEventListener('click', () => {
            activeTab = 'url';
            tabUrlBtn.classList.add('text-[#FD5528]', 'border-b-2', 'border-[#FD5528]');
            tabUrlBtn.classList.remove('text-slate-500');
            tabUploadBtn.classList.remove('text-[#FD5528]', 'border-b-2', 'border-[#FD5528]');
            tabUploadBtn.classList.add('text-slate-500');
            tabUrlContent.classList.remove('hidden');
            tabUploadContent.classList.add('hidden');
            submitText.textContent = 'Insert Image';
            imageUrlInput.focus();
        });

        dropzone.addEventListener('click', () => fileInput.click());

        fileInput.addEventListener('change', (e) => {
            if (e.target.files && e.target.files[0]) {
                selectedFile = e.target.files[0];
                const reader = new FileReader();
                reader.onload = (ev) => {
                    previewImg.src = ev.target.result;
                    previewName.textContent = `${selectedFile.name} (${Math.round(selectedFile.size / 1024)} KB)`;
                    previewContainer.classList.remove('hidden');
                    if (!uploadAlt.value) {
                        uploadAlt.value = selectedFile.name.replace(/\.[^/.]+$/, '').replace(/[-_]/g, ' ');
                    }
                };
                reader.readAsDataURL(selectedFile);
            }
        });

        submitBtn.addEventListener('click', async () => {
            if (activeTab === 'upload') {
                if (!selectedFile) {
                    showToast('Please select an image file first', 'error');
                    return;
                }

                submitSpinner.classList.remove('hidden');
                submitBtn.disabled = true;

                try {
                    const formData = new FormData();
                    formData.append('image', selectedFile);

                    const response = await fetch('/blogs/upload-image', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': getCsrfToken(),
                            Accept: 'application/json',
                        },
                        body: formData,
                    });

                    const data = await response.json();
                    if (!response.ok || !data.success) {
                        throw new Error(data.message || 'Image upload failed');
                    }

                    insertImageIntoEditor(quill, range.index, data.url, uploadAlt.value.trim());
                    close();
                    showToast('Image uploaded & inserted');
                } catch (error) {
                    console.error('Upload error:', error);
                    showToast(error.message || 'Image upload failed. Try URL instead.', 'error');
                } finally {
                    submitSpinner.classList.add('hidden');
                    submitBtn.disabled = false;
                }
            } else {
                const url = imageUrlInput.value.trim();
                if (!url) {
                    imageUrlInput.focus();
                    return;
                }

                insertImageIntoEditor(quill, range.index, url, urlAlt.value.trim());
                close();
                showToast('Image inserted');
            }
        });
    }

    function insertImageIntoEditor(quill, index, url, altText) {
        quill.focus();
        quill.insertEmbed(index, 'image', url, 'user');
        quill.setSelection(index + 1);

        setTimeout(() => {
            const images = quill.root.querySelectorAll('img');
            images.forEach((img) => {
                if (img.getAttribute('src') === url && altText) {
                    img.setAttribute('alt', altText);
                    img.setAttribute('title', altText);
                }
            });
        }, 50);
    }

    // Modal: Embed Video (YouTube / Vimeo)
    function openVideoModal(quill) {
        const range = quill.getSelection(true) || { index: quill.getLength() };

        const modalHtml = `
            <div class="flex items-center justify-between pb-4 border-b border-slate-200">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-[#FD5528]/10 text-[#FD5528] flex items-center justify-center font-bold">🎥</div>
                    <h3 class="text-lg font-bold text-slate-900">Embed Video</h3>
                </div>
                <button type="button" data-modal-cancel class="text-slate-400 hover:text-slate-700 text-xl font-bold">&times;</button>
            </div>
            <div class="mt-4 space-y-3">
                <p class="text-xs font-medium text-slate-500">Paste any YouTube or Vimeo video link. It will automatically convert to a responsive embed.</p>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Video Link / URL</label>
                    <input type="url" id="modalVideoUrl" placeholder="https://www.youtube.com/watch?v=... or https://vimeo.com/..." class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10 transition">
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-3 pt-4 border-t border-slate-200">
                <button type="button" data-modal-cancel class="px-4 py-2 text-sm font-bold text-slate-600 hover:bg-slate-100 rounded-xl transition">Cancel</button>
                <button type="button" id="modalVideoSubmit" class="px-5 py-2 text-sm font-bold text-white bg-[#FD5528] hover:bg-[#e94c20] rounded-xl shadow-lg shadow-[#FD5528]/25 transition">Embed Video</button>
            </div>
        `;

        const { backdrop, close } = createModalBackdrop(modalHtml);
        const urlInput = backdrop.querySelector('#modalVideoUrl');
        const submitBtn = backdrop.querySelector('#modalVideoSubmit');

        urlInput.focus();

        const handleEmbed = () => {
            let url = urlInput.value.trim();
            if (!url) {
                urlInput.focus();
                return;
            }

            const ytMatch = url.match(/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/);
            if (ytMatch) url = `https://www.youtube.com/embed/${ytMatch[1]}`;

            const vimeoMatch = url.match(/vimeo\.com\/(?:channels\/(?:\w+\/)?|groups\/(?:[^\/]*)\/videos\/|album\/(?:\d+)\/video\/|video\/|)(\d+)/);
            if (vimeoMatch) url = `https://player.vimeo.com/video/${vimeoMatch[1]}`;

            quill.focus();
            quill.insertEmbed(range.index, 'video', url, 'user');
            quill.setSelection(range.index + 1);
            close();
            showToast('Video embedded successfully');
        };

        submitBtn.addEventListener('click', handleEmbed);
        urlInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') handleEmbed();
        });
    }

    // 5. Tooltip Map
    const tooltips = {
        'ql-bold': 'Bold (Ctrl+B)',
        'ql-italic': 'Italic (Ctrl+I)',
        'ql-underline': 'Underline (Ctrl+U)',
        'ql-strike': 'Strikethrough',
        'ql-code': 'Inline Code',
        'ql-code-block': 'Code Block',
        'ql-blockquote': 'Blockquote',
        'ql-link': 'Insert Link (Ctrl+K)',
        'ql-image': 'Insert / Upload Image',
        'ql-video': 'Embed Video',
        'ql-clean': 'Clear Formatting',
    };

    function attachTooltips(toolbarEl) {
        if (!toolbarEl) return;
        Object.keys(tooltips).forEach((selector) => {
            toolbarEl.querySelectorAll(`.${selector}`).forEach((btn) => {
                btn.setAttribute('title', tooltips[selector]);
            });
        });

        const headerPicker = toolbarEl.querySelector('.ql-header .ql-picker-label');
        if (headerPicker) headerPicker.setAttribute('title', 'Text Style / Heading Level');

        const fontPicker = toolbarEl.querySelector('.ql-font .ql-picker-label');
        if (fontPicker) fontPicker.setAttribute('title', 'Font Family');

        const sizePicker = toolbarEl.querySelector('.ql-size .ql-picker-label');
        if (sizePicker) sizePicker.setAttribute('title', 'Font Size');

        const colorPicker = toolbarEl.querySelector('.ql-color .ql-picker-label');
        if (colorPicker) colorPicker.setAttribute('title', 'Text Color');

        const bgPicker = toolbarEl.querySelector('.ql-background .ql-picker-label');
        if (bgPicker) bgPicker.setAttribute('title', 'Highlight Color');

        const alignPicker = toolbarEl.querySelector('.ql-align .ql-picker-label');
        if (alignPicker) alignPicker.setAttribute('title', 'Text Alignment');
    }

    // 6. Status Bar Creator & Updater
    function createStatusBar(shell) {
        const bar = document.createElement('div');
        bar.className = 'rich-editor-statusbar';
        bar.innerHTML = `
            <div class="flex items-center gap-3 text-xs">
                <span class="flex items-center gap-1.5 font-bold text-slate-900">
                    <svg class="w-3.5 h-3.5 text-[#FD5528]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    <span data-word-count>0 words</span>
                </span>
                <span class="text-slate-300">•</span>
                <span data-char-count class="text-slate-700 font-semibold">0 characters</span>
                <span class="text-slate-300">•</span>
                <span data-reading-time class="text-slate-700 font-semibold">~1 min read</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-2.5 py-0.5 text-[11px] font-bold text-emerald-800">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
                    Ready
                </span>
                <span data-mode-label class="text-[11px] text-slate-600 font-bold">Visual mode</span>
            </div>
        `;
        shell.appendChild(bar);
        return bar;
    }

    function updateStats(quill, bar) {
        if (!bar) return;
        const text = quill.getText().trim();
        const words = text ? (text.match(/\S+/g) || []).length : 0;
        const chars = text.length;
        const readingTime = Math.max(1, Math.ceil(words / 200));

        const wordEl = bar.querySelector('[data-word-count]');
        const charEl = bar.querySelector('[data-char-count]');
        const timeEl = bar.querySelector('[data-reading-time]');

        if (wordEl) wordEl.textContent = `${words.toLocaleString()} ${words === 1 ? 'word' : 'words'}`;
        if (charEl) charEl.textContent = `${chars.toLocaleString()} ${chars === 1 ? 'char' : 'characters'}`;
        if (timeEl) timeEl.textContent = `~${readingTime} min read`;
    }

    // 7. HTML Source Code Textarea
    function createHtmlEditor(shell) {
        const textarea = document.createElement('textarea');
        textarea.className = 'ql-html-editor';
        textarea.setAttribute('spellcheck', 'false');
        textarea.setAttribute('placeholder', '<!-- Edit raw HTML source code here -->');
        shell.appendChild(textarea);
        return textarea;
    }

    function toggleHtmlSource(quill, htmlEditor, shell, toolbarBtn, modeLabel) {
        const isHtmlMode = htmlEditor.classList.contains('active');
        const container = shell.querySelector('.ql-container');

        if (!isHtmlMode) {
            let html = quill.root.innerHTML;
            html = html.replace(/><(?!\/)/g, '>\n<');
            htmlEditor.value = html;

            container.style.display = 'none';
            htmlEditor.classList.add('active');
            htmlEditor.focus();
            if (toolbarBtn) toolbarBtn.classList.add('ql-active');
            if (modeLabel) modeLabel.textContent = 'HTML Source mode';
            showToast('Switched to HTML Source mode');
        } else {
            quill.root.innerHTML = htmlEditor.value;
            htmlEditor.classList.remove('active');
            container.style.display = '';
            quill.focus();
            if (toolbarBtn) toolbarBtn.classList.remove('ql-active');
            if (modeLabel) modeLabel.textContent = 'Visual mode';
            showToast('Switched to Visual Editor mode');
        }
    }

    // 8. Fullscreen Distraction-Free Mode
    function toggleFullscreen(shell, fullscreenBtn) {
        const isFullscreen = shell.classList.toggle('ql-fullscreen');
        if (isFullscreen) {
            document.body.style.overflow = 'hidden';
            if (fullscreenBtn) fullscreenBtn.classList.add('ql-active');
            showToast('Fullscreen mode (Press Esc to exit)');
        } else {
            document.body.style.overflow = '';
            if (fullscreenBtn) fullscreenBtn.classList.remove('ql-active');
        }
    }

    // 9. Paste Interceptor (Converts pasted screenshots to server uploads)
    function attachPasteHandler(quill) {
        quill.root.addEventListener('paste', async (e) => {
            const clipboardData = e.clipboardData || window.clipboardData;
            if (!clipboardData || !clipboardData.items) return;

            for (let i = 0; i < clipboardData.items.length; i++) {
                const item = clipboardData.items[i];
                if (item.type.indexOf('image') !== -1) {
                    e.preventDefault();
                    const file = item.getAsFile();
                    if (!file) continue;

                    showToast('Uploading pasted screenshot...');
                    const range = quill.getSelection(true) || { index: quill.getLength() };

                    try {
                        const formData = new FormData();
                        formData.append('image', file);

                        const response = await fetch('/blogs/upload-image', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': getCsrfToken(),
                                Accept: 'application/json',
                            },
                            body: formData,
                        });

                        const data = await response.json();
                        if (response.ok && data.success) {
                            insertImageIntoEditor(quill, range.index, data.url, 'Pasted screenshot');
                            showToast('Screenshot uploaded & inserted');
                        } else {
                            throw new Error(data.message || 'Upload failed');
                        }
                    } catch (err) {
                        console.error('Paste upload error:', err);
                        showToast('Could not upload pasted image to server', 'error');
                    }
                    return;
                }
            }
        });
    }

    // 10. Toolbar DOM Enhancer: Injects Undo/Redo, Divider, Table, HTML & Fullscreen
    function enhanceToolbarDOM(toolbarEl, quill, shell, htmlEditor, statusBar) {
        if (!toolbarEl) return;

        // 1. Prepend History [Undo | Redo] format group
        const historyGroup = document.createElement('span');
        historyGroup.className = 'ql-formats ql-custom-history';

        const undoBtn = document.createElement('button');
        undoBtn.type = 'button';
        undoBtn.className = 'ql-custom-undo';
        undoBtn.setAttribute('title', 'Undo (Ctrl+Z)');
        undoBtn.innerHTML = icons.undo;
        undoBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const history = quill.getModule('history');
            if (history) history.undo();
            else if (quill.history) quill.history.undo();
        });

        const redoBtn = document.createElement('button');
        redoBtn.type = 'button';
        redoBtn.className = 'ql-custom-redo';
        redoBtn.setAttribute('title', 'Redo (Ctrl+Y)');
        redoBtn.innerHTML = icons.redo;
        redoBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const history = quill.getModule('history');
            if (history) history.redo();
            else if (quill.history) quill.history.redo();
        });

        historyGroup.appendChild(undoBtn);
        historyGroup.appendChild(redoBtn);
        toolbarEl.insertBefore(historyGroup, toolbarEl.firstChild);

        // 2. Append Divider (<hr>) to blocks group
        const codeBlockBtn = toolbarEl.querySelector('.ql-code-block');
        if (codeBlockBtn && codeBlockBtn.parentNode) {
            const hrBtn = document.createElement('button');
            hrBtn.type = 'button';
            hrBtn.className = 'ql-custom-hr';
            hrBtn.setAttribute('title', 'Insert Section Divider (<hr>)');
            hrBtn.innerHTML = icons.divider;
            hrBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const range = quill.getSelection(true) || { index: quill.getLength() };
                quill.clipboard.dangerouslyPasteHTML(range.index, '<hr><p><br></p>');
                quill.setSelection(range.index + 2);
                showToast('Divider inserted');
            });
            codeBlockBtn.parentNode.appendChild(hrBtn);
        }

        // 3. Append Table to media group
        const videoBtn = toolbarEl.querySelector('.ql-video');
        if (videoBtn && videoBtn.parentNode) {
            const tableBtn = document.createElement('button');
            tableBtn.type = 'button';
            tableBtn.className = 'ql-custom-table';
            tableBtn.setAttribute('title', 'Insert Table (3x3)');
            tableBtn.innerHTML = icons.table;
            tableBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const range = quill.getSelection(true) || { index: quill.getLength() };
                const tableHtml = `
                    <table class="table-auto w-full my-4 border border-slate-300">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 p-2.5 bg-slate-100 font-bold text-slate-900 text-left">Column 1</th>
                                <th class="border border-slate-300 p-2.5 bg-slate-100 font-bold text-slate-900 text-left">Column 2</th>
                                <th class="border border-slate-300 p-2.5 bg-slate-100 font-bold text-slate-900 text-left">Column 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-slate-300 p-2 text-slate-800">Data 1</td>
                                <td class="border border-slate-300 p-2 text-slate-800">Data 2</td>
                                <td class="border border-slate-300 p-2 text-slate-800">Data 3</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-300 p-2 text-slate-800">Data 4</td>
                                <td class="border border-slate-300 p-2 text-slate-800">Data 5</td>
                                <td class="border border-slate-300 p-2 text-slate-800">Data 6</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><br></p>
                `;
                quill.clipboard.dangerouslyPasteHTML(range.index, tableHtml);
                quill.setSelection(range.index + 1);
                showToast('Table (3x3) inserted');
            });
            videoBtn.parentNode.appendChild(tableBtn);
        }

        // 4. Append HTML Source (< / >) and Fullscreen at end of toolbar
        const powerGroup = document.createElement('span');
        powerGroup.className = 'ql-formats ql-custom-power';

        const htmlBtn = document.createElement('button');
        htmlBtn.type = 'button';
        htmlBtn.className = 'ql-custom-html';
        htmlBtn.setAttribute('title', 'View / Edit HTML Source Code (< / >)');
        htmlBtn.innerHTML = icons.html;
        htmlBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const modeLabel = statusBar.querySelector('[data-mode-label]');
            toggleHtmlSource(quill, htmlEditor, shell, htmlBtn, modeLabel);
        });

        const fullscreenBtn = document.createElement('button');
        fullscreenBtn.type = 'button';
        fullscreenBtn.className = 'ql-custom-fullscreen';
        fullscreenBtn.setAttribute('title', 'Fullscreen Writing Mode (Esc)');
        fullscreenBtn.innerHTML = icons.fullscreen;
        fullscreenBtn.addEventListener('click', (e) => {
            e.preventDefault();
            toggleFullscreen(shell, fullscreenBtn);
        });

        powerGroup.appendChild(htmlBtn);
        powerGroup.appendChild(fullscreenBtn);
        toolbarEl.appendChild(powerGroup);

        // 5. Connect Link, Image, Video buttons to custom modals
        const linkBtn = toolbarEl.querySelector('.ql-link');
        if (linkBtn) {
            linkBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                openLinkModal(quill);
            }, true);
        }

        const imageBtn = toolbarEl.querySelector('.ql-image');
        if (imageBtn) {
            imageBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                openImageModal(quill);
            }, true);
        }

        const videoBtnToolbar = toolbarEl.querySelector('.ql-video');
        if (videoBtnToolbar) {
            videoBtnToolbar.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                openVideoModal(quill);
            }, true);
        }
    }

    // 11. Main Robust Initializer (Universal Selector & Fallback)
    window.initSingleEditor = function (editorContainer, hiddenInput, placeholder = 'Write content here...') {
        if (!editorContainer || !hiddenInput || typeof Quill === 'undefined' || editorContainer.dataset.quillReady === '1') {
            return;
        }

        editorContainer.dataset.quillReady = '1';

        // Find or create .rich-editor-shell
        let shell = editorContainer.closest('.rich-editor-shell');
        if (!shell) {
            shell = document.createElement('div');
            shell.className = 'rich-editor-shell min-h-[420px] w-full rounded-2xl border border-slate-200 bg-white shadow-sm flex flex-col overflow-visible';
            editorContainer.parentNode.insertBefore(shell, editorContainer);
            shell.appendChild(editorContainer);
        }

        // Standard, rock-solid toolbar formats (compatible with ALL Quill versions)
        const standardToolbar = [
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            [{ font: [] }],
            [{ size: ['small', false, 'large', 'huge'] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ color: [] }, { background: [] }],
            [{ script: 'sub' }, { script: 'super' }],
            ['code'],
            [{ align: [] }],
            [{ list: 'ordered' }, { list: 'bullet' }],
            [{ indent: '-1' }, { indent: '+1' }],
            ['blockquote', 'code-block'],
            ['link', 'image', 'video'],
            ['clean'],
        ];

        // Initialize Quill safely
        const quill = new Quill(editorContainer, {
            theme: 'snow',
            placeholder,
            modules: {
                toolbar: standardToolbar,
            },
        });

        // HTML Source Textarea
        const htmlEditor = createHtmlEditor(shell);

        // Status Bar
        const statusBar = createStatusBar(shell);

        // Enhance toolbar DOM with Undo/Redo, Divider, Table, HTML & Fullscreen
        const toolbarEl = shell.querySelector('.ql-toolbar');
        enhanceToolbarDOM(toolbarEl, quill, shell, htmlEditor, statusBar);
        attachTooltips(toolbarEl);

        editorContainer.__quill = quill;

        // Clicking anywhere in the editor container immediately focuses Quill
        editorContainer.addEventListener('click', (e) => {
            if (e.target === editorContainer || e.target.classList.contains('ql-container')) {
                quill.focus();
            }
        });

        // Pre-populate content cleanly
        const initialContent = hiddenInput.value || '';
        if (initialContent) {
            const cleanContent = initialContent.replace(/^<\?xml[^>]*\?>\s*/i, '');
            if (quill.clipboard && typeof quill.clipboard.dangerouslyPasteHTML === 'function') {
                quill.clipboard.dangerouslyPasteHTML(cleanContent);
            } else {
                quill.root.innerHTML = cleanContent;
            }
        }

        // Live Synchronization
        const syncContent = () => {
            const isHtmlMode = htmlEditor.classList.contains('active');
            if (isHtmlMode) {
                quill.root.innerHTML = htmlEditor.value;
            }
            const html = quill.root.innerHTML;
            hiddenInput.value = html === '<p><br></p>' ? '' : html;
            updateStats(quill, statusBar);
        };

        quill.on('text-change', syncContent);
        quill.on('selection-change', () => updateStats(quill, statusBar));
        htmlEditor.addEventListener('input', syncContent);

        const form = editorContainer.closest('form');
        if (form) {
            form.addEventListener('submit', () => {
                syncContent();
            });
        }

        // Attach screenshot paste handler
        attachPasteHandler(quill);

        // Escape key exit from fullscreen
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && shell.classList.contains('ql-fullscreen')) {
                toggleFullscreen(shell, shell.querySelector('.ql-custom-fullscreen'));
            }
        });

        // Initial stats update
        syncContent();
    };

    window.initProfessionalQuillEditors = function (formSelector, editorSelector, hiddenSelector, placeholder = 'Write content here...') {
        // Form-scoped search
        if (formSelector) {
            document.querySelectorAll(formSelector).forEach((form) => {
                const editorContainer = form.querySelector(editorSelector);
                const hiddenInput = form.querySelector(hiddenSelector);
                if (editorContainer && hiddenInput) {
                    window.initSingleEditor(editorContainer, hiddenInput, placeholder);
                }
            });
        }

        // Universal fallback direct search: find by editorSelector anywhere
        document.querySelectorAll(editorSelector).forEach((editorContainer) => {
            if (editorContainer.dataset.quillReady === '1') return;
            const form = editorContainer.closest('form');
            let hiddenInput = (form ? form.querySelector(hiddenSelector) : null)
                || (editorContainer.parentElement ? editorContainer.parentElement.querySelector(hiddenSelector) : null)
                || (editorContainer.parentElement ? editorContainer.parentElement.querySelector('input[type="hidden"]') : null);
            if (editorContainer && hiddenInput) {
                window.initSingleEditor(editorContainer, hiddenInput, placeholder);
            }
        });
    };

    // 12. Fail-Safe Universal Auto-Runner
    function runAutoInit() {
        if (typeof Quill === 'undefined') return;

        // Auto initialize blog editors
        window.initProfessionalQuillEditors(
            '[data-blog-form]',
            '[data-blog-editor]',
            '[data-blog-content]',
            'Write your blog content here...'
        );

        // Auto initialize section rich editors
        window.initProfessionalQuillEditors(
            '[data-rich-form]',
            '[data-rich-editor]',
            '[data-rich-content]',
            'Write rich text here...'
        );

        // Universal wildcard fallback: Any standalone [data-blog-editor] or [data-rich-editor]
        document.querySelectorAll('[data-blog-editor]').forEach((el) => {
            if (el.dataset.quillReady === '1') return;
            const form = el.closest('form');
            const hidden = form ? form.querySelector('[data-blog-content], input[name="content"]') : null;
            if (hidden) window.initSingleEditor(el, hidden, 'Write your blog content here...');
        });

        document.querySelectorAll('[data-rich-editor]').forEach((el) => {
            if (el.dataset.quillReady === '1') return;
            const form = el.closest('form');
            const hidden = form ? form.querySelector('[data-rich-content], input[name="description"]') : null;
            if (hidden) window.initSingleEditor(el, hidden, 'Write rich text here...');
        });
    }

    // Run immediately if DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', runAutoInit);
    } else {
        runAutoInit();
    }

    // High-reliability interval poller to guarantee initialization
    let attempts = 0;
    const pollInterval = setInterval(() => {
        if (typeof Quill !== 'undefined') {
            runAutoInit();
            const unready = document.querySelectorAll('[data-blog-editor]:not([data-quill-ready="1"]), [data-rich-editor]:not([data-quill-ready="1"])');
            if (unready.length === 0 || ++attempts > 40) {
                clearInterval(pollInterval);
            }
        } else if (++attempts > 80) {
            clearInterval(pollInterval);
        }
    }, 50);

    // Also run on window load to catch late assets
    window.addEventListener('load', runAutoInit);
})();
