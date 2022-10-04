<?php

namespace Vagrant\Lesson11\Models;

class PizzaChickenGrill implements PizzaInterface
{

    protected string $title = 'Піца Chicken Grill';
    protected float $cost = 194;
    protected array $ingredients_arr = [
        'cирний соус', 'куряче стегно', 'смажені печериці', 'чері', 'цибуля фрі', 'сир Моцарелла', 'Пармезан'
    ];


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients_arr;
    }
}
