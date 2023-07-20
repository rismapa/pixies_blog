<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Post 
class Post extends Model
{
    use HasFactory;



    

    // private static $blog_posts = [
    //     [
    //         'title' => "Judul Tulisan Pertama",
    //         "slug" => 'judul-tulisan-pertama',
    //         "author" => "Snowy Cantik",
    //         "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
    //     ],
    //     [
    //         'title' => "Judul Tulisan Kedua",
    //         "slug" => 'judul-tulisan-kedua',
    //         "author" => "Kitty Cantik",
    //         "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
    //     ]
    // ];

    // public static function all() {
    //     return collect(self::$blog_posts);
    // }

    // public static function find($slug) {
    //     $posts = static::all();
    //     return $posts->firstWhere('slug', $slug);

    //     // $new_post = [];
    //     // foreach($posts as $post) {
    //     //     if ($post['slug'] === $slug) {
    //     //         $post = $new_post;
    //     //     }
    //     // }

    //     // dd($post);

    // }

    

    

}
