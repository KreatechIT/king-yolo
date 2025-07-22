<?php

namespace App\Livewire;

use App\Models\CompanyTimeline;
use Livewire\Component;

class AboutLivewire extends Component
{

    public $timelines;

    public function mount(){
        $this->timelines = CompanyTimeline::all();
    }

    public function render()
    {
        return view('livewire.about-livewire');
    }
}
