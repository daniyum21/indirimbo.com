<?php

use App\BookSubSection;
use App\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rwanda  = new Country();
        $rwanda->countryName="Rwanda";
        $rwanda->save();
        $burundi  = new Country();
        $burundi->countryName="Burundi";
        $burundi->save();



        /*
         * WHEN WE GO PRODUCTION, WE WILL BE HAVING DATA, SO ADD YOUR BURUNDI SUBSECTIONS HERE
         * */


        BookSubSection::create(['SubSectionName' => 'Guhimbaza', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Gusenga', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Guhamagara', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Incungu', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Gushinga Intahe', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Kwishikana', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Urukundo', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Ubugingo bushasha', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Kuvuka Kwa Yesu', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Umusaraba', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Ukuzuka', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Mpwemu yera', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Kugaruka kwa Yesu', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => "Iz'igitondo", 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => "Iz'umugoroba", 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Kurondera abandi', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => "Igitabo c'Imana", 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => "Ku w'Imana", 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Ingaburo yera', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Gusezerana', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Kwimbura', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Umubatiza', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Guhezagira abana', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Ubukwe', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Guhamba', 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => "Iziririmbwa n'abahinga", 'country_id'=>2]);
        BookSubSection::create(['SubSectionName' => 'Izongewe', 'country_id'=>2]);
    }
}
