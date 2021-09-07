<?php

namespace Database\Factories;

use App\Models\Vente;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_client' => rand(0, 5),
            'id_produit' => rand(0, 5),
            'qte' => rand(1, 5),
        ];
    }
}
