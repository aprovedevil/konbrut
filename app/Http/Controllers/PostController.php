<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class PostController extends Controller //PostController adalah nama kelas yang mengambang
{
    public function index() //index adalah nama method yang mengambang
    {
        $userId = Auth::id(); //mengambil id pengguna yang sedang login
        $posts = Post::where('user_id', $userId)->get(); //mengambil semua postingan yang dikaitkan dengan pengguna yang sedang login

        return view('posts.index', compact('posts')); //mengambil view posts.index dan mengirimkan data postingan
    }

    public function create()
    {
        return view('posts.create'); // Mengambil view pembuatan posting
    }

    public function store(Request $request)
    {
        $userId = Auth::id(); // Mengambil id pengguna yang sedang login
        $userPostsCount = Post::where('user_id', $userId)->count(); // Menghitung jumlah postingan yang sudah dibuat oleh pengguna

        // Jika pengguna sudah membuat satu data, kembalikan dengan pesan error
        if ($userPostsCount >= 1) {
            return redirect()->route('posts.index')->with('error', 'Anda hanya diperbolehkan membuat satu data.');
        }

        // Validasi input pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|string|size:2',
            'kota' => 'required',
        ]);

        // Buat instance baru dari Post
        $post = new Post([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->kota . ', ' . $request->alamat
        ]);

        // Simpan postingan dengan pengguna yang sedang login
        Auth::user()->posts()->save($post);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');
    }



    public function show(Post $post) //show adalah nama method yang mengambang
    {
        return view('posts.show', compact('post')); //mengambil view posts.show dan mengirimkan data postingan
    }


    public function edit(Post $post) //edit adalah nama method yang mengambang
    {
        return view('posts.edit', compact('post')); //untuk menampilkan form edit
    }

    public function update(Request $request, Post $post) //update adalah nama method yang mengambang
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|string|size:10',
            'kota' => 'required',
        ]);

        $post->update([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->kota . ', ' . $request->alamat
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui!');
    }

    public function destroy(Post $post)
    {
        // Hapus postingan
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus.');
    }


    public function download(Post $post)
    {
        // Cek apakah posting telah diverifikasi
        if (!$post->verified) {
            abort(404); // atau tindakan lain sesuai kebutuhan
        }

        // Buat objek Dompdf
        $dompdf = new Dompdf();

        // Load view ke Dompdf
        $html = view('pdf', compact('post'))->render();

        // Load HTML ke Dompdf
        $dompdf->loadHtml($html);

        // Render PDF (Opsional)
        $dompdf->render();

        // Atur nama file
        $filename = 'data_pendaftaran_' . $post->id . '.pdf';

        // Unduh file PDF
        $dompdf->stream($filename);
    }
}