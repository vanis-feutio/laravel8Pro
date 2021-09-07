<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }

    public function addPost()
    {
        $post = http::get('https://jsonplaceholder.typicode.com/posts',[
            'userId' => 1,
            'title' => 'new post',
            'body' => 'new post description'
        ]);
        return $post->json();
    }

    public function updatePost()
    {
        $post = http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'updated title',
            'body' => 'updated description'
        ]);
        return $post->json();
    }

    public function deletePost($id)
    {
        $post = http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }
}
