<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Pizzeria = new Category();
        $Pizzeria->name = "Pizzeria";
        $Pizzeria->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/pizza-cat.png";
        $Pizzeria->save();

        $Sushi = new Category();
        $Sushi->name = "Sushi";
        $Sushi->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/sushi-cat.png";
        $Sushi->save();

        $Messicano = new Category();
        $Messicano->name = "Messicano";
        $Messicano->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/messicano-cat.png";
        $Messicano->save();

        $Cinese = new Category();
        $Cinese->name = "Cinese";
        $Cinese->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/cinese-cat.png";
        $Cinese->save();

        $Italiano = new Category();
        $Italiano->name = "Italiano";
        $Italiano->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/spaghetti-cat.png";
        $Italiano->save();

        $Kebab = new Category();
        $Kebab->name = "kebab";
        $Kebab->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/kebab-cat.png";
        $Kebab->save();

        $Vegano = new Category();
        $Vegano->name = "Vegano";
        $Vegano->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/vegan-cat.png";
        $Vegano->save();

        $Internazionale = new Category();
        $Internazionale->name = "Internazionale";
        $Internazionale->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/17e135797bdbd5311ea9495288fe1506af75fe36/Whiteboard%20design%20removebg.png";
        $Internazionale->save();

        $Steakhouse = new Category();
        $Steakhouse->name = "Steakhouse";
        $Steakhouse->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/17e135797bdbd5311ea9495288fe1506af75fe36/Whiteboard%20design%20removebg%20preview.png";
        $Steakhouse->save();

        $Fast_Food = new Category();
        $Fast_Food->name = "Fast Food";
        $Fast_Food->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/fastfood-cat.png";
        $Fast_Food->save();

        $Bar_e_Caffetteria = new Category();
        $Bar_e_Caffetteria->name = "Bar e Gelateria";
        $Bar_e_Caffetteria->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/gelato-cat.png";
        $Bar_e_Caffetteria->save();

        $Fusion = new Category();
        $Fusion->name = "Fusion";
        $Fusion->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/0ae228f4ceebd50ca2a5bca3a12b5cf43d677b05/Food%20Fusion%20Preview.png";
        $Fusion->save();

        $Gourmet = new Category();
        $Gourmet->name = "Gourmet";
        $Gourmet->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/17e135797bdbd5311ea9495288fe1506af75fe36/Whiteboard%20design%20removebg%20(1).png";
        $Gourmet->save();

        $Pasticceria = new Category();
        $Pasticceria->name = "Panini";
        $Pasticceria->image = "https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/be31576b06c4ce70dad370418aaec3393093d5cb/panini-cat.png";
        $Pasticceria->save();
    }
}
