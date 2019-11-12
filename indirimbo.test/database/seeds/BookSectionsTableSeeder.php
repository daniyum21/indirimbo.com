<?php

use App\BookSection;
use Illuminate\Database\Seeder;
use Faker\Generator;

class BookSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = Faker::create();

//		foreach(range(1, 10) as $index)
//		{
        $gushimisha = new BookSection();
        $gushimisha->sectionID=1;//$index;
        $gushimisha->sectionName='Indirimbo zo Gushimisha';
        $gushimisha->save();

        $Agakiza = new BookSection();
        $Agakiza->sectionID=2;//$index;
        $Agakiza->sectionName='Indirimbo z\'Agakiza';
        $Agakiza->save();
    }
}
