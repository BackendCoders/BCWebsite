@php
    $blogModel = $blog ?? null;
    $isEdit = (bool) $blogModel;
    $formTocItems = old('table_of_contents', $blogModel?->table_of_contents ?? []);
    if (empty($formTocItems)) {
        $formTocItems = [['title' => '', 'anchor' => '']];
    }

    $formFaqItems = old('faqs', $blogModel?->faqs ?? []);
    if (empty($formFaqItems)) {
        $formFaqItems = [['question' => '', 'answer' => '']];
    }

    $isFeaturedValue = old('is_featured', $blogModel?->is_featured ?? false);
    $isPublishedValue = old('is_published', $blogModel?->is_published ?? false);
    $contentValue = old('content', $blogModel?->content ?? '');
    $contentValue = preg_replace('/^<\?xml[^>]*\?>\s*/i', '', (string)$contentValue);
@endphp

<div class="grid gap-6 lg:grid-cols-[minmax(0,1.55fr)_minmax(320px,0.75fr)]">
    <div class="space-y-6">
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <div class="mb-6 flex flex-wrap items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">Blog editor</p>
                    <h3 class="mt-2 text-2xl font-bold text-slate-900">{{ $isEdit ? 'Edit blog' : 'Create blog' }}</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Manage title, category, content, SEO, table of contents, FAQs, and publishing state from one form.
                    </p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-emerald-600">Content</span>
                    <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-sky-600">SEO</span>
                    <span class="rounded-full bg-[#FD5528]/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-[#FD5528]">FAQ</span>
                </div>
            </div>

            <form action="{{ $isEdit ? route('blogs.update', $blogModel) : route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6" data-blog-form>
                @csrf
                @if($isEdit)
                    @method('PUT')
                @endif

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-slate-700">Title</label>
                        <input type="text" name="title" id="blog_title" value="{{ old('title', $blogModel?->title ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('title')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-slate-700">Slug</label>
                        <input type="text" name="slug" id="blog_slug" value="{{ old('slug', $blogModel?->slug ?? '') }}" placeholder="why-small-business-websites-fail-in-india" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('slug')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-slate-700">Category</label>
                        <select name="category_id" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $blogModel?->category_id ?? null) == $category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-slate-700">Blog image</label>
                        <input type="file" name="image" accept="image/*" class="w-full rounded-2xl border border-dashed border-slate-300 bg-white px-4 py-3 text-sm text-slate-600 shadow-sm outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-[#FD5528] file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('image')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror

                        @if($isEdit && ($blogModel?->image ?? null))
                            <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
                                <img alt="" src="{{ $blogModel->getImageUrl() }}" alt="{{ $blogModel->title }}" class="h-44 w-full object-cover">
                            </div>
                        @endif
                    </div>

                    <div class="grid gap-3">
                        <label class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                            <input id="is_published" type="checkbox" name="is_published" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked($isPublishedValue)>
                            <span class="text-sm font-medium text-slate-700">Publish immediately</span>
                        </label>

                        <label class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 shadow-sm">
                            <input id="is_featured" type="checkbox" name="is_featured" value="1" class="h-5 w-5 rounded border-slate-300 text-[#FD5528] focus:ring-[#FD5528]" @checked($isFeaturedValue)>
                            <span class="text-sm font-medium text-slate-700">Mark as featured</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Excerpt</label>
                    <textarea name="excerpt" id="blog_excerpt" rows="4" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('excerpt', $blogModel?->excerpt ?? '') }}</textarea>
                    @error('excerpt')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div>
                    <div class="mb-2 flex items-center justify-between">
                        <label class="block text-sm font-bold text-slate-900">Content</label>
                        <span class="text-xs font-medium text-slate-600">Professional rich text editor with full formatting & media support</span>
                    </div>
                    <div class="rich-editor-shell min-h-[420px] w-full rounded-2xl border border-slate-300 bg-white shadow-sm flex flex-col overflow-visible">
                        <div data-blog-editor class="w-full min-h-[340px] flex-1 bg-white"></div>
                    </div>
                    <textarea name="content" data-blog-content class="hidden">{!! htmlspecialchars($contentValue, ENT_QUOTES, 'UTF-8') !!}</textarea>
                    @error('content')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div class="grid gap-5 md:grid-cols-3">
                    <div class="space-y-2 md:col-span-1">
                        <div class="flex items-center justify-between">
                            <label class="block text-sm font-medium text-slate-700">Meta title</label>
                            <span id="meta_title_count" class="text-xs font-mono text-slate-400">0/60</span>
                        </div>
                        <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $blogModel?->meta_title ?? '') }}" placeholder="Optimized SEO Title" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('meta_title')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>

                    <div class="space-y-2 md:col-span-2">
                        <div class="flex items-center justify-between">
                            <label class="block text-sm font-medium text-slate-700">Meta description</label>
                            <span id="meta_description_count" class="text-xs font-mono text-slate-400">0/160</span>
                        </div>
                        <textarea name="meta_description" id="meta_description" rows="3" placeholder="Target 140-160 characters for maximum search engine click-through rate" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('meta_description', $blogModel?->meta_description ?? '') }}</textarea>
                        @error('meta_description')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-slate-700">Meta keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords', $blogModel?->meta_keywords ?? '') }}" placeholder="seo services kanpur, web development, web design india" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                    @error('meta_keywords')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-slate-50 p-5">
                    <div class="mb-5 flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Table of contents</p>
                            <h4 class="mt-2 text-lg font-bold text-slate-900">Section anchors</h4>
                        </div>
                        <button type="button" data-add-toc class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
                            Add item
                        </button>
                    </div>

                    <div data-toc-list class="space-y-3">
                        @foreach($formTocItems as $index => $item)
                            <div class="grid gap-3 md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_auto] toc-row">
                                <input type="text" name="table_of_contents[{{ $index }}][title]" value="{{ $item['title'] ?? '' }}" placeholder="Section title" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                                <input type="text" name="table_of_contents[{{ $index }}][anchor]" value="{{ $item['anchor'] ?? '' }}" placeholder="section-anchor" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                                <button type="button" data-remove-row class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600">Remove</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-[1.75rem] border border-slate-200 bg-slate-50 p-5">
                    <div class="mb-5 flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">FAQs</p>
                            <h4 class="mt-2 text-lg font-bold text-slate-900">Frequently asked questions</h4>
                        </div>
                        <button type="button" data-add-faq class="rounded-xl bg-[#FD5528] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#e94c20]">
                            Add FAQ
                        </button>
                    </div>

                    <div data-faq-list class="space-y-4">
                        @foreach($formFaqItems as $index => $faq)
                            <div class="faq-row rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                                <div class="mb-4 flex items-center justify-between gap-3">
                                    <h5 class="font-semibold text-slate-800">FAQ #{{ $index + 1 }}</h5>
                                    <button type="button" data-remove-row class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600">Remove</button>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <label class="mb-2 block text-sm font-medium text-slate-700">Question</label>
                                        <input type="text" name="faqs[{{ $index }}][question]" value="{{ $faq['question'] ?? '' }}" placeholder="Enter FAQ question" class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                                    </div>

                                    <div>
                                        <label class="mb-2 block text-sm font-medium text-slate-700">Answer</label>
                                        <textarea name="faqs[{{ $index }}][answer]" rows="4" placeholder="Enter FAQ answer" class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ $faq['answer'] ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col-reverse gap-3 border-t border-slate-200 pt-4 sm:flex-row sm:justify-end">
                    <a href="{{ route('blogs.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-[#FD5528] hover:text-[#FD5528]">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex items-center justify-center rounded-2xl bg-[#FD5528] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#FD5528]/25 transition hover:bg-[#e94c20] hover:shadow-xl hover:shadow-[#FD5528]/30 active:scale-[0.98]">
                        {{ $isEdit ? 'Update Blog' : 'Save Blog' }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <aside class="space-y-6">
        <!-- Live Google SEO SERP Preview Card -->
        <div class="rounded-[2rem] border border-slate-200/70 bg-white/95 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FD5528]">SEO Preview</p>
                    <h4 class="mt-1 text-lg font-bold text-slate-900">Google Search Result</h4>
                </div>
                <span class="rounded-full bg-emerald-500/10 px-2.5 py-1 text-xs font-semibold text-emerald-600">Live</span>
            </div>

            <!-- SERP Box -->
            <div class="mt-4 rounded-2xl border border-slate-200 bg-slate-50/70 p-4 font-sans">
                <div class="flex items-center gap-2 mb-1.5">
                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-slate-200 text-[10px] font-bold text-slate-700">G</span>
                    <span class="text-xs text-slate-500 truncate">backendcodersindia.com &rsaquo; blog</span>
                </div>
                <h5 id="seoPreviewTitle" class="text-base font-medium text-[#1a0dab] line-clamp-1 hover:underline cursor-pointer">
                    {{ $blogModel?->meta_title ?: ($blogModel?->title ?: 'Blog Post Title Preview') }}
                </h5>
                <p class="text-xs text-[#006621] font-mono truncate">
                    https://backendcodersindia.com/blog/<span id="seoPreviewSlug">{{ $blogModel?->slug ?: 'post-slug' }}</span>
                </p>
                <p id="seoPreviewSnippet" class="mt-1.5 text-xs text-slate-600 line-clamp-2 leading-relaxed">
                    {{ $blogModel?->meta_description ?: ($blogModel?->excerpt ?: 'Preview description will appear here as you type in your meta description or excerpt...') }}
                </p>
            </div>

            <!-- Live SEO Checklist -->
            <div class="mt-5 space-y-2.5 border-t border-slate-100 pt-4">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">SEO Health Checklist</p>
                <div class="flex items-center justify-between text-xs text-slate-600" id="checkTitle">
                    <span>Meta Title (50-60 chars)</span>
                    <span class="status-indicator font-semibold text-slate-400">0</span>
                </div>
                <div class="flex items-center justify-between text-xs text-slate-600" id="checkDesc">
                    <span>Meta Description (120-160 chars)</span>
                    <span class="status-indicator font-semibold text-slate-400">0</span>
                </div>
                <div class="flex items-center justify-between text-xs text-slate-600" id="checkSlug">
                    <span>Clean URL Slug</span>
                    <span class="status-indicator font-semibold text-slate-400">&mdash;</span>
                </div>
                <div class="flex items-center justify-between text-xs text-slate-600" id="checkKeywords">
                    <span>Target Keywords</span>
                    <span class="status-indicator font-semibold text-slate-400">&mdash;</span>
                </div>
            </div>
        </div>

        <div class="rounded-[2rem] border border-slate-200/70 bg-white/90 p-6 shadow-xl shadow-slate-200/40 backdrop-blur-xl">
            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-slate-400">Publishing</p>
            <h4 class="mt-2 text-xl font-bold text-slate-900">What this form controls</h4>
            <ul class="mt-4 space-y-3 text-sm leading-6 text-slate-500">
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Public title, excerpt, content, and image.
                </li>
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    SEO title, description, and keywords.
                </li>
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Table of contents and FAQ sections for the public page.
                </li>
                <li class="flex gap-3">
                    <span class="mt-1 h-2 w-2 rounded-full bg-[#FD5528]"></span>
                    Featured and publish toggles for dashboard visibility.
                </li>
            </ul>
        </div>

        <div class="rounded-[2rem] border border-slate-200/70 bg-gradient-to-br from-[#FD5528] to-[#e94c20] p-6 text-white shadow-xl shadow-[#FD5528]/25">
            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/75">Tip</p>
            <h4 class="mt-2 text-xl font-bold">Add 3 to 5 FAQ items</h4>
            <p class="mt-3 text-sm leading-6 text-white/85">
                That gives the public detail page enough depth for users and makes the content more useful for search.
            </p>
        </div>
    </aside>
</div>

<template id="tocTemplate">
    <div class="grid gap-3 md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_auto] toc-row">
        <input type="text" name="table_of_contents[__INDEX__][title]" placeholder="Section title" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
        <input type="text" name="table_of_contents[__INDEX__][anchor]" placeholder="section-anchor" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
        <button type="button" data-remove-row class="rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600">Remove</button>
    </div>
</template>

<template id="faqTemplate">
    <div class="faq-row rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
        <div class="mb-4 flex items-center justify-between gap-3">
            <h5 class="font-semibold text-slate-800">FAQ</h5>
            <button type="button" data-remove-row class="rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-500 transition hover:border-rose-300 hover:text-rose-600">Remove</button>
        </div>

        <div class="space-y-4">
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Question</label>
                <input type="text" name="faqs[__INDEX__][question]" placeholder="Enter FAQ question" class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Answer</label>
                <textarea name="faqs[__INDEX__][answer]" rows="4" placeholder="Enter FAQ answer" class="w-full rounded-2xl border border-slate-200 px-4 py-3 outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10"></textarea>
            </div>
        </div>
    </div>
</template>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tocList = document.querySelector('[data-toc-list]');
    const faqList = document.querySelector('[data-faq-list]');
    const tocTemplate = document.getElementById('tocTemplate');
    const faqTemplate = document.getElementById('faqTemplate');
    const addTocButton = document.querySelector('[data-add-toc]');
    const addFaqButton = document.querySelector('[data-add-faq]');
    let tocIndex = tocList ? tocList.querySelectorAll('.toc-row').length : 0;
    let faqIndex = faqList ? faqList.querySelectorAll('.faq-row').length : 0;

    const attachRemoveHandlers = (scope) => {
        scope?.querySelectorAll('[data-remove-row]').forEach((button) => {
            button.addEventListener('click', () => {
                const row = button.closest('.toc-row, .faq-row');
                if (row) {
                    row.remove();
                }
            });
        });
    };

    const addRow = (template, targetList, index) => {
        if (!template || !targetList) return;

        const html = template.innerHTML.replaceAll('__INDEX__', index);
        const wrapper = document.createElement('div');
        wrapper.innerHTML = html.trim();
        const node = wrapper.firstElementChild;
        targetList.appendChild(node);
        attachRemoveHandlers(node);
    };

    addTocButton?.addEventListener('click', () => addRow(tocTemplate, tocList, tocIndex++));
    addFaqButton?.addEventListener('click', () => addRow(faqTemplate, faqList, faqIndex++));

    attachRemoveHandlers(document);

    // Guaranteed form synchronization and fail-safe initializer for blog content
    (function () {
        const editorContainer = document.querySelector('[data-blog-editor]');
        const hiddenInput = document.querySelector('[data-blog-content]');
        if (!editorContainer || !hiddenInput) return;

        function runInit() {
            if (editorContainer.dataset.quillReady === '1') return;

            // 1. Try primary rich editor engine
            if (typeof window.initSingleEditor === 'function') {
                window.initSingleEditor(editorContainer, hiddenInput, 'Write your blog content here...');
                return;
            }

            // 2. Direct Quill fallback if layout script ran differently
            if (typeof Quill !== 'undefined') {
                editorContainer.dataset.quillReady = '1';
                const q = new Quill(editorContainer, {
                    theme: 'snow',
                    placeholder: 'Write your blog content here...',
                    modules: {
                        toolbar: [
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
                            ['clean']
                        ]
                    }
                });

                editorContainer.__quill = q;

                const val = hiddenInput.value || '';
                if (val) {
                    const clean = val.replace(/^<\?xml[^>]*\?>\s*/i, '');
                    if (q.clipboard && typeof q.clipboard.dangerouslyPasteHTML === 'function') {
                        q.clipboard.dangerouslyPasteHTML(clean);
                    } else {
                        q.root.innerHTML = clean;
                    }
                }

                const sync = () => {
                    const html = q.root.innerHTML;
                    hiddenInput.value = (html === '<p><br></p>') ? '' : html;
                };

                q.on('text-change', sync);

                editorContainer.addEventListener('click', () => q.focus());

                const form = editorContainer.closest('form');
                if (form) {
                    form.addEventListener('submit', sync);
                }
            }
        }

        // Try initialization immediately and on all lifecycle events
        runInit();
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', runInit);
        }
        window.addEventListener('load', runInit);

        let polls = 0;
        const intervalId = setInterval(() => {
            runInit();
            polls++;
            if (editorContainer.dataset.quillReady === '1' || polls > 50) {
                clearInterval(intervalId);
                // Emergency fallback: if Quill still could not load after 5 seconds, reveal textarea
                if (editorContainer.dataset.quillReady !== '1' && typeof Quill === 'undefined') {
                    hiddenInput.classList.remove('hidden');
                    hiddenInput.className = 'w-full min-h-[340px] rounded-2xl border border-slate-300 p-4 font-mono text-sm text-slate-800 outline-none focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10';
                    const shell = editorContainer.closest('.rich-editor-shell');
                    if (shell) {
                        shell.innerHTML = '<div class="p-4 text-xs font-bold text-amber-700 bg-amber-50 border-b border-amber-200 flex items-center justify-between"><span>Direct Editor Mode (CDN loading was blocked or offline)</span><span class="text-slate-500">HTML / Text supported</span></div>';
                        shell.appendChild(hiddenInput);
                    }
                }
            }
        }, 100);
    })();

    // Live SEO Dashboard Integration
    (function () {
        const titleInput = document.getElementById('blog_title');
        const slugInput = document.getElementById('blog_slug');
        const excerptInput = document.getElementById('blog_excerpt');
        const metaTitleInput = document.getElementById('meta_title');
        const metaDescInput = document.getElementById('meta_description');
        const metaKeywordsInput = document.getElementById('meta_keywords');

        const previewTitle = document.getElementById('seoPreviewTitle');
        const previewSlug = document.getElementById('seoPreviewSlug');
        const previewSnippet = document.getElementById('seoPreviewSnippet');
        const metaTitleCount = document.getElementById('meta_title_count');
        const metaDescCount = document.getElementById('meta_description_count');

        const checkTitle = document.getElementById('checkTitle')?.querySelector('.status-indicator');
        const checkDesc = document.getElementById('checkDesc')?.querySelector('.status-indicator');
        const checkSlug = document.getElementById('checkSlug')?.querySelector('.status-indicator');
        const checkKeywords = document.getElementById('checkKeywords')?.querySelector('.status-indicator');

        function updateSeo() {
            const mTitle = (metaTitleInput?.value || '').trim();
            const bTitle = (titleInput?.value || '').trim();
            const mDesc = (metaDescInput?.value || '').trim();
            const bExcerpt = (excerptInput?.value || '').trim();
            const bSlug = (slugInput?.value || '').trim();
            const mKeywords = (metaKeywordsInput?.value || '').trim();

            const displayTitle = mTitle || bTitle || 'Blog Post Title Preview';
            if (previewTitle) previewTitle.textContent = displayTitle;

            if (previewSlug) previewSlug.textContent = bSlug || 'post-slug';

            const displaySnippet = mDesc || bExcerpt || 'Preview description will appear here as you type in your meta description or excerpt...';
            if (previewSnippet) previewSnippet.textContent = displaySnippet;

            // Character counters
            if (metaTitleCount) {
                const len = mTitle.length;
                metaTitleCount.textContent = len + '/60';
                if (len >= 45 && len <= 60) {
                    metaTitleCount.className = 'text-xs font-mono font-bold text-emerald-600';
                } else if (len > 60) {
                    metaTitleCount.className = 'text-xs font-mono font-bold text-rose-500';
                } else {
                    metaTitleCount.className = 'text-xs font-mono text-slate-400';
                }
            }

            if (metaDescCount) {
                const len = mDesc.length;
                metaDescCount.textContent = len + '/160';
                if (len >= 130 && len <= 160) {
                    metaDescCount.className = 'text-xs font-mono font-bold text-emerald-600';
                } else if (len > 160) {
                    metaDescCount.className = 'text-xs font-mono font-bold text-rose-500';
                } else {
                    metaDescCount.className = 'text-xs font-mono text-slate-400';
                }
            }

            // Checklist indicators
            if (checkTitle) {
                const tLen = (mTitle || bTitle).length;
                if (tLen >= 35 && tLen <= 65) {
                    checkTitle.textContent = '✓ Optimal (' + tLen + ' chars)';
                    checkTitle.className = 'status-indicator font-semibold text-emerald-600';
                } else if (tLen > 0) {
                    checkTitle.textContent = tLen + ' chars';
                    checkTitle.className = 'status-indicator font-semibold text-amber-500';
                } else {
                    checkTitle.textContent = 'Missing';
                    checkTitle.className = 'status-indicator font-semibold text-rose-500';
                }
            }

            if (checkDesc) {
                const dLen = (mDesc || bExcerpt).length;
                if (dLen >= 110 && dLen <= 165) {
                    checkDesc.textContent = '✓ Optimal (' + dLen + ' chars)';
                    checkDesc.className = 'status-indicator font-semibold text-emerald-600';
                } else if (dLen > 0) {
                    checkDesc.textContent = dLen + ' chars';
                    checkDesc.className = 'status-indicator font-semibold text-amber-500';
                } else {
                    checkDesc.textContent = 'Missing';
                    checkDesc.className = 'status-indicator font-semibold text-rose-500';
                }
            }

            if (checkSlug) {
                if (bSlug && /^[a-z0-9\-]+$/i.test(bSlug)) {
                    checkSlug.textContent = '✓ Valid';
                    checkSlug.className = 'status-indicator font-semibold text-emerald-600';
                } else if (bSlug) {
                    checkSlug.textContent = 'Needs clean slug';
                    checkSlug.className = 'status-indicator font-semibold text-amber-500';
                } else {
                    checkSlug.textContent = 'Auto-generates';
                    checkSlug.className = 'status-indicator font-semibold text-slate-400';
                }
            }

            if (checkKeywords) {
                const count = mKeywords ? mKeywords.split(',').filter(k => k.trim().length > 0).length : 0;
                if (count >= 2) {
                    checkKeywords.textContent = '✓ ' + count + ' keywords';
                    checkKeywords.className = 'status-indicator font-semibold text-emerald-600';
                } else if (count === 1) {
                    checkKeywords.textContent = '1 keyword';
                    checkKeywords.className = 'status-indicator font-semibold text-amber-500';
                } else {
                    checkKeywords.textContent = 'None';
                    checkKeywords.className = 'status-indicator font-semibold text-slate-400';
                }
            }
        }

        [titleInput, slugInput, excerptInput, metaTitleInput, metaDescInput, metaKeywordsInput].forEach(el => {
            el?.addEventListener('input', updateSeo);
        });

        updateSeo();
    })();
});
</script>
