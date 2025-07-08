<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    public string $title;
    public mixed $value;

    public function __construct(string $title, mixed $value)
    {
        $this->title = $title;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
