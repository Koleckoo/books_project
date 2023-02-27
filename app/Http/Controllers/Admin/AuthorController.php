<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::query()
            ->orderBy('id')
            ->limit(20)
            ->get();


        return view('admin.admin', compact('authors'));
    }

    public function create()
    {
        $author = new Author();

        return view('admin.form', compact('author'));
    }

    public function save(Request $request)
    {
        $author = new Author();
        $author->name = $request->post('name');
        $author->slug = $request->post('slug');
        $author->save();

        return redirect()->route('admin.authors');
    }
}
