<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency; // AsegÃºrate de importar el modelo correctamente

class CurrencySeeder extends Seeder
{
    public function run()
    {
        $currencies = [
            ['name' => 'DÃ³lar estadounidense', 'code' => 'USD', 'symbol' => '$', 'exchange_rate' => 1.0000, 'is_active' => true],
            ['name' => 'Euro', 'code' => 'EUR', 'symbol' => 'â‚¬', 'exchange_rate' => 0.9200, 'is_active' => true],
            ['name' => 'Peso mexicano', 'code' => 'MXN', 'symbol' => '$', 'exchange_rate' => 17.5000, 'is_active' => true],
            ['name' => 'Libra esterlina', 'code' => 'GBP', 'symbol' => 'Â£', 'exchange_rate' => 0.8000, 'is_active' => true],
            ['name' => 'Yen japonÃ©s', 'code' => 'JPY', 'symbol' => 'Â¥', 'exchange_rate' => 150.7500, 'is_active' => true],
            ['name' => 'Sol peruano', 'code' => 'PEN', 'symbol' => 'S/', 'exchange_rate' => 3.7500, 'is_active' => true],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
