<?php

namespace App\Http\Livewire;

use App\Models\Motorbike;
use App\Util\UTIL;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class MotorbikeListing extends Component
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
    
    public function mount() {
        $this->sort = 'title';
        $this->order = UTIL::ASC;
        $this->makes = UTIL::MAKE_BIKE;
        $this->models = UTIL::MODEL_BIKE;
        $this->colors = UTIL::COLOR;
    }   

    public function render()
    {
        $motorbikes = Motorbike::search($this->search, $this->sort, $this->order, 
        $this->make1, $this->model1, $this->color1);
        return view('livewire.motorbike-listing', [
            'total' => sizeof($motorbikes),
            'motorbikes' => $motorbikes
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
