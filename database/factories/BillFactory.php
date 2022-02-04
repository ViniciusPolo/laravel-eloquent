<?php

namespace Database\Factories;

use App\Models\Client;
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
            'client_id' => Client::factory()->create()->id,
            'value' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'due_date' => $this->faker-> date($format = 'Y-m-d', $min = 'now',$max = '+ 1week'),
            'payment_date' => $this->faker-> date($format = 'Y-m-d', $min = '-1 week',$max = 'now')

        ];
    }
}
