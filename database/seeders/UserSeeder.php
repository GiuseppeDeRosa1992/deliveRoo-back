<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $francesco = new User();
        $francesco->user_name = "Francesco Falcone";
        $francesco->email = "francesco@gmail.com";
        $francesco->password = "ciao1234";
        $francesco->save();

        $franco = new User();
        $franco->user_name = "Franco Falcone";
        $franco->email = "franco@gmail.com";
        $franco->password = "ciao1234";
        $franco->save();

        $giancarlo = new User();
        $giancarlo->user_name = "Giancarlo De Rosa";
        $giancarlo->email = "giancarlo@gmail.com";
        $giancarlo->password = "ciao1234";
        $giancarlo->save();

        $paolo = new User();
        $paolo->user_name = "Paolo De Rosa";
        $paolo->email = "paolo@gmail.com";
        $paolo->password = "ciao1234";
        $paolo->save();

        $lorenzo = new User();
        $lorenzo->user_name = "Lorenzo De Rosa";
        $lorenzo->email = "lorenzo@gmail.com";
        $lorenzo->password = "ciao1234";
        $lorenzo->save();

        $giorgio = new User();
        $giorgio->user_name = "Giorgio Arbola";
        $giorgio->email = "giorgio@gmail.com";
        $giorgio->password = "ciao1234";
        $giorgio->save();

        $davide = new User();
        $davide->user_name = "Davide Arbola";
        $davide->email = "davide@gmail.com";
        $davide->password = "ciao1234";
        $davide->save();

        $andrea = new User();
        $andrea->user_name = "Andrea Falcone";
        $andrea->email = "andrea@gmail.com";
        $andrea->password = "ciao1234";
        $andrea->save();

        $luca = new User();
        $luca->user_name = "Luca Falcone";
        $luca->email = "luca@gmail.com";
        $luca->password = "ciao1234";
        $luca->save();

        $giuseppe = new User();
        $giuseppe->user_name = "Giuseppe De Rosa";
        $giuseppe->email = "giuseppe@gmail.com";
        $giuseppe->password = "ciao1234";
        $giuseppe->save();

        $loris = new User();
        $loris->user_name = "Loris De Rosa";
        $loris->email = "loris@gmail.com";
        $loris->password = "ciao1234";
        $loris->save();

        $enzo = new User();
        $enzo->user_name = "Enzo De Rosa";
        $enzo->email = "enzo@gmail.com";
        $enzo->password = "ciao1234";
        $enzo->save();

        $momo = new User();
        $momo->user_name = "Momo Abdullah";
        $momo->email = "momo@gmail.com";
        $momo->password = "ciao1234";
        $momo->save();
    }
}
