<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->countryCode(),
            'nom' => $this->faker->name(),
            'prix' => rand(500, 20000),
            'quantite' => rand(0, 100),
            'id_fournisseur' => rand(0, 5),
        ];
    }
}
