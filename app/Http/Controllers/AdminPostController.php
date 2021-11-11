<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;


class AdminPostController extends Controller
{
    public function index()
    {


        return view('admin.posts.index', [

            'posts' => Post::latest('updated_at')->simplepaginate(10)

        ]);
    }

    public function create()
    {

        $categories = Category::all();

        return view('admin.posts.create', [

            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required',
            'thumbnail' => ['required', 'image'],
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required'

        ]);

        $userid = auth()->id();
        $thumbnail = request()->file('thumbnail')->store('thumbnails', 'public');

        Post::create([

            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $userid


        ]);

        return redirect('/')->with('success', 'Post has been created.');;
    }

    public function edit(Post $post)
    {


        $categories = Category::all();

        return view('admin.posts.edit', [

            'post' => $post,
            'categories' => $categories

        ]);
    }

    public function update(Post $post)
    {

        $attributes = request()->validate([

            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required'

        ]);

        if (isset($attributes['thumbnail'])) {

            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }


        $post->update($attributes);

        return back()->with('success', 'Post has been updated.');
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return back()->with('success', 'Post has been deleted.');
    }
}
