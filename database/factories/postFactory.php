<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" =>$this->faker->realText(50),
            "body" =>$this->faker->realText(600),
            "author"=>$this->faker->name,
            "created_at"=>now(),
            "updated_at"=>now()

        ];
    }
}
