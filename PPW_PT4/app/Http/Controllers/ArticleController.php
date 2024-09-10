<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Form untuk membuat artikel baru
    public function create()
    {
        return view('articles.create');
    }

    // Menyimpan artikel baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Simpan ke database
        Article::create($request->all());

        // Redirect ke halaman daftar artikel
        return redirect()->route('articles.index');
    }
}
