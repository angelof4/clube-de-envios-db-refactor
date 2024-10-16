<?php

namespace Database\Seeders;

use App\Models\Carrier;
use App\Models\Transportadora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportadoraToCarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $legacyTransportadoras = Transportadora::all();

        foreach ($legacyTransportadoras as $legacyTransportadora) {
            Carrier::create([
                'name' => $legacyTransportadora->nm_transportadora, // Migra o campo 'nome' para o novo campo 'name'
            ]);
        }
    }
}
