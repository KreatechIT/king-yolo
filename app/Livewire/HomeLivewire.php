<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Feedback;
class HomeLivewire extends Component
{
    public $feedbacks;

    public function mount(){
        $this->feedbacks = Feedback::where('category', 'general')->get();
    }

    public function render()
    {
        return view('livewire.home-livewire');
    }
}
