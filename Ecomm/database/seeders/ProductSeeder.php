<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
            'name'=>'LG mobile',
            'price'=>'200',
            'description'=>'A smartphone with 4Gb ram and some usual feature',
            'category'=>'mobile',
            'gallery'=>'https://drive.google.com/file/d/1Kx9Fh5KHketjyLPWTNIr1NoYMS3-w0qv/view'
            ],
            [
                'name'=>'Panasonic Tv',
                'price'=>'800',
                'description'=>'A smart television usual features',
                'category'=>'Homoappliances',
                'gallery'=>'https://drive.google.com/file/d/10flQeKtSidbptA2HHCv1d6133-HNr4Jp/view'
            ],
            [
                'name'=>'Soni  Tv',
                'price'=>'500',
                'description'=>'A television set some usual feature',
                'category'=>'Homoappliances',
                'gallery'=>'https://drive.google.com/file/d/1U-FUgytqaJKdEV3HsilNs47q4sUZaP_O/view'
            ],
            [
                'name'=>'LG Freeze',
                'price'=>'1200',
                'description'=>'A freeze some usual feature',
                'category'=>'Homoappliances',
                'gallery'=>'https://drive.google.com/file/d/1nigdt7_trObwjF9XbL3Y023d_eqjnGjz/view'
            ],
        ]);
    }
}
