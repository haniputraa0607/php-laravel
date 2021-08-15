<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Administrator',
            'email'=>'admin@transisi.id',
            'password'=> Hash::make('transisi'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
