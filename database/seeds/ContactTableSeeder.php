<?php

use Illuminate\Database\Seeder;

use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $c1 =Contact::create([
            'name' => 'John Doe',
            'email' => 'john_doe@hotmail.com',
            'subject' => 'Bla Bla Subject',
            'message' => 'Lorem Lipsum Dolor Imit'
        ]);
        
        
        
    }
}
