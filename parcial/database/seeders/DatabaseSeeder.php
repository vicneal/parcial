<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetalleVenta;
use App\Models\ProductoCompra;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $clienteSeeder = new ClienteSeeder();
        $clienteSeeder->run();
        $detalleCompraSeeder = new DetalleCompraSeeder();
        $detalleCompraSeeder->run();
        $detalleVentaSeeder = new DetalleVentaSeeder();
        $detalleVentaSeeder->run();
        $productoCompraSeeder = new ProductoCompraSeeder();
        $productoCompraSeeder->run();
        $productoSeeder = new ProductoSeeder();
        $productoSeeder->run();
        $proveedorSeeder = new ProveedorSeeder();
        $proveedorSeeder->run();
        $vendedorSeeder = new VendedorSeeder();
        $vendedorSeeder->run();
        $ventaProductoSeeder = new VentaProductoSeeder();
        $ventaProductoSeeder->run();

    }
}
