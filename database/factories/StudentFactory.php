<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Siswa::class;
    
    public function definition(): array
    {
        return [
            "uid" => fake()->random_int(),
            "nama" => fake()->userName(),
            "kelas" =>fake()->userName(),
            "jurusan" => fake()->userAgent(),
        ];
    }
}
