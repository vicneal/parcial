<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\VentaProducto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleVenta>
 */
class DetalleVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'venta_id'=> VentaProducto::factory(),
            'producto_id'=>Producto::factory(),
            'cantidad'=>fake()->numberBetween(0,50),
            'precio_unitario'=>fake()->numberBetween(1,150),
        ];
    }
}
