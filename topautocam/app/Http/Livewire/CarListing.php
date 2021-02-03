<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Util\UTIL;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class CarListing extends Component
{
    use WithPagination;

    public $makes;
    public $make1;

    public $model;
    public $color;
    public $drive;
    public $fuel;

    public $sort;
    public $order;
    
    public function mount() {
        $this->sort = 'title';
        $this->order = UTIL::ASC;
        $this->makes = UTIL::MAKE;
        $this->make1 = 'Toyota';
    }

    public function render()
    {
        Log::info($this->make1);
        return view('livewire.car-listing', [
            'total' => Car::count(),
            'cars' => Car::search($this->sort, $this->order, 
            $this->make1, $this->model, $this->color, $this->drive, $this->fuel)
        ]);
    }

}
