<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Broker extends Component
{
    /**
     * Create a new component instance.
     *
     * @param \App\Models\Broker $broker
     */
    public function __construct(
        public \App\Models\Broker $broker
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.broker');
    }
}
