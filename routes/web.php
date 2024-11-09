<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Deni Pajri', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Deni Pajri',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem quos nam ipsam
            dignissimos veniam deserunt, molestiae officiis assumenda inventore rem quasi obcaecati, iste nisi sint
            voluptatem molestias quibusdam. Suscipit, magni?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Deni Pajri',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque quae earum,
            veritatis eaque praesentium similique nisi quam omnis officia autem recusandae inventore. Praesentium dicta
            perferendis ducimus error illum repellat amet?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Deni Pajri',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem quos nam ipsam
            dignissimos veniam deserunt, molestiae officiis assumenda inventore rem quasi obcaecati, iste nisi sint
            voluptatem molestias quibusdam. Suscipit, magni?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Deni Pajri',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque quae earum,
            veritatis eaque praesentium similique nisi quam omnis officia autem recusandae inventore. Praesentium dicta
            perferendis ducimus error illum repellat amet?'
        ]
    ];


    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
