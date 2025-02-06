<?php

use Illuminate\Database\Migrations\Migration;
// digunakan untuk mengimport kelas migrations yg merupakan kelas dasar dalam laravel //
// migration adlaah sebuah kelas yg digunakan oleh laravel untuk mnegelola dan memodifikasi struktur database //
use Illuminate\Database\Schema\Blueprint;
// digunakan utk mengimport kelas blueprint (untuk mengambil kolom dan tabel di database//
use Illuminate\Support\Facades\Schema;
// digunakan untuk mengimport scema facade di laravel (untuk create,menghpus,update//

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    // untuk menerapkan perubahan ke database  // 
    {
        Schema::create('task_lists', function (Blueprint $table) 
        // scema::create adalah metode yang digunakan untuk membuat tabel baru di database //
        // tasklist:adalah nama tabel yg akann dibuat //
        // function blue print table:digunakan untuk mendefinisikan kolom kolom dalam tabel tasklist //
        {
            $table->id();
            // untuk mengisi tabel id yg dmna dalam sebuah form id wajib ada // 
            $table->string('name')->unique();
            // untuk mencegah duplikasi dengan menabahkan unique() //
            $table->timestamps();
            // untuk menentukan waktu //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    // untuk mengembaliakn perubahan yang bertujuan untuk membatalkan atau menghapus perubahan yg telah dilakukan oleh metode up //
    {
        Schema::dropIfExists('task_lists');
        // digunakan untuk menghapus table di database otomatiss semua //
    }
};