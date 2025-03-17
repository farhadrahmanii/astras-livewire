<?php

namespace App\Http\Controllers;

use App\Livewire\TrainStation\Create;
use Illuminate\Http\Request;

class KhatEstashanController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('livewire.train-station.create');
    }

    public function store(Request $request){

    }

    public function show($id){

    }


}
