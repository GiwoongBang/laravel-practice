<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(): array
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        return $response->json();
    }

    public function getPostById($id): array
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);

        return $response->json();
    }

    public function addPost(): array
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'Custom My Post',
            'body' => 'Custom My Post Description'
        ]);

        return $post->json();
    }

    public function updatePost(): array
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Updated Title',
            'body' => 'Updated Description'
        ]);
        return $response->json();
    }

    public function deletePost($id): array
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }
}
