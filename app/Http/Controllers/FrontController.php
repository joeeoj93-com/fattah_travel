<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function artikel(Request $request)
    {
        $articles = Article::latest()
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('body', 'like', '%' . $request->search . '%')
                      ->orWhere('excerpt', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('category', $request->category);
            })
            ->paginate(9)
            ->withQueryString();

        return view('artikel.index', compact('articles'));
    }

    public function umrah()
    {
        $packages = Package::where('type', 'umrah')->latest()->get();
        $global_settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('paketumrah.index', compact('packages', 'global_settings'));
    }

    public function haji()
    {
        $packages = Package::where('type', 'haji')
            ->latest()
            ->get();

        $global_settings = \App\Models\Setting::pluck('value', 'key')->toArray();

        return view('pakethaji.index', [
            'packages' => $packages,
            'global_settings' => $global_settings,
        ]);
    }

    public function showDetail($slug)
    {
        $package = Package::where('slug', $slug)->firstOrFail();
        $global_settings = \App\Models\Setting::pluck('value', 'key')->toArray();

        return view('front.paket-detail', compact('package', 'global_settings'));
    }

    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->increment('views');

        $otherArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(5)
            ->get();

        return view('front.artikel-detail', compact('article', 'otherArticles'));
    }

}