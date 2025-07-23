<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;
use App\Models\Feedback;

class KingTechLivewire extends Component
{

    public $faqs;
    public $feedbacks;

    public function mount(){
        $this->faqs = Faq::sorted()->where('category', 'kingtech')->get();
        $this->feedbacks = Feedback::where('category', 'kingtech')->get();
    }

    public function render()
    {
        return view('livewire.king-tech-livewire');
    }
}
