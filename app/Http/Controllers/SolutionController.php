<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    // ✅ 1. List all solutions
    public function index()
    {
        $solutions = Solution::all();

        return view('solutions.index', compact('solutions'));
    }

    // ✅ 2. Show create form
    public function create()
    {
        return view('solutions.create');
    }

    // ✅ 3. Store data
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|max:255',
            
        ]);

        Solution::create([
            'category' => $request->category,
          
        ]);

        return redirect()->route('solutions.index')
                         ->with('success', 'Solution created successfully');
    }

    // ✅ 4. Show detail page
    // public function show($id)
    // {
    //     $solution = Solution::findOrFail($id);

    //     return view('solutions.show', compact('solution'));
    // }

    public function show(Solution $solution)
    {
        return view('solutions.show', compact('solution'));
    }
    

    // ✅ 5. Show edit form
    public function edit(Solution $solution)
    {
        return view('solutions.edit', compact('solution'));
    }

    // ✅ 6. Update data
    public function update(Request $request, Solution $solution)
    {
        $request->validate([
            'category' => 'required|max:255',
          
        ]);

        $solution->update([
            'category' => $request->category,
            
        ]);

        return redirect()->route('solutions.index')
                         ->with('success', 'Solution updated successfully');
    }

    // ✅ 7. Delete
    public function destroy(Solution $solution)
    {
        $solution->delete();

        return redirect()->route('solutions.index')
                         ->with('success', 'Solution deleted successfully');
    }
}