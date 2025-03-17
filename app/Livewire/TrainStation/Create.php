<?php

namespace App\Livewire\TrainStation;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.train-station.create');
    }

    public $product_type_id;
    public $transport_type_id;
    public $company_id;
    public $product_id;
    public $country_from_id;
    public $country_to_id;
    public $number_of_wagon;
    public $weight;
    public $number_of_bar;
    public $date_of_out;
    public $date_of_in;

    public function store()
    {
        $this->validate([
            'product_type_id' => 'required',
            'transport_type_id' => 'required',
            'company_id' => 'required',
            'product_id' => 'required',
            'country_from_id' => 'required',
            'country_to_id' => 'required',
            'number_of_wagon' => 'required|numeric',
            'weight' => 'required|numeric',
            'number_of_bar' => 'required|numeric',
            'date_of_out' => 'required|date',
            'date_of_in' => 'required|date|after_or_equal:date_of_out',
        ]);

        DB::transaction(function() {
            // Store logic here
        });

        session()->flash('message', 'Train station created successfully.');
        return 'yess';
    }

    public function cancel()
    {
        return redirect()->route('train-stations.index');
    }
}
