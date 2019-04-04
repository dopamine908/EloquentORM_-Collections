<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CollectionController extends Controller
{
    /**
     * Collection 介紹
     */
    public function ThisIsCollection() {
        $post = Post::all();
        /**
         * Eloquent 回傳的所有多結果集都會是
         * Illuminate\Database\Eloquent\Collection 物件的實例
         * Eloquent 集合物件繼承 Laravel 基礎集合
         * https://docs.laravel-dojo.com/laravel/5.5/collections
         *
         * 可用的集合方法
         * https://docs.laravel-dojo.com/laravel/5.5/eloquent-collections#available-methods
         */
        dump($post);
    }

    /**
     * 自訂集合
     */
    public function createCollection() {
        $post = Post::all();
        /**
         * 使用自定義collection的user1()方法
         * 取得userid = 1 的post
         */
        dump($post->user1());
    }
}
