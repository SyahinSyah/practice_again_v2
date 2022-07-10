<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\ms_MY\Miscellaneous;
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'age' => $this->faker->randomDigit(),
            'student_desc' => $this->faker->text,
            'student_ic' => $this->faker->randomDigit(),
            'group_id' => $this->faker->numberBetween(1,100)
            // 'student_ic' => $this->faker->myKadNumber($gender = null|'male'|'female', $hyphen = null|true|false); // "710703471796"
        ];
    }
}
