<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Index to fetch posts with infinite scroll (pagination)
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')
                    ->paginate(10); // Infinite scroll with pagination

        return response()->json($posts);
    }

    // Show a single post
    public function show(Post $post)
    {
        return response()->json($post);
    }

    // Store new post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'status' => 'required|in:Draft,Published,Closed',
            'images' => 'nullable|file|mimes:jpg,jpeg,png',
            'google_form_link' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('images')) {
            $validated['images'] = $request->file('images')->store('posts');
        }

        $post = Post::create($validated);

        return response()->json($post, 201);
    }

    // Update a post
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'author_id' => 'sometimes|exists:users,id',
            'status' => 'sometimes|in:Draft,Published,Closed',
            'images' => 'nullable|file|mimes:jpg,jpeg,png',
            'google_form_link' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('images')) {
            // Delete old image if exists
            if ($post->images) {
                Storage::delete($post->images);
            }

            $validated['images'] = $request->file('images')->store('posts');
        }

        $post->update($validated);

        return response()->json($post);
    }
    // Delete a post
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
