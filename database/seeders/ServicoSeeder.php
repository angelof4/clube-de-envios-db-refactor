<?php

namespace Database\Seeders;

use App\Models\Servico;
use App\Models\ShippingMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Consulta todos os registros da tabela serviços no banco legado
        $servicos = Servico::all();

        foreach ($servicos as $servico) {
            ShippingMethod::create([
                'method_name' => $servico->nm_servico,
            ]);
        }
    }
}
