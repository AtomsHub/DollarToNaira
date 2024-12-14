<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    //
    public function showBlogs()
    {
        $response = Http::get('https://dollartonaira.com.ng/MyBlog/wp-json/wp/v2/posts?_embed');
        $posts = $response->json();

        $blogs = collect($posts)->map(function ($post) {
            return [
                'title' => $post['title']['rendered'],
                'excerpt' => strip_tags($post['excerpt']['rendered']),
                'date' => date('d/m/Y', strtotime($post['date'])),
                'thumbnail' => $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? 'assets/img/blog/default.jpg',
                'link' => $post['link'],
                'slug' => $post['slug'],
            ];
        });


        $latestPosts = $this->getLatestPosts();

        return view('blog', compact('blogs','latestPosts'));
    }


    public function show($slug)
    {
        $response = Http::get('https://dollartonaira.com.ng/MyBlog/wp-json/wp/v2/posts?slug={$slug}');
        $blog = $response->json();

        if (!empty($blog)) {
            return view('blog-single', ['blog' => $blog[0]]);
        }

        abort(404);
    }

    public function showBlogPost($slug)
{
    // Fetch post by slug from WordPress API
    $response = Http::get('https://dollartonaira.com.ng/MyBlog/wp-json/wp/v2/posts?slug={$slug}');

    if ($response->successful() && !empty($response->json())) {
        $post = $response->json()[0]; // Assuming the first result is the desired post
        
        return view('blog-single', [
            'post' => $post,
            'latestPosts' => $this->getLatestPosts(), // Fetch latest posts if required
        ]);
    }

    abort(404, 'Blog post not found.');
}

private function getLatestPosts()
{
    $response = Http::get('https://dollartonaira.com.ng/MyBlog/wp-json/wp/v2/posts?slug={$slug}');
    
    return $response->successful() ? $response->json() : [];
}
}
