<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->text('alamat');
            $table->boolean('verified')->default(false); // Menambah kolom 'verified' dengan nilai default 'false'
            $table->unsignedBigInteger('user_id'); //unsignedBigInteger untuk id yang tidak boleh negatif
            $table->foreign('user_id')->references('id')->on('users'); //foreign untuk menentukan foreign key
            $table->timestamps(); //timestamps untuk menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Drop kolom 'verified' jika tabel 'posts' ada
            $table->dropColumn('verified');
        });

        Schema::dropIfExists('posts');
    }
};