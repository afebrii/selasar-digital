<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PortfolioProject;
use App\Models\ProjectCategory;
use App\Models\Testimonial;
use App\Models\Inquiry;

class FrontendController extends Controller
{
    public function home()
    {
        $services = Service::latest()->take(3)->get();
        $featuredProjects = PortfolioProject::with('category')->where('is_featured', true)->latest()->take(4)->get();
        $testimonials = Testimonial::where('rating', '>=', 4)->latest()->take(5)->get();

        return view('pages.home', compact('services', 'featuredProjects', 'testimonials'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('pages.services', compact('services'));
    }

    public function portfolio()
    {
        $categories = ProjectCategory::all();
        $projects = PortfolioProject::with('category')->latest()->get();
        return view('pages.portfolio', compact('categories', 'projects'));
    }

    public function projectDetail($slug)
    {
        $project = PortfolioProject::with('category')->where('slug', $slug)->firstOrFail();
        $relatedProjects = PortfolioProject::with('category')
            ->where('project_category_id', $project->project_category_id)
            ->where('id', '!=', $project->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.project-detail', compact('project', 'relatedProjects'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['is_read'] = false;

        Inquiry::create($validated);

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
    }
}
