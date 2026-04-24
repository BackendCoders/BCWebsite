<?php

namespace App\Http\Controllers;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $menus = MenuItem::with('page')->orderBy('order')->get();
    return view('menu.index', compact('menus'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $pages = \App\Models\Page::pluck('title', 'id');
    $parents = MenuItem::pluck('title', 'id');

    return view('menu.create', compact('pages', 'parents'));
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'page_id' => 'nullable',
        'parent_id' => 'nullable',
        'order' => 'nullable',
        'type' => 'nullable',
    ]);

    MenuItem::create($data);

    return redirect()->route('menu-items.index')
        ->with('success', 'Menu created');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
  public function edit(MenuItem $menu_item)
{
    $pages = \App\Models\Page::pluck('title', 'id');
    $parents = MenuItem::where('id', '!=', $menu_item->id)->pluck('title', 'id');

    return view('menu.edit', compact('menu_item', 'pages', 'parents'));
}

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, MenuItem $menu_item)
{
    $data = $request->validate([
        'title' => 'required',
        'page_id' => 'nullable',
        'parent_id' => 'nullable',
        'order' => 'nullable',
        'type' => 'nullable',
    ]);

    $menu_item->update($data);

    return redirect()->route('menu-items.index')
        ->with('success', 'Menu updated');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuItem $menu_item)
{
    $menu_item->delete();

    return back()->with('success', 'Deleted');
}
}
