<?php

use Illuminate\Database\Seeder;

class ListAccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ListAccountType')->insert([
            [
                'description' => 'Администратор',
            ],
            [
                'description' => 'Менеджер',
            ],
            [
                'description' => 'Мерчендайзер',
            ],
        ]);
    }
}
