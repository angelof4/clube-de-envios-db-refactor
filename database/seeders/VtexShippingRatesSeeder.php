<?php

namespace Database\Seeders;

use App\Models\ShippingMethod;
use App\Models\VtexShippingRate;
use App\Models\VtexValores;
use Illuminate\Database\Seeder;
use Log;

class VtexShippingRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            VtexValores::chunk(1000, function ($vtexValores) {
                foreach ($vtexValores as $data) {
                    VtexShippingRate::create([
                        'shipping_method_id' => $data->id_servico,
                        'delivery_time' => $data->prazo_entrega,
                        'initial_weight' => $data->peso_inicial,
                        'final_weight' => $data->peso_final,
                        'value' => $data->valor,
                        'start_zipcode' => $data->cep_inicio,
                        'end_zipcode' => $data->cep_final,
                        'backup_json' => json_encode($data)
                    ]);
                }
            });
        } catch (\Throwable $th) {
            Log::info("Erro ao migrar - " . $th);
        }
    }
}
