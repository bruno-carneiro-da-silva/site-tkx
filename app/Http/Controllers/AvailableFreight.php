<?php
namespace App\View\Components;

use Illuminate\View\Component;

class AvailableFreight extends Component
{
    public $freights;

    public function __construct($freights)
    {
        $this->freights = $freights;
    }

    public function render()
    {
        return view('components.available-freight');
    }
}
