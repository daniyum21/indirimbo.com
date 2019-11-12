<?php

use Illuminate\Database\Seeder;

class ArtistTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtistType::create([
            //'RoleID'=>1,
            'TypeName'=>'Umuhanzi'
        ]);
        ArtistType::create([
            //'RoleID'=>1,
            'TypeName'=>'Chorali'
        ]);
    }
}
