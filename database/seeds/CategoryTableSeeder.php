<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $c1 =Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);
        $c2 =Category::create([
            'name' => 'JQuery',
            'slug' => 'JQuery'
        ]);
        $c3 =Category::create([
            'name' => 'Css',
            'slug' => 'css'
        ]);
        $c4 =Category::create([
            'name' => 'Angular',
            'slug' => 'angular'
        ]);
        
        
    }
}
