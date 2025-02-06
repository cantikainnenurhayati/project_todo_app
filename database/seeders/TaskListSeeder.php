<?php

namespace Database\Seeders;
// namespace adalah cara untuk mengelompokan kelas agar tidak terjadi konflik nama anatara kelas yg berbeda dalam suatu project 
// database seeders adalah namespace default yg digunakan untuk semua kelas seeder di laravel //

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// kode ini berfungsi untuk me nonaktifkan events model saat menjalankan seeder //
use Illuminate\Database\Seeder;
// kode ini dugunakan untuk meng import kelas seeder  //
use App\Models\TaskList;
// kode ini digunakan untuk menimport model tasklist //

class TaskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            [
                'name' => 'Liburan',
            ],
            [
                'name' => 'Belajar',
            ],
            [
                'name' => 'Tugas',
            ]
        ];

        TaskList::insert($lists);
        // takslist:merujuk pada model yg berhubungan dengan tabel tasklist di database //
        // insertlist:digunakan untuk menambhakan bebrapa data ke dalam database //
    }
}
