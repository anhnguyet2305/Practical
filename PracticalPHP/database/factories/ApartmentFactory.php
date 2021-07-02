<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'price' => $this->faker->numberBetween(1000000000, 10000000000),
            'general_info' => $this->faker->catchPhrase,
            'details' => $this->faker->text(200),
            'status' => $this->faker->numberBetween(0, 1)
        ];
    }
}
