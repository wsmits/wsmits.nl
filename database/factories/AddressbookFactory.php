<?php

namespace Database\Factories;

use App\Models\Addressbook;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressbookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Addressbook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name()
        ];
    }

    /**
     * @param int $count
     * @return AddressbookFactory
     */
    public function withContacts(int $count = 1)
    {
        return $this->has(
            Contact::factory($count)->withContactInformation(4)->withContactAddresses(2),
            'contacts'
        );
    }
}
