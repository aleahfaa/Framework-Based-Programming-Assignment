<?php
namespace App\View\Components;
use Illuminate\View\Component;
class Card extends Component
{
    public $title;
    public $subtitle;
    public $image;
    public $variant;
    public $hover;
    public function __construct($title = null, $subtitle = null, $image = null, $variant = 'default', $hover = true)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image;
        $this->variant = $variant;
        $this->hover = $hover;
    }
    public function render()
    {
        return view('components.card');
    }
    public function cardClasses()
    {
        $base = 'bg-white rounded-lg border border-n-gray-200 shadow-sm overflow-hidden';
        return $base . ($this->hover ? ' hover:shadow-md transition-all duration-200' : '');
    }
}