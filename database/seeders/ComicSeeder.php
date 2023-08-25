<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $new_comic = new Comic();

        $new_comic['title'] = 'test';
        $new_comic['description'] = 'test';
        $new_comic['thumb'] = 'test';
        $new_comic['price'] = '20.54';
        $new_comic['series'] = 'test';
        $new_comic['sale_date'] = '2020-10-06';
        $new_comic['type'] = 'test';
        $new_comic['artists'] = 'test';
        $new_comic['writers'] = 'test';


        $new_comic->save();
    }
}
