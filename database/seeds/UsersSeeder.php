<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'second_name'  => 'admin',
                'first_name'   => 'admin',
                'patronymic'   => 'admin',
                'email'        => 'admin@admin.ru',
                'password'     => Hash::make('qwerty'),
                'account_type' => 1,
            ],
            [
                'second_name'  => 'merch',
                'first_name'   => 'merch',
                'patronymic'   => 'merch',
                'email'        => 'merch@merch.ru',
                'password'     => Hash::make('qwerty'),
                'account_type' => 2,
            ],
        ]);
    }
}
