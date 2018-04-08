<?php

use Illuminate\Database\Seeder;

use App\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $i1 =Item::crete([
            'category_id' => 1,
            'name' => 'Cup Cakes',
            'image' => 'uploads/items/',
            'price' => 9.99,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
        $i2 =Item::crete([
            'category_id' => 1,
            'name' => 'Orange Juice',
            'image' => 'uploads/items/',
            'price' => 1.99,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
        $i3 =Item::crete([
            'category_id' => 1,
            'name' => 'Sandwitch',
            'image' => 'uploads/items/',
            'price' => 4.99,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
        $i4 =Item::crete([
            'category_id' => 1,
            'name' => 'Pizza',
            'image' => 'uploads/items/',
            'price' => 29.99,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
        
        
        
    }
}
