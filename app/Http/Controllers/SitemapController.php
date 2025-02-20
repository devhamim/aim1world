<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{

    public function generate()
    {
        // Create a new sitemap instance
        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0))
            ->add(Url::create('/about')->setPriority(0.8))
            ->add(Url::create('/services')->setPriority(0.8))
            ->add(Url::create('/protfolio')->setPriority(0.8))
            ->add(Url::create('/contact')->setPriority(0.8))
            ->add(Url::create('/terms')->setPriority(0.9))
            ->add(Url::create('/privacy/policy')->setPriority(0.9));

        // Add dynamic blog pages if applicable
        // $blogs = Blog::all();
        // foreach ($blogs as $blog) {
        //     $sitemap->add(Url::create(route('blog.details', $blog->slug))->setPriority(0.9));
        // }

        // Save the sitemap to the public folder
        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response()->json(['message' => 'Sitemap generated successfully!']);
    }


}
