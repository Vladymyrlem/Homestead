<?php

namespace Vagrant\Lesson11\Models;

class PizzaMexico implements PizzaInterface
{
    protected string $title = 'Піца Chicken Grill';
    protected float $cost = 175;
    protected array $ingredients_arr = [
        'Вершково-сирний соус', 'куряче стегно', 'сир Моцарелла', 'сальса з ананасу та кукурудзи', 'Гуакамолє', 'чіпси Начос', 'зелений перець чілі', 'кінза'
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
