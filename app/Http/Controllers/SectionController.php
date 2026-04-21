<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use App\Models\SectionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with(['page', 'items'])->latest()->get();

        return view('sections.index', compact('sections'));
    }

    public function edit(Page $page, Section $section)
    {
        $this->assertSectionBelongsToPage($page, $section);

        $section->load(['items' => fn ($query) => $query->orderBy('order')]);

        return view('sections.edit', compact('page', 'section'));
    }

    public function store(Request $request, Page $page)
    {
        $data = $this->validateSection($request);
        $data['page_id'] = $page->id;
        $content = $this->decodeJson($request->input('content'));
        $data['content'] = $content;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sections', 'public');
        }

        $section = Section::create($data);
        $this->syncPrimaryItem($section, $content);

        return back()->with('success', 'Section created successfully.');
    }

    public function update(Request $request, Page $page, Section $section)
    {
        $this->assertSectionBelongsToPage($page, $section);

        $data = $this->validateSection($request);
        $content = $this->decodeJson($request->input('content'));
        $data['content'] = $content;

        if ($request->hasFile('image')) {
            if ($section->image && Storage::disk('public')->exists($section->image)) {
                Storage::disk('public')->delete($section->image);
            }

            $data['image'] = $request->file('image')->store('sections', 'public');
        }

        $section->update($data);
        $this->syncPrimaryItem($section, $content);

        return back()->with('success', 'Section updated successfully.');
    }

    public function destroy(Page $page, Section $section)
    {
        $this->assertSectionBelongsToPage($page, $section);

        if ($section->image && Storage::disk('public')->exists($section->image)) {
            Storage::disk('public')->delete($section->image);
        }

        $section->delete();

        return back()->with('success', 'Section deleted successfully.');
    }

    public function reorder(Request $request, Page $page)
    {
        $data = $request->validate([
            'sections' => ['required', 'array'],
            'sections.*' => ['integer'],
        ]);

        foreach ($data['sections'] as $index => $sectionId) {
            $page->sections()->whereKey($sectionId)->update(['order' => $index]);
        }

        return back()->with('success', 'Section order updated successfully.');
    }

    public function storeItem(Request $request, Page $page, Section $section)
    {
        $this->assertSectionBelongsToPage($page, $section);

        $data = $this->validateItem($request);
        $data['page_id'] = $page->id;
        $data['section_id'] = $section->id;
        $data['type'] = $section->type;
        $data['extra'] = $this->decodeJson($request->input('extra'));

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('section-items', 'public');
        }

        SectionItem::create($data);

        return back()->with('success', 'Section item created successfully.');
    }

    public function updateItem(Request $request, Page $page, Section $section, SectionItem $item)
    {
        $this->assertSectionBelongsToPage($page, $section);

        if ((int) $item->section_id !== (int) $section->id) {
            abort(404);
        }

        $data = $this->validateItem($request);
        $data['extra'] = $this->decodeJson($request->input('extra'));

        if ($request->hasFile('image')) {
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }

            $data['image'] = $request->file('image')->store('section-items', 'public');
        }

        $item->update($data);

        return back()->with('success', 'Section item updated successfully.');
    }

    public function destroyItem(Page $page, Section $section, SectionItem $item)
    {
        $this->assertSectionBelongsToPage($page, $section);

        if ((int) $item->section_id !== (int) $section->id) {
            abort(404);
        }

        if ($item->image && Storage::disk('public')->exists($item->image)) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        return back()->with('success', 'Section item deleted successfully.');
    }

    protected function validateSection(Request $request): array
    {
        return $request->validate([
            'type' => ['required', 'string', 'max:100'],
            'title' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:4096'],
            'order' => ['nullable', 'integer'],
        ]);
    }

    protected function validateItem(Request $request): array
    {
        return $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'extra' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:4096'],
            'order' => ['nullable', 'integer'],
        ]);
    }

    protected function decodeJson(?string $value): array
    {
        if (!filled($value)) {
            return [];
        }

        $decoded = json_decode($value, true);

        return is_array($decoded) ? $decoded : [];
    }

    protected function syncPrimaryItem(Section $section, array $content): void
    {
        if (empty($content) && !$section->title && !$section->image) {
            return;
        }

        $payload = [
            'page_id' => $section->page_id,
            'type' => $section->type,
            'title' => $content['title'] ?? $content['heading'] ?? $section->title,
            'description' => $content['description'] ?? $content['body'] ?? null,
            'order' => $section->items()->count() ? $section->items()->min('order') : 0,
        ];

        $extra = $content;
        if (isset($content['button_text']) && !isset($extra['button'])) {
            $extra['button'] = $content['button_text'];
        }
        if (isset($content['subtitle']) && !isset($extra['sub_text'])) {
            $extra['sub_text'] = $content['subtitle'];
        }
        if (isset($content['image_alt']) && !isset($extra['alt'])) {
            $extra['alt'] = $content['image_alt'];
        }

        $payload['extra'] = $extra;

        if (!empty($section->image)) {
            $payload['image'] = $section->image;
        } elseif (!empty($content['image'])) {
            $payload['image'] = $content['image'];
        }

        $item = $section->items()->orderBy('order')->first();

        if ($item) {
            $item->update($payload);
            return;
        }

        $section->items()->create($payload);
    }

    protected function assertSectionBelongsToPage(Page $page, Section $section): void
    {
        if ((int) $section->page_id !== (int) $page->id) {
            abort(404);
        }
    }
}
