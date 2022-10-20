<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\ContactAddress;
use App\Models\ContactInformation;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male','female']);
        $firstName = $this->faker->firstName($gender);
        $lastName =  $this->faker->lastName();

        return [
            'initials' => strtoupper(sprintf('%s. %s.', substr($firstName, 0,1), substr($lastName, 0,1))),
            'first_name' => $firstName,
            'middle_name' => '',
            'last_name' => $lastName,
            'gender' => strtoupper(substr($gender, 0,1))
        ];
    }

    /**
     * Indicate that the contact should have contactInformation team.
     *
     * @return $this
     */
    public function withContactInformation(int $count = 1)
    {
        return $this->has(
            ContactInformation::factory($count)
                ->state(function (array $attributes, Contact $contact) {
                    return [];
                }),
            'contactInformation'
        );
    }

    /**
     * Indicate that the contact should have contactInformation team.
     *
     * @return $this
     */
    public function withContactAddresses(int $count = 1)
    {
        return $this->has(
            ContactAddress::factory($count)
                ->state(function (array $attributes, Contact $contact) {
                    return [];
                }),
            'contactAddresses'
        );
    }
}
