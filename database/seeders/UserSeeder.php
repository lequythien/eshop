<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'zacubj2@gmail.com',
                'password' => bcrypt('Zacubj2004z@'),
            ],
            [
                'email' => 'nana@gmail.com',
                'password' => bcrypt('12042005'),
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('loyal_customers')->insert($data);
    }
}
