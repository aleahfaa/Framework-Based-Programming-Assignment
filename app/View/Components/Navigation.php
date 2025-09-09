<?php
namespace App\View\Components;
use Illuminate\View\Component;
class Navigation extends Component
{
    public $items;
    public $current;
    public function __construct($current = null)
    {
        $this->current = $current;
        $this->items = [
            ['label' => 'Home', 'url' => url('/'), 'route' => '/'],
            ['label' => 'Blog', 'url' => url('/blog'), 'route' => '/blog'],
            ['label' => 'Contact', 'url' => url('/contact'), 'route' => '/contact'],
        ];
    }
    public function render()
    {
        return view('components.navigation');
    }
    public function isActive($route)
    {
        return request()->is(trim($route, '/')) || 
               request()->is(trim($route, '/').'/*');
    }
}