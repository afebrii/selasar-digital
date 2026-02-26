<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProjectCategory::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        ProjectCategory::create($validated);

        return redirect()->route('admin.categories.index')->with('success', 'Project Category created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectCategory $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectCategory $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        $category->update($validated);

        return redirect()->route('admin.categories.index')->with('success', 'Project Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectCategory $category)
    {
        // Check if there are projects attached
        if ($category->projects()->count() > 0) {
            return redirect()->route('admin.categories.index')->with('error', 'Cannot delete category with attached projects.');
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Project Category deleted successfully.');
    }
}
