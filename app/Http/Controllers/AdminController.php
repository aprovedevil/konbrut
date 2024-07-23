<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{
    public function index() {
        $userCount = User::where('usertype', 'user')->count();
        $siswaCount = User::where('usertype', 'siswa')->count();
        // $kariawanCount = User::where('usertype', 'kariawan')->count();

        return view("admin.dashboard", compact("userCount","siswaCount"));
    }

    public function account() {
        $posts = Post::all();
        return view('admin.account', ['posts' => $posts]);
    }
}
