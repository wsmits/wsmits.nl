<?php

namespace Database\Factories;

use App\Enums\ContactAddressType;
use App\Models\ContactAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(ContactAddressType::cases());

        return [
            'type' => $type,
            'street' => $this->faker->streetName(),
            'street2' => $this->faker->numberBetween(1,99),
            'zip_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'state' => '',
            'country' => $this->faker->country(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude()
        ];
    }
}
