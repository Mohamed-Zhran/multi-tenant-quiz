<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'password'=>'$2y$12$YL9GrPjM1Ygs39wVyLBSo.lQ8ohn1FNMGgAGcOaM1vOnTH30nCkvy', // password
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->phoneNumber(),
        ];
    }
}
