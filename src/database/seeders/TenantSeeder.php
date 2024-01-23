<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenant::factory()->has(User::factory(5)->has(Order::factory(3)))->has(Product::factory(5))->create();
        Tenant::factory()->has(User::factory(5))->create();
    }
}
