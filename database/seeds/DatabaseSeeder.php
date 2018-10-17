<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(TipoVeiculoSeeder::class);
        $this->call(VeiculoSeeder::class);
    }
}
