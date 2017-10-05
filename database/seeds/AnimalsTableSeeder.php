<?php

use Illuminate\Database\Seeder;
use App\Animal;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create(['number' => '0', 'name' => 'Delfin']);
        Animal::create(['number' => '00', 'name' => 'Ballena']);
        Animal::create(['number' => '01', 'name' => 'Carnero']);
        Animal::create(['number' => '02', 'name' => 'Toro']);
        Animal::create(['number' => '03', 'name' => 'Cienpies']);
        Animal::create(['number' => '04', 'name' => 'Alacran']);
        Animal::create(['number' => '05', 'name' => 'Leon']);
        Animal::create(['number' => '06', 'name' => 'Rana']);
        Animal::create(['number' => '07', 'name' => 'Perico']);
        Animal::create(['number' => '08', 'name' => 'Raton']);
        Animal::create(['number' => '09', 'name' => 'Aguila']);
        Animal::create(['number' => '10', 'name' => 'Tigre']);
        Animal::create(['number' => '11', 'name' => 'Caballo']);
        Animal::create(['number' => '12', 'name' => 'Gato']);
        Animal::create(['number' => '13', 'name' => 'Mono']);
        Animal::create(['number' => '14', 'name' => 'Paloma']);
        Animal::create(['number' => '15', 'name' => 'Zorro']);
        Animal::create(['number' => '16', 'name' => 'Oso']);
        Animal::create(['number' => '17', 'name' => 'Pavo']);
        Animal::create(['number' => '18', 'name' => 'Burro']);
        Animal::create(['number' => '19', 'name' => 'Chivo']);
        Animal::create(['number' => '20', 'name' => 'Cochino']);
        Animal::create(['number' => '21', 'name' => 'Gallo']);
        Animal::create(['number' => '22', 'name' => 'Camello']);
        Animal::create(['number' => '23', 'name' => 'Cebra']);
        Animal::create(['number' => '24', 'name' => 'Iguana']);
        Animal::create(['number' => '25', 'name' => 'Gallina']);
        Animal::create(['number' => '26', 'name' => 'Vaca']);
        Animal::create(['number' => '27', 'name' => 'Perro']);
        Animal::create(['number' => '28', 'name' => 'Zamuro']);
        Animal::create(['number' => '29', 'name' => 'Elefante']);
        Animal::create(['number' => '30', 'name' => 'Caiman']);
        Animal::create(['number' => '31', 'name' => 'Lapa']);
        Animal::create(['number' => '32', 'name' => 'Ardilla']);
        Animal::create(['number' => '33', 'name' => 'Pescado']);
        Animal::create(['number' => '34', 'name' => 'Venado']);
        Animal::create(['number' => '35', 'name' => 'Girafa']);
        Animal::create(['number' => '36', 'name' => 'Culebra']);
    }
}
