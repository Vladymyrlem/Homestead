<?php

namespace Vagrant\Lesson11\Models;

class PizzaCalculate
{
    protected array $pannier = [];

    public function getPannier(): array
    {
        return $this->pannier;
    }

    public function add(PizzaInterface $mypizza): void
    {
        $this->pannier[] = $mypizza;
    }

    public function ingredients(): string
    {
        $ingredients = [];

        foreach ($this->getPannier() as $pizza) {
            foreach ($pizza->getIngredients() as $ingredient) {
                if (!in_array($ingredient, $ingredients)) {
                    $ingredients[] = $ingredient;
                }
            }
        }
        return implode('<br>', $ingredients);
    }

    public function price(): float
    {
        $price = 0;
        foreach ($this->getPannier() as $pizza) {
            $price += $pizza->getCost();
        }
        return $price;
    }
}
