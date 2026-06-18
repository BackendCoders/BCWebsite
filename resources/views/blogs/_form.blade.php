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
                        <input type="text" name="title" value="{{ old('title', $blogModel?->title ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('title')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>

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
                                <img src="{{ $blogModel->getImageUrl() }}" alt="{{ $blogModel->title }}" class="h-44 w-full object-cover">
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
                    <textarea name="excerpt" rows="4" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
                    @error('excerpt')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-slate-700">Content</label>
                    <div data-blog-editor class="w-full rounded-2xl border border-slate-200 bg-white shadow-sm"></div>
                    <input type="hidden" name="content" data-blog-content value="{{ $contentValue }}">
                    @error('content')<p class="mt-2 text-sm text-rose-500">{{ $message }}</p>@enderror
                </div>

                <div class="grid gap-5 md:grid-cols-3">
                    <div class="space-y-2 md:col-span-1">
                        <label class="block text-sm font-medium text-slate-700">Meta title</label>
                        <input type="text" name="meta_title" value="{{ old('meta_title', $blogModel?->meta_title ?? '') }}" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
                        @error('meta_title')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>

                    <div class="space-y-2 md:col-span-2">
                        <label class="block text-sm font-medium text-slate-700">Meta description</label>
                        <textarea name="meta_description" rows="3" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">{{ old('meta_description', $blogModel?->meta_description ?? '') }}</textarea>
                        @error('meta_description')<p class="text-sm text-rose-500">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-slate-700">Meta keywords</label>
                    <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $blogModel?->meta_keywords ?? '') }}" placeholder="seo, ppc, content marketing" class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-slate-900 shadow-sm outline-none transition focus:border-[#FD5528] focus:ring-4 focus:ring-[#FD5528]/10">
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
    const blogForm = document.querySelector('[data-blog-form]');
    const tocList = document.querySelector('[data-toc-list]');
    const faqList = document.querySelector('[data-faq-list]');
    const tocTemplate = document.getElementById('tocTemplate');
    const faqTemplate = document.getElementById('faqTemplate');
    const addTocButton = document.querySelector('[data-add-toc]');
    const addFaqButton = document.querySelector('[data-add-faq]');
    const contentInput = document.querySelector('[data-blog-content]');
    const editorHost = document.querySelector('[data-blog-editor]');
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

    if (blogForm && editorHost && contentInput && typeof Quill !== 'undefined') {
        const quill = new Quill(editorHost, {
            theme: 'snow',
            placeholder: 'Write your blog content here...',
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    ['blockquote', 'link', 'image'],
                    ['clean'],
                ],
            },
        });

        if (contentInput.value) {
            quill.root.innerHTML = contentInput.value;
        }

        const syncContent = () => {
            contentInput.value = quill.root.innerHTML;
        };

        quill.on('text-change', syncContent);
        blogForm.addEventListener('submit', syncContent);
        syncContent();
    }
});
</script>
