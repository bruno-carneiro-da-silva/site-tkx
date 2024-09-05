<?php
namespace App\View\Components;

use Illuminate\View\Component;

class FreightDetails extends Component
{
    public $freight;

    public function __construct($freight)
    {
        $this->freight = $freight;
    }

    public function render()
    {
        return view('components.freight-details');
    }
}
