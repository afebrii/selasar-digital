<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = PortfolioProject::with('category')->latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProjectCategory::all();
        return view('admin.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'project_category_id' => 'required|exists:project_categories,id',
            'description' => 'required|string',
            'tech_stack' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'timeline' => 'nullable|string|max:255',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'key_features' => 'nullable|string',
            'efficiency_improvement' => 'nullable|string|max:255',
            'system_uptime' => 'nullable|string|max:255',
            'testimonial_quote' => 'nullable|string',
            'testimonial_name' => 'nullable|string|max:255',
            'testimonial_industry' => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');

        // Convert comma separated string to JSON array for DB
        if (!empty($validated['tech_stack'])) {
            $validated['tech_stack'] = array_map('trim', explode(',', $validated['tech_stack']));
        } else {
            $validated['tech_stack'] = [];
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        $galleryPaths = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('projects/gallery', 'public');
            }
        }
        $validated['gallery'] = $galleryPaths;

        PortfolioProject::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortfolioProject $project)
    {
        $categories = ProjectCategory::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortfolioProject $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'project_category_id' => 'required|exists:project_categories,id',
            'description' => 'required|string',
            'tech_stack' => 'nullable|string',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'timeline' => 'nullable|string|max:255',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'key_features' => 'nullable|string',
            'efficiency_improvement' => 'nullable|string|max:255',
            'system_uptime' => 'nullable|string|max:255',
            'testimonial_quote' => 'nullable|string',
            'testimonial_name' => 'nullable|string|max:255',
            'testimonial_industry' => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');

        if (!empty($validated['tech_stack'])) {
            $validated['tech_stack'] = array_map('trim', explode(',', $validated['tech_stack']));
        } else {
            $validated['tech_stack'] = [];
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        // Handle gallery additions (appending to existing)
        $galleryPaths = is_array($project->gallery) ? $project->gallery : [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('projects/gallery', 'public');
            }
        }
        $validated['gallery'] = $galleryPaths;

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortfolioProject $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
