<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function verifikasi(Post $post)
    {
        // Pastikan data belum terverifikasi sebelumnya
        if (!$post->verified) {
            // Lakukan perubahan status verifikasi pada data $post
            $post->verified = true;
            $post->save();

            // Kembalikan respons ke client
            return response()->json(['message' => 'Data berhasil diverifikasi']);
        }

        // Jika data sudah terverifikasi sebelumnya, kembalikan respons dengan pesan yang sesuai
        return response()->json(['message' => 'Data sudah terverifikasi sebelumnya']);
    }
}