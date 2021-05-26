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

    public $sort;
    public $order;

    public $search;

    public $makes;
    public $make1;

    public $models;
    public $model1;

    public $colors;
    public $color1;
  
    public $drives;
    public $drive1;

    public $fuels;
    public $fuel1;
    
    public function mount() {
        $this->sort = 'title';
        $this->order = UTIL::ASC;
        $this->makes = UTIL::MAKE;
        $this->models = UTIL::MODEL;
        $this->colors = UTIL::COLOR;
        $this->drives = UTIL::DRIVE;
        $this->fuels = UTIL::FUEL;
    }   

    public function render()
    {
        $cars = Car::search($this->search, $this->sort, $this->order, 
        $this->make1, $this->model1, $this->color1, $this->drive1, $this->fuel1);
        return view('livewire.car-listing', [
            'total' => sizeof($cars),
            'cars' => $cars
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function paginationView()
    {
        return 'custom-pagination-links';
    }

}
