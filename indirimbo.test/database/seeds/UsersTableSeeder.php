<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            //'UserID'=>$index,
            'FirstName'=>'Daniel',
            'LastName'=>'Tangente',
            'Email'=>'daniyum21@gmail.com',
            'Password'=>Hash::make("test"),
            'RoleID'=>1
        ));
        User::create(array(
            //'UserID'=>$index,
            'FirstName'=>'Daniel',
            'LastName'=>'Tangente',
            'Email'=>'daniyum22@gmail.com',
            'Password'=>Hash::make("test2"),
            'RoleID'=>2
        ));
    }
}
