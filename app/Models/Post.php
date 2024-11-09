<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
