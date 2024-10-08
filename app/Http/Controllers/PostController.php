<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }

    public function addPost()
    {
        return view('postAdd');
    }

    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'subject' => $request->input('subject'),
            'content' => $request->input('content'),
        ]);
        return back()->with('post_created', 'Post has been created');
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('postDetail', compact('post'));
    }

    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('postEdit', compact('post'));
    }

    public function editPostSubmit(Request $request)
    {
        DB::table('posts')->where('id', $request->input('id'))->update([
            'subject' => $request->input('subject'),
            'content' => $request->input('content'),
        ]);
        return back()->with('post_updated', 'Post has been updated');
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been deleted');
    }

    public function innerJoinClause()
    {
        $posts = DB::table('users')
            ->select('posts.id', 'users.name', 'posts.subject', 'posts.content', 'users.email')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->get();

        return view('joinView', compact('posts'));
    }

    public function getAllPostsUsingMode() {
        $posts = Post::all();

        return view('joinAllPosts', compact('posts'));
    }
}
