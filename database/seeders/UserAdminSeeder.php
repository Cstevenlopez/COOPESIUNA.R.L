<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  => 'Super Administrador',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin@1234'),
        ]);
    }
}
