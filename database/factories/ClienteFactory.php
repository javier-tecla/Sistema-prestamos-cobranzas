<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'tipo_documento' => $this->faker->randomElement(['DNI', 'Passaporte', 'Carnet de Extranjería', 'RUC', 'Carnet de identidad']),
            'numero_documento' => $this->faker->unique()->numerify('########'),
            'celular' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'fecha_nacimiento' => $this->faker->date(),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'foto_perfil' => null,
            'contacto_nombre' => $this->faker->name(),
            'contacto_telefono' => $this->faker->phoneNumber(),
            'contacto_relacion' => $this->faker->randomElement(['Familiar', 'Amigo', 'Compañero de trabajo']),
        ];
    }
}
