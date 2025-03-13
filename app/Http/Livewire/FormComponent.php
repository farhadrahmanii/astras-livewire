<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Import;

class FormComponent extends Component
{
    public $imports, $importId, $country, $amwal_type, $Tkhlaya_Az_tareq, $bar_ba, $company_name, $number_act, $number_car, $number_code, $date, $product_type, $product_name, $maoda, $morawaga, $wigth_by_kg, $wigth_tan, $price_by_kg, $takhlaya_date, $representativ_name, $bar_chalany, $bar_nama_number, $send_date, $driver_name, $send_number_car, $send_maoda, $send_morawaga, $send_wigth_by_kg, $send_wigth_tan;

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

    public function mount()
    {
        $this->imports = Import::all();
    }

    public function resetInputFields()
    {
        $this->importId = null;
        $this->country = '';
        $this->amwal_type = '';
        $this->Tkhlaya_Az_tareq = '';
        $this->bar_ba = '';
        $this->company_name = '';
        $this->number_act = '';
        $this->number_car = '';
        $this->number_code = '';
        $this->date = '';
        $this->product_type = '';
        $this->product_name = '';
        $this->maoda = '';
        $this->morawaga = '';
        $this->wigth_by_kg = '';
        $this->wigth_tan = '';
        $this->price_by_kg = '';
        $this->takhlaya_date = '';
        $this->representativ_name = '';
        $this->bar_chalany = '';
        $this->bar_nama_number = '';
        $this->send_date = '';
        $this->driver_name = '';
        $this->send_number_car = '';
        $this->send_maoda = '';
        $this->send_morawaga = '';
        $this->send_wigth_by_kg = '';
        $this->send_wigth_tan = '';
    }

    public function store()
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

        session()->flash('message', 'Import created successfully.');

        $this->resetInputFields();
        $this->imports = Import::all();
    }

    public function edit($id)
    {
        $import = Import::findOrFail($id);
        $this->importId = $id;
        $this->country = $import->country;
        $this->amwal_type = $import->amwal_type;
        $this->Tkhlaya_Az_tareq = $import->Tkhlaya_Az_tareq;
        $this->bar_ba = $import->bar_ba;
        $this->company_name = $import->company_name;
        $this->number_act = $import->number_act;
        $this->number_car = $import->number_car;
        $this->number_code = $import->number_code;
        $this->date = $import->date;
        $this->product_type = $import->product_type;
        $this->product_name = $import->product_name;
        $this->maoda = $import->maoda;
        $this->morawaga = $import->morawaga;
        $this->wigth_by_kg = $import->wigth_by_kg;
        $this->wigth_tan = $import->wigth_tan;
        $this->price_by_kg = $import->price_by_kg;
        $this->takhlaya_date = $import->takhlaya_date;
        $this->representativ_name = $import->representativ_name;
        $this->bar_chalany = $import->bar_chalany;
        $this->bar_nama_number = $import->bar_nama_number;
        $this->send_date = $import->send_date;
        $this->driver_name = $import->driver_name;
        $this->send_number_car = $import->send_number_car;
        $this->send_maoda = $import->send_maoda;
        $this->send_morawaga = $import->send_morawaga;
        $this->send_wigth_by_kg = $import->send_wigth_by_kg;
        $this->send_wigth_tan = $import->send_wigth_tan;
    }

    public function update()
    {
        $this->validate();

        if ($this->importId) {
            $import = Import::findOrFail($this->importId);
            $import->update([
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

            session()->flash('message', 'Import updated successfully.');

            $this->resetInputFields();
            $this->imports = Import::all();
        }
    }

    public function delete($id)
    {
        Import::findOrFail($id)->delete();
        session()->flash('message', 'Import deleted successfully.');
        $this->imports = Import::all();
    }

    public function render()
    {
        return view('livewire.form-component');
    }
}
