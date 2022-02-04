<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice' => $this->faker->randomNumber(4),
            'installment' => $this->faker-> randomNumber(1),
            'client_id' => $this->faker-> uuid3(),
            'value' => $this->faker->randomFloat(3),
            'due_date' => $this->faker-> dateTime(),
            'payment_date' => $this->faker-> dateTime(),

        ];
    }
}
