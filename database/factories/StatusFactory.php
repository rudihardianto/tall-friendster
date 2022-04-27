<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Timeline\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timeline\Status>
 */
class StatusFactory extends Factory
{
    protected $model = Status::class;

    public function definition()
    {
        return [
            'hash'    => Str::random(32),
            'user_id' => rand(1, 4),
            'body'    => $this->faker->sentence(),
        ];
    }
}
