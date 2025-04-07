<?php

namespace App\Livewire;

use App\Models\Servicemodel;
use Livewire\Attributes\On;
use Livewire\Component;

class ServiceCategory extends Component
{
    public $service;
    public $defaultService;
    #[On('loadService')]
    public function fetchServiceCategory($id)
    {

        $this->service = Servicemodel::find($id);
    }

    public function mount()
    {
        $this->defaultService = Servicemodel::find(1);
    }

    public function render()
    {
        return view('livewire.service-category');
    }
}
