<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clientes")->insert([
            [
                "id" => 1,
                "nombres" => "Juan Yengle",
                "email" => "juan_y@gmail.com",
                "direccion" => "calle 1464",
                "fono" => 945687459
            ],
            [
                "id" => 2,
                "nombres" => "Ana María López",
                "email" => "ana_lopez@gmail.com",
                "direccion" => "avenida 2324",
                "fono" => 945123456
            ],
            [
                "id" => 3,
                "nombres" => "Carlos Fernández",
                "email" => "carlos_fernandez@hotmail.com",
                "direccion" => "calle 987",
                "fono" => 945234567
            ],
            [
                "id" => 4,
                "nombres" => "Laura Pérez",
                "email" => "laura.perez@yahoo.com",
                "direccion" => "avenida 5678",
                "fono" => 945345678
            ],
            [
                "id" => 5,
                "nombres" => "Pedro González",
                "email" => "pedro.gonzalez@live.com",
                "direccion" => "calle 5432",
                "fono" => 945456789
            ],
            [
                "id" => 6,
                "nombres" => "María Rodríguez",
                "email" => "maria_rodriguez@gmail.com",
                "direccion" => "calle 1234",
                "fono" => 945567890
            ],
            [
                "id" => 7,
                "nombres" => "Jorge Martínez",
                "email" => "jorge.martinez@hotmail.com",
                "direccion" => "avenida 6789",
                "fono" => 945678901
            ],
            [
                "id" => 8,
                "nombres" => "Patricia Gómez",
                "email" => "patricia.gomez@yahoo.com",
                "direccion" => "calle 9876",
                "fono" => 945789012
            ],
            [
                "id" => 9,
                "nombres" => "Miguel Ángel Silva",
                "email" => "miguel.silva@live.com",
                "direccion" => "avenida 3456",
                "fono" => 945890123
            ],
            [
                "id" => 10,
                "nombres" => "Claudia Ramírez",
                "email" => "claudia.ramirez@gmail.com",
                "direccion" => "calle 8765",
                "fono" => 945901234
            ],
            [
                "id" => 11,
                "nombres" => "Roberto Herrera",
                "email" => "roberto.herrera@yahoo.com",
                "direccion" => "avenida 4321",
                "fono" => 945012345
            ],
        ]);
    }
}
