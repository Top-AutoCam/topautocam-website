<?php

namespace App\Http\Livewire;

use App\Models\Part;
use App\Util\UTIL;
use Livewire\Component;
use Livewire\WithPagination;

class PartListing extends Component
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
        $this->makes = UTIL::MAKE;
        $this->models = UTIL::MODEL;
        $this->colors = UTIL::COLOR;
    }   

    public function render()
    {
        $parts = Part::search($this->search, $this->sort, $this->order, 
        $this->make1, $this->model1, $this->color1);
        return view('livewire.part-listing', [
            'total' => sizeof($parts),
            'parts' => $parts
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
