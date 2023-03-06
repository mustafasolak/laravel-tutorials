<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KullanicilarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("kullanicilar")->insert(
            [
                "kullanici_adi" =>  "mustafa",
                "email" =>  "mustafa@solak.com",
                "sira_no" =>  1,
            ]
        );
    }
}
