<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name(),
            'job'=>$this->faker->jobTitle(),
            'email' => $this->faker->unique()->safeEmail(),
            'experience' => $this->faker->bs(),
            'biography' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
