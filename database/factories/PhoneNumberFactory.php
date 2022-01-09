<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact_id' => function () {
                return Contact::factory()->create()->id;
            },
            'phone_number' => $this->faker->regexify('^(\+38)?(0\d{9})$'),
        ];
    }
}
