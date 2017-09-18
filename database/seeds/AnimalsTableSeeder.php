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
    }
}
