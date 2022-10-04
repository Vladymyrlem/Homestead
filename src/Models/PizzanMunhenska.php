<?php

namespace Vagrant\Lesson11\Models;

class PizzanMunhenska implements PizzaInterface
{
    protected string $title = 'Піца Мюнхенська';
    protected float $cost = 194;
    protected array $ingredients_arr = [
        'з мюнхенськими і баварськими ковбасками', 'пепероні', 'томатами черрі', 'солоними огірками',
        'цибулею', 'гострим перцем чилі .сиром моцарелла і емменталь та соус пілатті'
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
