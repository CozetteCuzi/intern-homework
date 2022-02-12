<?php

namespace App\View\Components;

use App\Models\Broker;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class BrokerList extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param Collection|Broker[] $brokers
     */
    public function __construct(
        public string $title,
        public Collection $brokers
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
        return view('components.broker-list');
    }
}
