<?php

namespace App\Livewire;

use App\Models\Faq;
use App\Models\Feedback;
use Livewire\Component;

class KingMediaLivewire extends Component
{

    public $faqs;
    public $feedbacks;

    public function mount(){
        $this->faqs = Faq::sorted()->where('category', 'kingmedia')->get();
        $this->feedbacks = Feedback::where('category', 'kingmedia')->get();
    }

    public function render()
    {
        return view('livewire.king-media-livewire');
    }
}
