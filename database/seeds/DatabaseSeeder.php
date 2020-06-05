<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */

  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    //   insertion des information de l'utilisateur admin
    DB::table('users')->insert([
      [
        'name' => 'admin',
        'email' => 'admin@mail.com',
        'password' => Hash::make('passer')
      ],
    ]);
    // insertion des deux categories de la table categories
    DB::table('categories')->insert([
      [
        'Title' => 'Homme',
        'Description' => 'mode homme'
      ], 
      [
        'Title' => 'Femme',
        'Description' => 'mode femme'
      ]
    ]);
    
    // a chaque fois que je lance les seed je vide toute les image qui sont dans le dossier 
    Storage::disk('local')->delete(Storage::allFiles());

    // remplissage de la table products avec 20 produit pour chaque tour de boucle
    // je genere une chaine de caractere qui correspond au nom de l'image dans le dossier
    // puis je recupere une image depuis le site picssum.photo que je place dans le dossier
    // je met a jour le champ url_image de la table products avec le la chaine generer avant
    factory(App\Product::class, 20)->create()->each(function ($product) {

        $link = Str::random(20) . '.jpg' ;
        
        $file = file_get_contents('https://picsum.photos/150/200?random=20');

        
        Storage::put($link, $file);
        DB::table('products')->update([
            'url_image' => $link
        ]);

        $product->save();

    });
  }
}