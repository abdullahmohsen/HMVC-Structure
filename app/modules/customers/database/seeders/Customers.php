<?php

namespace Customers\Database\Seeders;

use Illuminate\Database\Seeder;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \Customers\Models\Customer::create([
            'name' => 'abdallah',
            'email' => 'abdallah@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
