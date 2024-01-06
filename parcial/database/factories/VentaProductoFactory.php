<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Vendedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VentaProducto>
 */
class VentaProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id'=>Cliente::factory(),
            'vendedor_id'=>Vendedor::factory()
        ];
    }
}
