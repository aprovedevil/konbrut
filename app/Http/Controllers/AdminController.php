<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        $userCount = User::where('usertype', 'user')->count();
        $siswaCount = User::where('usertype', 'siswa')->count();
        // $kariawanCount = User::where('usertype', 'kariawan')->count();

        return view("admin.dashboard", compact("userCount","siswaCount"));
    }

    public function account() {
        return view("admin.account");
    }
}
