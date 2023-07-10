<?php

namespace Database\Seeders;

//digunakan untuk memanggil model yang nantinya akan secara otomatis data dummy ter-genetare
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::factory()->count(5)->create();
    }
}
