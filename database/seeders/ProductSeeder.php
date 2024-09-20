<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*********************************************************************  PIZZERIE  *********************************************************/
        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Margherita";
        $Product->description = "Pizza con pomodoro e mozzarella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/margherita.webp";
        $Product->type = "Food";
        $Product->price = 5.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Napoli";
        $Product->description = "Pizza con pomodoro e alici";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/napoli.webp";
        $Product->type = "Food";
        $Product->price = 6.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Diavola";
        $Product->description = "Pizza con pomodoro, mozzarella e salame piccante";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Quattro Stagioni";
        $Product->description = "Pizza con pomodoro, mozzarella, funghi champignon, carciofi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-stagioni.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Capricciosa";
        $Product->description = "Pizza con pomodoro, funghi champignon, olive, carciofi, prosciutto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/capricciosa.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Tonno e Cipolla";
        $Product->description = "Pizza con pomodoro, mozzarella, tonno e cipolla";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/tonno-e-cipolla.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Quattro Formaggi";
        $Product->description = "Pizza con pomodoro, mozzarella, brie, grana, parmigiano";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-formaggi.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Marinara";
        $Product->description = "Pizza con pomodoro, origano, aglio e acciughe";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/marinara.webp";
        $Product->type = "Food";
        $Product->price = 5.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Prosciutto Cotto";
        $Product->description = "Pizza con pomodoro, mopzzarella e prosciutto cotto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/prosciutto-cotto.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Bufala";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pomodori secchi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pancetta e Scamorza";
        $Product->description = "Pizza con pomodoro, mozzarella, pancetta e scamorza affumicata";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/pancetta-e-scamorza.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Mortadella e Pistacchi";
        $Product->description = "Pizza con pomodoro, mozzarella, mortadella e pistacchi di bronte";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/mortadella-e-pistacchi.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Bresaola e Rucola";
        $Product->description = "Pizza con pomodoro, mozzarella, bresaola e rucola";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bresaola-e-rucola.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Gamberetti e Zucchine";
        $Product->description = "Pizza con pomodoro, mozzarella, gamberetti e zucchine";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/gamberetti-e-zucchine.webp";
        $Product->type = "Food";
        $Product->price = 8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Bufala e Pesto";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pesto alla genovese";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pesto.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Diavola con Olive";
        $Product->description = "Pizza con pomodoro, mozzarella salame piccante e olive nere";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola-e-olive.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Cotto e Funghi";
        $Product->description = "Pizza con pomodoro, mozzarella, cotto e funghi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/cotto-e-funghi.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Bufala e Pomodorini";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pomodorini";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pomodorini.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 1;
        $Product->name = "Pizza Salsiccia e Peperoni";
        $Product->description = "Pizza con pomodoro, mozzarella, salsiccia e peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/salsiccia-e-peperoni.webp";
        $Product->type = "Food";
        $Product->price = 9.50;
        $Product->visible = true;
        $Product->save();

        /**********************************************************  MESSICANO  **************************************************/

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Tacos al Pastor";
        $Product->description = "Tacos con carne di pecora, avocado, peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-al-pastor.webp";
        $Product->type = "Food";
        $Product->price = 5.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Tacos de Carnitas";
        $Product->description = "Tacos con carne di mucca, centriolini, peperoncino, coriandolo";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-carnitas.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Tacos de Pollo";
        $Product->description = "Tacos con carne di pollo, coriandolo, formaggio";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-pollo.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Tacos de Pescado";
        $Product->description = "Tacos con polpo, jalapeno, pomodoro";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-pescado.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Quesadilla con Queso";
        $Product->description = "Carne di mucca con formaggio fuso";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/quesadilla-queso.webp";
        $Product->type = "Food";
        $Product->price = 6.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Tacos de Chorizo";
        $Product->description = "Tacos con carne di mucca, centriolini, peperoncino";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-chorizo.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Tacos de Barbacoa";
        $Product->description = "Tacos con carne di mucca, coriandolo, cheddar";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-barbacoa.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Enchiladas de Pollo";
        $Product->description = "Carne di pollo con cheddar";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/enchilads-de-pollo.webp";
        $Product->type = "Food";
        $Product->price = 6.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Burrito con Carne Asada";
        $Product->description = "Burrito con carne asada, insalata, salsa speciale";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-carne.webp";
        $Product->type = "Food";
        $Product->price = 5.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Burrito con Pollo";
        $Product->description = "Burrito con carne di pollo, coriandolo, peperoni, peperoncino";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-pollo.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Burrito Vegetariano";
        $Product->description = "Tacos con verdure, lattuga, pomodoro, cipolla, coriandolo, salsa formaggio";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-vegetariano.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Burrito con Gamberi";
        $Product->description = "Burrito con gamberi, pomodoro, peperone, maionese";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-gamberi.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Quesadilla con Chorizo";
        $Product->description = "Piadina con formaggio, salamino, peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/quesadilla-chorizo.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Quesadilla con funghi";
        $Product->description = "Piadina con fomrmaggio, funghi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/quesadilla-funghi.webp";
        $Product->type = "Food";
        $Product->price = 6.5;
        $Product->visible = true;
        $Product->save();



        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Nachos con formaggio fuso";
        $Product->description = "Nachos con formaggio fuso sopra";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/nachos-formaggio.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Nachos con Jalapenos";
        $Product->description = "Nachos con Jalapenos sopra";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/nachos-jalapenos.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 2;
        $Product->name = "Nachos con Guacamole";
        $Product->description = "Nachos con Guacamole sopra";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/nachos-guacamole.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();


        /***********************************************  SUSHI  *************************************************/

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Nigiri al Salmone";
        $Product->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-salmone.webp";
        $Product->type = "Food";
        $Product->price = 4.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Nigiri al Tonno";
        $Product->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-tonno.webp";
        $Product->type = "Food";
        $Product->price = 5.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Nigiri al Gambero";
        $Product->description = "Gambero cotto e dolce, servito su un letto di riso.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-gambero.webp";
        $Product->type = "Food";
        $Product->price = 6.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Sashimi Misto";
        $Product->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-misto.webp";
        $Product->type = "Food";
        $Product->price = 4.40;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Hosamaki al Salmone";
        $Product->description = "Riso e salmone avvolti in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosamaki-salmone.webp";
        $Product->type = "Food";
        $Product->price = 6.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Nigiri al Branzino";
        $Product->description = "Filetto di branzino delicato, adagiato su riso sushi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-branzino.webp";
        $Product->type = "Food";
        $Product->price = 5.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Hosomaki al Cetriolo";
        $Product->description = " Rotolo di riso e cetriolo croccante, avvolto in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosomaki-cetriolo.webp";
        $Product->type = "Food";
        $Product->price = 4.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Nigiri al Polpo";
        $Product->description = " Fettina di polpo tenero su un letto di riso compatto.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-polpo.webp";
        $Product->type = "Food";
        $Product->price = 6.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Sashimi di Salmone";
        $Product->description = "Fettine di salmone crudo, fresche e succulente.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-salmone.webp";
        $Product->type = "Food";
        $Product->price = 4.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Sashimi di Tonno";
        $Product->description = "Tonno crudo tagliato con precisione, ricco di sapore.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-tonno.webp";
        $Product->type = "Food";
        $Product->price = 6.10;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Kung Pao Chicken";
        $Product->description = "Pollo saltato con arachidi, peperoncino e verdure.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/kung-pao-chicken.webp";
        $Product->type = "Food";
        $Product->price = 7.8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Xiao Long Bao";
        $Product->description = "Ravioli al vapore ripieni di carne e brodo.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/xiao-long-bao.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Sweet and Sour Pork";
        $Product->description = "Maiale fritto in salsa agrodolce.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/sweet-and-sour-pork.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Wonton Soup";
        $Product->description = "Zuppa leggera con wonton ripieni di carne o gamberi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/wonton-soup.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 3;
        $Product->name = "Zongzi";
        $Product->description = "Riso glutinoso avvolto in foglie di bambù, ripieno di carne o fagioli.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/zongzi.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();


        /*************************************************************  CINESE  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Ma Po Tofu";
        $Product->description = "Tofu piccante del Sichuan con carne macinata e pepe di Sichuan.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/ma-po-tofu.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Gyoza";
        $Product->description = "Ravioli ripieni di carne o verdure, spesso cotti al vapore o fritti.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/jiaozi.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Peking Duck";
        $Product->description = "Anatra arrosto servita con crepes sottili, cipollotto e salsa hoisin.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/peking-duck.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Chow Mein";
        $Product->description = "Noodles saltati con carne, verdure e salsa di soia.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/chow-mein.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Riso Cantonese";
        $Product->description = "Riso con uova, prosciutto, piselli, carote e formaggio.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/hot-pot.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Kung Pao Chicken";
        $Product->description = "Pollo saltato con arachidi, peperoncino e verdure.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/kung-pao-chicken.webp";
        $Product->type = "Food";
        $Product->price = 7.8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Xiao Long Bao";
        $Product->description = "Ravioli al vapore ripieni di carne e brodo.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/xiao-long-bao.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Sweet and Sour Pork";
        $Product->description = "Maiale fritto in salsa agrodolce.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/sweet-and-sour-pork.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Wonton Soup";
        $Product->description = "Zuppa leggera con wonton ripieni di carne o gamberi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/wonton-soup.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Zongzi";
        $Product->description = "Riso glutinoso avvolto in foglie di bambù, ripieno di carne o fagioli.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/zongzi.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Mapo Eggplant";
        $Product->description = " Melanzane saltate con carne macinata in salsa piccante.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/mapo-eggplant.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Sichuan Hot and Sour Soup";
        $Product->description = "Zuppa piccante e agrodolce con tofu, funghi e bambù.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/sichuan-hot-and-sour-soup.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Char Siu";
        $Product->description = " Maiale caramellato alla griglia con salsa dolce.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/char-siu.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Dim Sum";
        $Product->description = "Piccoli bocconi serviti a vapore o fritti, come involtini primavera e baozi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/dim-sum.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Lo Mai Gai";
        $Product->description = "Riso glutinoso al vapore con pollo e funghi, avvolto in foglie di loto.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/lo-mai-gai.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();


        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Moo Shu Pork";
        $Product->description = "Carne di maiale saltata con uova e verdure, servita con pancake sottili.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/moo-shu-pork.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Lion’s Head Meatballs";
        $Product->description = "Grandi polpette di maiale cotte in un brodo leggero.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/lion-head-meatballs.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Pollo alle Mandorle";
        $Product->description = "Pollo con salsa agrodolce e mandrole.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/scallion-pancackes.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Beef Chow Fun";
        $Product->description = " Tagliatelle di riso saltate con manzo e verdure.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/beef-cho-fun.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Red-Braised Pork";
        $Product->description = "Maiale brasato in salsa di soia dolce e vino di riso.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/red-braised-pork.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Dan Dan Noodles";
        $Product->description = "Noodles sottili con carne macinata piccante, verdure e salsa di arachidi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/dan-dan-noodles.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Nigiri al Tonno";
        $Product->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-tonno.webp";
        $Product->type = "Food";
        $Product->price = 5.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Nigiri al Gambero";
        $Product->description = "Gambero cotto e dolce, servito su un letto di riso.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-gambero.webp";
        $Product->type = "Food";
        $Product->price = 6.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Sashimi Misto";
        $Product->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-misto.webp";
        $Product->type = "Food";
        $Product->price = 4.40;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Hosamaki al Salmone";
        $Product->description = "Riso e salmone avvolti in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosamaki-salmone.webp";
        $Product->type = "Food";
        $Product->price = 6.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Nigiri al Branzino";
        $Product->description = "Filetto di branzino delicato, adagiato su riso sushi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-branzino.webp";
        $Product->type = "Food";
        $Product->price = 5.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 4;
        $Product->name = "Hosomaki al Cetriolo";
        $Product->description = " Rotolo di riso e cetriolo croccante, avvolto in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosomaki-cetriolo.webp";
        $Product->type = "Food";
        $Product->price = 4.30;
        $Product->visible = true;
        $Product->save();

        /*************************************************************  LA VERACE  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Margherita";
        $Product->description = "Pizza con pomodoro e mozzarella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/margherita.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Napoli";
        $Product->description = "Pizza con pomodoro e alici";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/napoli.webp";
        $Product->type = "Food";
        $Product->price = 6;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Diavola";
        $Product->description = "Pizza con pomodoro, mozzarella e salame piccante";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Quattro Stagioni";
        $Product->description = "Pizza con pomodoro, mozzarella, funghi champignon, carciofi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-stagioni.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Capricciosa";
        $Product->description = "Pizza con pomodoro, funghi champignon, olive, carciofi, prosciutto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/capricciosa.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Tonno e Cipolla";
        $Product->description = "Pizza con pomodoro, mozzarella, tonno e cipolla";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/tonno-e-cipolla.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Quattro Formaggi";
        $Product->description = "Pizza con pomodoro, mozzarella, brie, grana, parmigiano";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-formaggi.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Marinara";
        $Product->description = "Pizza con pomodoro, origano, aglio e acciughe";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/marinara.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Prosciutto Cotto";
        $Product->description = "Pizza con pomodoro, mopzzarella e prosciutto cotto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/prosciutto-cotto.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Bufala";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pomodori secchi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pancetta e Scamorza";
        $Product->description = "Pizza con pomodoro, mozzarella, pancetta e scamorza affumicata";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/pancetta-e-scamorza.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Mortadella e Pistacchi";
        $Product->description = "Pizza con pomodoro, mozzarella, mortadella e pistacchi di bronte";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/mortadella-e-pistacchi.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Bresaola e Rucola";
        $Product->description = "Pizza con pomodoro, mozzarella, bresaola e rucola";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bresaola-e-rucola.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Gamberetti e Zucchine";
        $Product->description = "Pizza con pomodoro, mozzarella, gamberetti e zucchine";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/gamberetti-e-zucchine.webp";
        $Product->type = "Food";
        $Product->price = 8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Bufala e Pesto";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pesto alla genovese";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pesto.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Diavola con Olive";
        $Product->description = "Pizza con pomodoro, mozzarella salame piccante e olive nere";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola-e-olive.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Cotto e Funghi";
        $Product->description = "Pizza con pomodoro, mozzarella, cotto e funghi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/cotto-e-funghi.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Bufala e Pomodorini";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pomodorini";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pomodorini.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 5;
        $Product->name = "Pizza Salsiccia e Peperoni";
        $Product->description = "Pizza con pomodoro, mozzarella, salsiccia e peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/salsiccia-e-peperoni.webp";
        $Product->type = "Food";
        $Product->price = 9.50;
        $Product->visible = true;
        $Product->save();

        /*************************************************************  PECCATI DI GOLA  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Cornetto Vuoto";
        $Product->description = "Cornetto Vuoto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/Cornetto-vuoto.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Cornetto Con Nutella";
        $Product->description = "Cornetto Con Nutella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/Cornetto-con-nutella.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Cornetto Con Crema";
        $Product->description = "Cornetto Con Crema";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/cornetto-con-crema.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Cornetto Con Crema Al Pistacchio";
        $Product->description = "Cornetto Con Crema Al Pistacchio";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/cornetto-con-crema-al-pistacchio.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Krapfen alla Crema";
        $Product->description = "Krapfen alla Crema";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/krapfen-alla-crema.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Krapfen alla Nutella";
        $Product->description = "Krapfen alla Nutella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/krapfen-alla-nutella.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 6;
        $Product->name = "Crepes alla Nutella";
        $Product->description = "Crepes alla Nutella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/crepes-alla-nutella.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        /*************************************************************  BROTHERS CAFE'  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Cornetto Vuoto";
        $Product->description = "Cornetto Vuoto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/Cornetto-vuoto.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Cornetto Con Nutella";
        $Product->description = "Cornetto Con Nutella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/Cornetto-con-nutella.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Cornetto Con Crema";
        $Product->description = "Cornetto Con Crema";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/cornetto-con-crema.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Cornetto Con Crema Al Pistacchio";
        $Product->description = "Cornetto Con Crema Al Pistacchio";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/cornetto-con-crema-al-pistacchio.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Krapfen alla Crema";
        $Product->description = "Krapfen alla Crema";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/krapfen-alla-crema.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Krapfen alla Nutella";
        $Product->description = "Krapfen alla Nutella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/peccati-di-gola/krapfen-alla-nutella.webp";
        $Product->type = "Food";
        $Product->price = 1.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Caffè Espresso";
        $Product->description = "Caffè Espresso";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/caffe-espresso.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Cappuccino";
        $Product->description = "Cappuccino";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/cappuccino.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 7;
        $Product->name = "Thè Caldo";
        $Product->description = "Thè Caldo";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/brothers-cafe/the-caldo.webp";
        $Product->type = "Food";
        $Product->price = 1.50;
        $Product->visible = true;
        $Product->save();

        /*************************************************************  FORNO MAGICO  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Margherita";
        $Product->description = "Pizza con pomodoro e mozzarella";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/margherita.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Napoli";
        $Product->description = "Pizza con pomodoro e alici";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/napoli.webp";
        $Product->type = "Food";
        $Product->price = 6;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Diavola";
        $Product->description = "Pizza con pomodoro, mozzarella e salame piccante";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Quattro Stagioni";
        $Product->description = "Pizza con pomodoro, mozzarella, funghi champignon, carciofi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-stagioni.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Capricciosa";
        $Product->description = "Pizza con pomodoro, funghi champignon, olive, carciofi, prosciutto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/capricciosa.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Tonno e Cipolla";
        $Product->description = "Pizza con pomodoro, mozzarella, tonno e cipolla";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/tonno-e-cipolla.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Quattro Formaggi";
        $Product->description = "Pizza con pomodoro, mozzarella, brie, grana, parmigiano";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-formaggi.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Marinara";
        $Product->description = "Pizza con pomodoro, origano, aglio e acciughe";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/marinara.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Prosciutto Cotto";
        $Product->description = "Pizza con pomodoro, mopzzarella e prosciutto cotto";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/prosciutto-cotto.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Bufala";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pomodori secchi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pancetta e Scamorza";
        $Product->description = "Pizza con pomodoro, mozzarella, pancetta e scamorza affumicata";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/pancetta-e-scamorza.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Mortadella e Pistacchi";
        $Product->description = "Pizza con pomodoro, mozzarella, mortadella e pistacchi di bronte";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/mortadella-e-pistacchi.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Bresaola e Rucola";
        $Product->description = "Pizza con pomodoro, mozzarella, bresaola e rucola";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bresaola-e-rucola.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Gamberetti e Zucchine";
        $Product->description = "Pizza con pomodoro, mozzarella, gamberetti e zucchine";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/gamberetti-e-zucchine.webp";
        $Product->type = "Food";
        $Product->price = 8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Bufala e Pesto";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pesto alla genovese";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pesto.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Diavola con Olive";
        $Product->description = "Pizza con pomodoro, mozzarella salame piccante e olive nere";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola-e-olive.webp";
        $Product->type = "Food";
        $Product->price = 6.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Cotto e Funghi";
        $Product->description = "Pizza con pomodoro, mozzarella, cotto e funghi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/cotto-e-funghi.webp";
        $Product->type = "Food";
        $Product->price = 7.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Bufala e Pomodorini";
        $Product->description = "Pizza con pomodoro, mozzarella di bufala e pomodorini";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pomodorini.webp";
        $Product->type = "Food";
        $Product->price = 8.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 8;
        $Product->name = "Pizza Salsiccia e Peperoni";
        $Product->description = "Pizza con pomodoro, mozzarella, salsiccia e peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/salsiccia-e-peperoni.webp";
        $Product->type = "Food";
        $Product->price = 9.50;
        $Product->visible = true;
        $Product->save();

        /*************************************************************  BURRITO BROTHERS  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Tacos al Pastor";
        $Product->description = "Tacos con carne di pecora, avocado, peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-al-pastor.webp";
        $Product->type = "Food";
        $Product->price = 5.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Tacos de Carnitas";
        $Product->description = "Tacos con carne di mucca, centriolini, peperoncino, coriandolo";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-carnitas.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Tacos de Pollo";
        $Product->description = "Tacos con carne di pollo, coriandolo, formaggio";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-pollo.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Tacos de Pescado";
        $Product->description = "Tacos con polpo, jalapeno, pomodoro";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-pescado.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Quesadilla con Queso";
        $Product->description = "Carne di mucca con formaggio fuso";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/quesadilla-queso.webp";
        $Product->type = "Food";
        $Product->price = 6.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Tacos de Chorizo";
        $Product->description = "Tacos con carne di mucca, centriolini, peperoncino";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-chorizo.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Tacos de Barbacoa";
        $Product->description = "Tacos con carne di mucca, coriandolo, cheddar";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/tacos-de-barbacoa.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Enchiladas de Pollo";
        $Product->description = "Carne di pollo con cheddar";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/enchilads-de-pollo.webp";
        $Product->type = "Food";
        $Product->price = 6.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Burrito con Carne Asada";
        $Product->description = "Burrito con carne asada, insalata, salsa speciale";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-carne.webp";
        $Product->type = "Food";
        $Product->price = 5.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Burrito con Pollo";
        $Product->description = "Burrito con carne di pollo, coriandolo, peperoni, peperoncino";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-pollo.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Burrito Vegetariano";
        $Product->description = "Tacos con verdure, lattuga, pomodoro, cipolla, coriandolo, salsa formaggio";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-vegetariano.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Burrito con Gamberi";
        $Product->description = "Burrito con gamberi, pomodoro, peperone, maionese";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/burrito-gamberi.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Quesadilla con Chorizo";
        $Product->description = "Piadina con formaggio, salamino, peperoni";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/quesadilla-chorizo.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Quesadilla con funghi";
        $Product->description = "Piadina con fomrmaggio, funghi";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/quesadilla-funghi.webp";
        $Product->type = "Food";
        $Product->price = 6.5;
        $Product->visible = true;
        $Product->save();



        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Nachos con formaggio fuso";
        $Product->description = "Nachos con formaggio fuso sopra";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/nachos-formaggio.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Nachos con Jalapenos";
        $Product->description = "Nachos con Jalapenos sopra";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/nachos-jalapenos.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 9;
        $Product->name = "Nachos con Guacamole";
        $Product->description = "Nachos con Guacamole sopra";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/d19a3e2bcfc896c7c45a678e8e22db26b28097ac/IMG/el-taco-loco/nachos-guacamole.webp";
        $Product->type = "Food";
        $Product->price = 3.5;
        $Product->visible = true;
        $Product->save();

        /*************************************************************  SAPORE DI SHANGHAI  ***********************************************/

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Ma Po Tofu";
        $Product->description = "Tofu piccante del Sichuan con carne macinata e pepe di Sichuan.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/ma-po-tofu.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Gyoza";
        $Product->description = "Ravioli ripieni di carne o verdure, spesso cotti al vapore o fritti.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/jiaozi.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Peking Duck";
        $Product->description = "Anatra arrosto servita con crepes sottili, cipollotto e salsa hoisin.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/peking-duck.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Chow Mein";
        $Product->description = "Noodles saltati con carne, verdure e salsa di soia.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/chow-mein.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Riso Cantonese";
        $Product->description = "Riso con uova, prosciutto, piselli, carote e formaggio.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/hot-pot.webp";
        $Product->type = "Food";
        $Product->price = 9.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Kung Pao Chicken";
        $Product->description = "Pollo saltato con arachidi, peperoncino e verdure.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/kung-pao-chicken.webp";
        $Product->type = "Food";
        $Product->price = 7.8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Xiao Long Bao";
        $Product->description = "Ravioli al vapore ripieni di carne e brodo.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/xiao-long-bao.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Sweet and Sour Pork";
        $Product->description = "Maiale fritto in salsa agrodolce.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/sweet-and-sour-pork.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Wonton Soup";
        $Product->description = "Zuppa leggera con wonton ripieni di carne o gamberi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/wonton-soup.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Zongzi";
        $Product->description = "Riso glutinoso avvolto in foglie di bambù, ripieno di carne o fagioli.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/zongzi.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Mapo Eggplant";
        $Product->description = " Melanzane saltate con carne macinata in salsa piccante.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/mapo-eggplant.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Sichuan Hot and Sour Soup";
        $Product->description = "Zuppa piccante e agrodolce con tofu, funghi e bambù.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/sichuan-hot-and-sour-soup.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Char Siu";
        $Product->description = " Maiale caramellato alla griglia con salsa dolce.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/char-siu.webp";
        $Product->type = "Food";
        $Product->price = 4.5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Dim Sum";
        $Product->description = "Piccoli bocconi serviti a vapore o fritti, come involtini primavera e baozi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/dim-sum.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Lo Mai Gai";
        $Product->description = "Riso glutinoso al vapore con pollo e funghi, avvolto in foglie di loto.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/lo-mai-gai.webp";
        $Product->type = "Food";
        $Product->price = 5;
        $Product->visible = true;
        $Product->save();


        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Moo Shu Pork";
        $Product->description = "Carne di maiale saltata con uova e verdure, servita con pancake sottili.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/moo-shu-pork.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Lion’s Head Meatballs";
        $Product->description = "Grandi polpette di maiale cotte in un brodo leggero.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/lion-head-meatballs.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Pollo alle Mandorle";
        $Product->description = "Pollo con salsa agrodolce e mandrole.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/scallion-pancackes.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Beef Chow Fun";
        $Product->description = " Tagliatelle di riso saltate con manzo e verdure.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/beef-cho-fun.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Red-Braised Pork";
        $Product->description = "Maiale brasato in salsa di soia dolce e vino di riso.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/red-braised-pork.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Dan Dan Noodles";
        $Product->description = "Noodles sottili con carne macinata piccante, verdure e salsa di arachidi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/dan-dan-noodles.webp";
        $Product->type = "Food";
        $Product->price = 5.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Nigiri al Tonno";
        $Product->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-tonno.webp";
        $Product->type = "Food";
        $Product->price = 5.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Nigiri al Gambero";
        $Product->description = "Gambero cotto e dolce, servito su un letto di riso.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-gambero.webp";
        $Product->type = "Food";
        $Product->price = 6.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Sashimi Misto";
        $Product->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-misto.webp";
        $Product->type = "Food";
        $Product->price = 4.40;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Hosamaki al Salmone";
        $Product->description = "Riso e salmone avvolti in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosamaki-salmone.webp";
        $Product->type = "Food";
        $Product->price = 6.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Nigiri al Branzino";
        $Product->description = "Filetto di branzino delicato, adagiato su riso sushi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-branzino.webp";
        $Product->type = "Food";
        $Product->price = 5.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 10;
        $Product->name = "Hosomaki al Cetriolo";
        $Product->description = " Rotolo di riso e cetriolo croccante, avvolto in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosomaki-cetriolo.webp";
        $Product->type = "Food";
        $Product->price = 4.30;
        $Product->visible = true;
        $Product->save();

        /***********************************************  OCEANO BLU  *************************************************/

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Nigiri al Salmone";
        $Product->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-salmone.webp";
        $Product->type = "Food";
        $Product->price = 4.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Nigiri al Tonno";
        $Product->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-tonno.webp";
        $Product->type = "Food";
        $Product->price = 5.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Nigiri al Gambero";
        $Product->description = "Gambero cotto e dolce, servito su un letto di riso.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-gambero.webp";
        $Product->type = "Food";
        $Product->price = 6.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Sashimi Misto";
        $Product->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-misto.webp";
        $Product->type = "Food";
        $Product->price = 4.40;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Hosamaki al Salmone";
        $Product->description = "Riso e salmone avvolti in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosamaki-salmone.webp";
        $Product->type = "Food";
        $Product->price = 6.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Nigiri al Branzino";
        $Product->description = "Filetto di branzino delicato, adagiato su riso sushi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-branzino.webp";
        $Product->type = "Food";
        $Product->price = 5.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Hosomaki al Cetriolo";
        $Product->description = " Rotolo di riso e cetriolo croccante, avvolto in alga nori.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/hosomaki-cetriolo.webp";
        $Product->type = "Food";
        $Product->price = 4.30;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Nigiri al Polpo";
        $Product->description = " Fettina di polpo tenero su un letto di riso compatto.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/nigiri-polpo.webp";
        $Product->type = "Food";
        $Product->price = 6.60;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Sashimi di Salmone";
        $Product->description = "Fettine di salmone crudo, fresche e succulente.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-salmone.webp";
        $Product->type = "Food";
        $Product->price = 4.80;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Sashimi di Tonno";
        $Product->description = "Tonno crudo tagliato con precisione, ricco di sapore.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/3c2438a901b258812ae1c8ef8c41530e553500c4/IMG/sushi-zen/sashimi-tonno.webp";
        $Product->type = "Food";
        $Product->price = 6.10;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Kung Pao Chicken";
        $Product->description = "Pollo saltato con arachidi, peperoncino e verdure.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/kung-pao-chicken.webp";
        $Product->type = "Food";
        $Product->price = 7.8;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Xiao Long Bao";
        $Product->description = "Ravioli al vapore ripieni di carne e brodo.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/xiao-long-bao.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Sweet and Sour Pork";
        $Product->description = "Maiale fritto in salsa agrodolce.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/sweet-and-sour-pork.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Wonton Soup";
        $Product->description = "Zuppa leggera con wonton ripieni di carne o gamberi.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/wonton-soup.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 11;
        $Product->name = "Zongzi";
        $Product->description = "Riso glutinoso avvolto in foglie di bambù, ripieno di carne o fagioli.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c3402642436f008c7356421533bb91ce12ff07d8/IMG/dragone-doro/zongzi.webp";
        $Product->type = "Food";
        $Product->price = 8.0;
        $Product->visible = true;
        $Product->save();

        /***********************************************  LA BRACERIA SOTTO CASA  *************************************************/

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "Tagliata di carne";
        $Product->description = "Tagliata di carne con pomodoro, rucola e scaglie di grana.";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/tagliata-di-carne.webp";
        $Product->type = "Food";
        $Product->price = 15.50;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "Fiorentina";
        $Product->description = "Costata da 500g taglio fiorentina cotta alla brace";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/fiorentina.webp";
        $Product->type = "Food";
        $Product->price = 30.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "Pollo alla brace";
        $Product->description = "Pollo cotto alla brace con patate";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/pollo-alla-brace.webp";
        $Product->type = "Food";
        $Product->price = 14.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "CheeseBurger";
        $Product->description = "Hamburger cotto alla brace con formaggio cheddar";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/cheesburger.webp";
        $Product->type = "Food";
        $Product->price = 10.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "Hamburger";
        $Product->description = "Hamburger cotto alla brace";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/hamburger.webp";
        $Product->type = "Food";
        $Product->price = 8.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "Fettina alla griglia";
        $Product->description = "Fettina di manzo cotta alla griglia con insalata";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/fettina-alla-griglia.webp";
        $Product->type = "Food";
        $Product->price = 9.00;
        $Product->visible = true;
        $Product->save();

        $Product = new Product();
        $Product->restaurant_id = 12;
        $Product->name = "Caesar Salad";
        $Product->description = "Insalata con pollo alla griglia, pomodorini e maionese";
        $Product->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/e99c4f2b7894afb4a34ddd6eab03f81a7a0b4b0c/IMG/la-braceria-sotto-casa/ceasar-salad.webp";
        $Product->type = "Food";
        $Product->price = 7.00;
        $Product->visible = true;
        $Product->save();


        /***********************************************  KING KEBAB  *************************************************/

        $product = new Product();
        $product->name = 'Kebab Classico';
        $product->description = 'Kebab con Carne di Manzo, Insalata, Pomodoro, Cipolla, Salsa';
        $product->price = 4.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/kebab_classico.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Kebab con Pollo';
        $product->description = 'Kebab con Carne di Pollo, Insalata, Pomodoro, Cipolla, Salsa';
        $product->price = 4.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/kebab_pollo.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Kebab con Verdure';
        $product->description = 'Kebab con Verdure Grigliate, Insalata, Pomodoro, Cipolla, Salsa';
        $product->price = 4.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/kebab_verdure.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Pizza Margherita';
        $product->description = 'Pomodoro, Mozzarella, Basilico';
        $product->price = 5.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/margherita.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Pizza Diavola';
        $product->description = 'Pomodoro, Mozzarella, Salame Piccante';
        $product->price = 6.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/fac70f9740fa965fd2656616aa5eee6aa195bf6e/diavola.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Pizza Quattro Formaggi';
        $product->description = 'Mozzarella, Gorgonzola, Parmigiano, Fontina';
        $product->price = 7.00;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/pizza_quattro_formaggi.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Panino con Prosciutto';
        $product->description = 'Prosciutto, Formaggio, Insalata';
        $product->price = 4.00;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/panino_prosciutto.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Panino Vegetariano';
        $product->description = 'Panino con Verdure Grigliate, Formaggio, Salsa';
        $product->price = 4.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/panino_vegetariano.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Kebab Special';
        $product->description = 'Kebab con Carne di Manzo, Pollo, Insalata, Pomodoro, Cipolla, Salsa';
        $product->price = 5.50;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/kebab_special.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Falafel';
        $product->description = 'Kebab con Polpette di Ceci, Insalata, Pomodoro, Cipolla, Salsa';
        $product->price = 4.00;
        $product->visible = true;
        $product->restaurant_id = 13;
        $product->type = 'Food';
        $product->image = 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/5b79c2dcb49f675856d57dd6cd05eb6a9d1bce2f/falafel.jpg';
        $product->save();
    }
}
