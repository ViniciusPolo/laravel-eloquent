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
            'invoice' => $this->faker->randomNumber($nbDigits = 4),
            'installment' => $this->faker-> randomDigit(),
            'client_id' => $this->faker-> uuid3(),
            'value' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'due_date' => $this->faker-> date($format = 'Y-m-d', $min = 'now',$max = '+ 1week'),
            'payment_date' => $this->faker-> date($format = 'Y-m-d', $min = '-1 week',$max = 'now')

        ];
    }
}
