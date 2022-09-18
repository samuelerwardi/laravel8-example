<?php

namespace Database\Seeders;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            Todo::insert([
                'title' => "Title ".$i,
                'description' => "Description ".$i,
                'date_start' => Carbon::now()->format("Y-m-d"),
                'date_end' => Carbon::now()->addDays(30)->format("Y-m-d"),
            ]);
            echo "title : " . $i . PHP_EOL;
        }
    }
}
