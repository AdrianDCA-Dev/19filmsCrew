<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Cristian Jurado',
            'surname' => 'Cristian',
            'email' => '19filmscrew@gmail.com',
            'rol' => 1,
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);

        User::factory(9)->create();
    }
}
