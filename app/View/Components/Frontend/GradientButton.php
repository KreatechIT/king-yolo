<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GradientButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $text = 'Contact';
    public $url = '#';

    public function __construct($text = null, $url = null)
    {
        if($text != null){
            $this->text = $text;
            $this->url = $url;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.gradient-button');
    }
}
