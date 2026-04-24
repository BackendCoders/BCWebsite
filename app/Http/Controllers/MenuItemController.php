<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Page;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        $menus = MenuItem::with('page')
            ->orderBy('order')
            ->get();

        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        $pages = Page::pluck('title', 'id');
        $parents = MenuItem::pluck('title', 'id');

        return view('menu.create', compact('pages', 'parents'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'page_id' => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'order' => 'nullable|integer',
            'type' => 'required|in:' . MenuItem::TYPE_DIGITAL . ',' . MenuItem::TYPE_SOFTWARE,
        ]);

        // ✅ No normalization needed — already correct value
        MenuItem::create($data);

        return redirect()->route('menu-items.index')
            ->with('success', 'Menu created successfully');
    }

    public function edit(MenuItem $menu_item)
    {
        $pages = Page::pluck('title', 'id');
        $parents = MenuItem::where('id', '!=', $menu_item->id)->pluck('title', 'id');

        return view('menu.edit', compact('menu_item', 'pages', 'parents'));
    }

    public function update(Request $request, MenuItem $menu_item)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'page_id' => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'order' => 'nullable|integer',
            'type' => 'nullable|in:' . MenuItem::TYPE_DIGITAL . ',' . MenuItem::TYPE_SOFTWARE,
        ]);

        // ✅ No normalization needed
        $menu_item->update($data);

        return redirect()->route('menu-items.index')
            ->with('success', 'Menu updated successfully');
    }

    public function destroy(MenuItem $menu_item)
    {
        $menu_item->delete();

        return back()->with('success', 'Menu deleted');
    }
}