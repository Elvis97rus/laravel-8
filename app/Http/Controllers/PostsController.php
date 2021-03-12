<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        //non fluent
        // DB::select(['table' => 'posts', 'where' => ['id' => 1]])

        //fluent
        // DB::table('posts')->where('id', 1)->get()

//        return view('posts/

//        $posts = DB::select('select * from posts where id = :id', ['id' => 7]);

        $id = 8;
//        $posts = DB::table('posts')
//            ->where('id', $id)
//            ->get();
//        $posts = DB::table('posts')
//            ->select('body')
//            ->get();
//        $posts = DB::table('posts')
//            ->where('created_at', '<', now()->subDay())
//            ->orWhere('title', 'Mr.')
//            ->get();
//        $posts = DB::table('posts')
//            ->whereBetween('id', [7,9])
//            ->get();
//        $posts = DB::table('posts')
//            ->whereNotNull('title')
//            ->get();
//        $posts = DB::table('posts')
//            ->select('title')
//            ->distinct()//unique titles
//            ->get();
//        $posts = DB::table('posts')
//            ->orderBy('title', 'asc')
//            ->get();
//        $posts = DB::table('posts')
//            ->latest()//or oldest or inRandomOrder
//            ->get();
//        $posts = DB::table('posts')
//            ->orderBy('created_at', 'desc')
//            ->first();
//        $posts = DB::table('posts')
//            ->find($id);
//        $posts = DB::table('posts')
//            ->where('id', $id)
//            ->count();
//        $posts = DB::table('posts')
//            ->min('id');//or max()
//        $posts = DB::table('posts')
//            ->sum('id');//or avg()
//        $posts = DB::table('posts')
//            ->insert([
//                'title' => 'New post', 'body' => 'New body'
//            ]);
//        $posts = DB::table('posts')
//            ->where('id', '=', $id)
//            ->update([
//                'title' => 'New Title', 'body' => 'Updated Body'
//            ]);
//        $posts = DB::table('posts')
//            ->where('id', '=', 1)
//            ->delete();
//
//        dd($posts);
    }
}
