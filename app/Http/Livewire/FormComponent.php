<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Import;

class FormComponent extends Component
{
    public $country, $amwal_type, $Tkhlaya_Az_tareq, $bar_ba, $company_name, $number_act, $number_car, $number_code, $date, $product_type, $product_name, $maoda, $morawaga, $wigth_by_kg, $wigth_tan, $price_by_kg, $takhlaya_date, $representativ_name, $bar_chalany, $bar_nama_number, $send_date, $driver_name, $send_number_car, $send_maoda, $send_morawaga, $send_wigth_by_kg, $send_wigth_tan;

    protected $rules = [
        'country' => 'required|string',
        'amwal_type' => 'required|string',
        'Tkhlaya_Az_tareq' => 'required|string',
        'bar_ba' => 'required|string',
        'company_name' => 'required|string',
        'number_act' => 'required|string',
        'number_car' => 'required|string',
        'number_code' => 'required|string',
        'date' => 'required|string',
        'product_type' => 'required|string',
        'product_name' => 'required|string',
        'maoda' => 'required|string',
        'morawaga' => 'required|string',
        'wigth_by_kg' => 'required|string',
        'wigth_tan' => 'required|string',
        'price_by_kg' => 'required|string',
        'takhlaya_date' => 'nullable|string',
        'representativ_name' => 'nullable|string',
        'bar_chalany' => 'nullable|string',
        'bar_nama_number' => 'nullable|string',
        'send_date' => 'nullable|string',
        'driver_name' => 'nullable|string',
        'send_number_car' => 'nullable|string',
        'send_maoda' => 'nullable|string',
        'send_morawaga' => 'nullable|string',
        'send_wigth_by_kg' => 'nullable|string',
        'send_wigth_tan' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        Import::create([
            'country' => $this->country,
            'amwal_type' => $this->amwal_type,
            'Tkhlaya_Az_tareq' => $this->Tkhlaya_Az_tareq,
            'bar_ba' => $this->bar_ba,
            'company_name' => $this->company_name,
            'number_act' => $this->number_act,
            'number_car' => $this->number_car,
            'number_code' => $this->number_code,
            'date' => $this->date,
            'product_type' => $this->product_type,
            'product_name' => $this->product_name,
            'maoda' => $this->maoda,
            'morawaga' => $this->morawaga,
            'wigth_by_kg' => $this->wigth_by_kg,
            'wigth_tan' => $this->wigth_tan,
            'price_by_kg' => $this->price_by_kg,
            'takhlaya_date' => $this->takhlaya_date,
            'representativ_name' => $this->representativ_name,
            'bar_chalany' => $this->bar_chalany,
            'bar_nama_number' => $this->bar_nama_number,
            'send_date' => $this->send_date,
            'driver_name' => $this->driver_name,
            'send_number_car' => $this->send_number_car,
            'send_maoda' => $this->send_maoda,
            'send_morawaga' => $this->send_morawaga,
            'send_wigth_by_kg' => $this->send_wigth_by_kg,
            'send_wigth_tan' => $this->send_wigth_tan,
        ]);

        session()->flash('message', 'Form submitted successfully.');
    }

    public function render()
    {
        return view('livewire.form-component');
    }
}
