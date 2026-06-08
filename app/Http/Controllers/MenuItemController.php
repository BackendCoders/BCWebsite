<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Page;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display all menu items
     */
    public function index()
    {
        $menus = MenuItem::with('page')
            ->orderBy('order')
            ->get();

        return view('menu.index', compact('menus'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        $pages = Page::pluck('title', 'id');

        $parents = MenuItem::orderBy('order')
            ->pluck('title', 'id');

        return view('menu.create', compact('pages', 'parents'));
    }

    /**
     * Store menu item
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'     => 'required|string|max:255',
            'page_id'   => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'order'     => 'nullable|integer|min:0',
            'type'      => 'nullable|string|max:255',
        ]);

        // Normalize empty values
        $data['type'] = MenuItem::normalizeType($data['type'] ?? null);

        // Save menu
        MenuItem::create([
            'title'     => $data['title'],
            'page_id'   => $data['page_id'] ?? null,
            'parent_id' => $data['parent_id'] ?? null,
            'order'     => $data['order'] ?? 0,
            'type'      => $data['type'],
        ]);

        return redirect()
            ->route('menu-items.index')
            ->with('success', 'Menu created successfully.');
    }

    /**
     * Show edit form
     */
    public function edit(MenuItem $menu_item)
    {
        $pages = Page::pluck('title', 'id');

        $parents = MenuItem::where('id', '!=', $menu_item->id)
            ->orderBy('order')
            ->pluck('title', 'id');

        return view('menu.edit', compact(
            'menu_item',
            'pages',
            'parents'
        ));
    }

    /**
     * Update menu item
     */
    public function update(Request $request, MenuItem $menu_item)
    {
        $data = $request->validate([
            'title'     => 'required|string|max:255',
            'page_id'   => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'order'     => 'nullable|integer|min:0',
            'type'      => 'nullable|string|max:255',
        ]);

        // Normalize empty values
        $data['type'] = MenuItem::normalizeType($data['type'] ?? null);

        // Update menu
        $menu_item->update([
            'title'     => $data['title'],
            'page_id'   => $data['page_id'] ?? null,
            'parent_id' => $data['parent_id'] ?? null,
            'order'     => $data['order'] ?? 0,
            'type'      => $data['type'],
        ]);

        return redirect()
            ->route('menu-items.index')
            ->with('success', 'Menu updated successfully.');
    }

    /**
     * Delete menu item
     */
    public function destroy(MenuItem $menu_item)
    {
        $menu_item->delete();

        return redirect()
            ->back()
            ->with('success', 'Menu deleted successfully.');
    }
}