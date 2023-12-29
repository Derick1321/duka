<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class CoordinatesInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $latitude, $longitude, $zoom;
    public function __construct($latitude = null, $longitude = null, $zoom = null)
    {
        //
        $this->latitude = $latitude ? $latitude : -6.3728253;
        $this->longitude = $longitude ? $longitude : 34.8924826;
        $this->zoom = $zoom ? $zoom : 5;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.coordinates-input');
    }
}
