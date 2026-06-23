<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $saucePerPizza)
    {
        return ($pizzas * 125) / $saucePerPizza;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter)
    {
        return floor(pow($cheese_dimension, 3) / ($thickness * pi() * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $persons)
    {
        return ($pizzas * 8) % $persons;
    }
}
