<?php

namespace App\Livewire\TrainStation;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.app.sidebar')]
    public function render()
    {
        return view('livewire.train-station.index');
    }
}
