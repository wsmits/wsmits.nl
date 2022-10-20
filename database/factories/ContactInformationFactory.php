<?php

namespace Database\Factories;

use App\Enums\ContactInformationType;
use App\Models\ContactInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactInformationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactInformation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(ContactInformationType::cases());

        switch ($type) {
            case ContactInformationType::EMAIL:
                $value = $this->faker->email();
                break;
            case ContactInformationType::MOBILE:
            case ContactInformationType::PHONE:
                $value = $this->faker->phoneNumber();
                break;
            case ContactInformationType::SITE:
                $value = $this->faker->url();
        }

        return [
            'type' => $type,
            'value' => $value
        ];
    }
}
