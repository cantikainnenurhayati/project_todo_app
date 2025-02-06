<?php

use Illuminate\Database\Migrations\Migration;
// digunakan untuk mengimport kelas migrations yg merupakan kelas dasar dalam laravel //
use Illuminate\Database\Schema\Blueprint;
// digunakan utk mengimport kelas blueprint (untuk mengambil kolom dan tabel di database //
use Illuminate\Support\Facades\Schema;
//  digunakan untuk mengimport scema facade di laravel (untuk create,menghpus,update //

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
     // untuk menerapkan perubahan ke database  // 
    {
        Schema::create('tasks', function (Blueprint $table) 
        // scema::create adalah metode yang digunakan untuk membuat tabel baru di database //
        // tasklist:adalah nama tabel yg akann dibuat //
        // function blue print table:digunakan untuk mendefinisikan kolom kolom dalam tabel tasklist //
        {
            $table->id();
            // untuk mengisi tabel id yg dmna dalam sebuah form id wajib ada // 
            $table->string('name');
            // untuk mencegah duplikasi dengan menabahkan unique() //
            $table->string('description')->nullable();
            // description digunakan untuk membuat deskripsi pada suatu task,fungsinya untuk membuat task lebih spesifik 
            $table->boolean('is_completed')->default(false);
            // digunakan untuk membuat status tugas belum selesai //
            $table->enum('priority', ['low', 'medium', 'high'])->default('medium');
            // enum digunakan untuk menedefinisikan seubuah priority/prioritas yang dimana bawaan prioritasnya medium //
            $table->timestamps();
             // digunakan untuk settings/mengatur waktu saat submit //

            $table->foreignId('list_id')->constrained('task_lists', 'id')->onDelete('cascade');
            // foreign id yang mewajibkan pengguna untuk mengisi id agar tidak berantakan //
            // contrained delete untuk menghapus seluruh data termasuk id//
            // update untuk mnegupdate seluruh data termasuk id //
         
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    // untuk mengembaliakn perubahan yang bertujuan untuk membatalkan atau menghapus perubahan yg telah dilakukan oleh metode up /
    {
        Schema::dropIfExists('tasks');
        // digunakan untuk menghapus table di task,tabel tugas //
    }
};
