<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'=>'test',
            'email'=>'admin@admin.com',
            'phone'=>12347866,
            'password'=>Hash::make('12345678'),

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
