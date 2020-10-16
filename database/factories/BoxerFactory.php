<?php

namespace Database\Factories;

use App\Models\Boxer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoxerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */


    protected $model = Boxer::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()



    {
            $divisions = ['Heavyweight', 'Middleweight', 'Light Heavyweight', 'Featherweight', 'Welterweight',
                'Flyweight', 'Super Middleweight',
            ];
        $countries = ['United States of America', 'Mexico', 'United Kingdom', 'Germany', 'Poland',
            'Russia', 'Kazakhstan',
            ];

        return [
            'name' => $this -> faker -> firstName,
            'division' => $divisions [array_rand ($divisions)],
            'wins' => $this -> faker -> randomFloat (0, 0, 10),
            'draws' => $this -> faker -> randomFloat (0, 0, 10),
            'losses' => $this -> faker -> randomFloat (0, 0, 10),
            'country' => $countries [array_rand($countries)],
            'notes' => $this -> faker -> paragraphs (3, true),
        ];
    }
}
