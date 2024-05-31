<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas,$persons)
    {
        //throw new \BadFunctionCallException("Implement the function");
        $gram=$pizzas * (($persons * 20) + 200);
        return $gram;
        
    }

    public function calculateSauceRequirement($pizzas,$sauce_can_volume)
    {
        $sauce_per_pizza=125;
        $cans_of_sauce = $pizzas * $sauce_per_pizza / $sauce_can_volume;
        return $cans_of_sauce;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension,$thickness,$diameter)
    {
        $pizzas=round(($cheese_dimension**3) / ($thickness * (22/7) * $diameter));
        return $pizzas;
    }

    public function calculateLeftOverSlices($pizzas,$frnds)
    {
        return ($pizzas*8) % $frnds ;
    }
}
