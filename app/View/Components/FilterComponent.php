<?php
namespace App\View\Components;

use Illuminate\View\Component;

class FilterComponent extends Component
{
    public $title;
    public $options;
    public $name;

    public function __construct($title, $options, $name)
    {
        $this->title = $title;
        $this->options = $options;
        $this->name = $name;
    }

    public function render()
    {
        return view('components.filter-component');
    }
}
