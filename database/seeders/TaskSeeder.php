<?php

namespace Database\Seeders;
// namespace adalah cara untuk mengelompokan kelas agar tidak terjadi konflik nama anatara kelas yg berbeda dalam suatu project 
// database seeders adalah namespace default yg digunakan untuk semua kelas seeder di laravel //

use App\Models\Task;
// kode ini dugunakan untuk mengimport model task yg berada di dalam direktori app/models/task.php //
use App\Models\TaskList;
// kode ini digunakan untuk menimport model tasklist yg berada di dalam app/models/taslist//
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// kode ini berfungsi untuk me nonaktifkan events model saat menjalankan seeder //
use Illuminate\Database\Seeder;
// kode ini dugunakan untuk meng import kelas seeder  //

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Belajar Laravel',
                'description' => 'Belajar Laravel di santri koding',
                'is_completed' => false,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Belajar React',
                'description' => 'Belajar React di WPU',
                'is_completed' => true,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Pantai',
                'description' => 'Liburan ke Pantai bersama keluarga',
                'is_completed' => false,
                'priority' => 'low',
                'list_id' => TaskList::where('name', 'Liburan')->first()->id,
            ],
            
            [
                'name' => 'Matematika',
                'description' => 'Tugas Matematika bu Nina',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'PAIBP',
                'description' => 'Tugas presentasi pa budi',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'Project Ujikom',
                'description' => 'Membuat project Todo App untuk ujikom',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
        ];

        Task::insert($tasks);
        // taks:merujuk pada model yg berhubungan dengan tabel tasklist di database //
        // inserttaks::digunakan untuk menambhakan bebrapa data ke dalam database //
    }
}
