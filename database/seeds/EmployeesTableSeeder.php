<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = [
            [
                'id' => 1,
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'occupation' => 'manager',
            ],
            [
                'id' => 2,
                'username' => 'bryan',
                'password' => Hash::make('1234'),
                'occupation' => 'salesman',
            ],
        ];

        DB::table('employees')->insert($employee);
    }
}
