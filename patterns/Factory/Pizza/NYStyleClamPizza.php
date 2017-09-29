<?php

namespace Patterns\Factory\Pizza;


/**
 * Class NYStyleClamPizza
 * @package Patterns\Factory\Pizza
 */
class NYStyleClamPizza extends Pizza
{

    /**
     * NYStyleClamPizza constructor.
     */
    public function __construct()
    {
        $this->name = "NY Style Sauce and Clam Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";

        $this->toppings[] = "Grated Reggiano Clam";
    }

    /**
     * @inheritDoc
     */
    public function box()
    {
        print_r("Box: Place pizza in NY PizzaStore box" . '<br>');
    }


}
