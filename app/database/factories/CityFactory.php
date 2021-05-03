<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\FederativeUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'federative_unit_id' => function () {
                return FederativeUnit::factory()->create()->id;
            },
            'deleted_at' => null
        ];
    }
}
