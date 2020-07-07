<?php

use Illuminate\Database\Seeder;

use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $dati_prodotti = config('products');
        //
        // foreach ($dati_prodotti as $dati_prodotto) {
        //     $nuovo_prodotto = new Product();
        //     $nuovo_prodotto->name = $dati_prodotto["nome"];
        //     $nuovo_prodotto->description = $dati_prodotto["descrizione"];
        //     $nuovo_prodotto->price = $dati_prodotto["prezzo"];
        //     $nuovo_prodotto->save();
        // };

        for ($i=0; $i < 10; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $nuovo_prodotto->description = $faker->text($maxNbChars = 100);
            $nuovo_prodotto->price = $faker->numberBetween($min = 10, $max = 40);
            $nuovo_prodotto->save();
        }
    }
}
