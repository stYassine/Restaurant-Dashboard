<?php

use Illuminate\Database\Seeder;

use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $s1 =Slider::create([
            'title' => 'BEST FOOD',
            'sub_title' => 'create your own slogan',
            'image' => 'uploads/sliders/1.jpg'
        ]);
        $s2 =Slider::create([
            'title' => 'BEST SNACKS',
            'sub_title' => 'create your own slogan',
            'image' => 'uploads/sliders/2.jpg'
        ]);
        $s3 =Slider::create([
            'title' => 'BEST DRINKS',
            'sub_title' => 'create your own slogan',
            'image' => 'uploads/sliders/3.jpg'
        ]);
        $s3 =Slider::create([
            'title' => 'BEST Pizza',
            'sub_title' => 'create your own slogan',
            'image' => 'uploads/sliders/4.jpg'
        ]);
        
    }
}
