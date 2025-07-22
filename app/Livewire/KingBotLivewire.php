<?php

namespace App\Livewire;

use App\Models\Faq;
use App\Models\Feedback;
use Livewire\Component;

class KingBotLivewire extends Component
{
    public $faqs;
    public $feedbacks;

    public function mount(){
        $this->faqs = Faq::sorted()->where('category', 'kingbot')->get();
        $this->feedbacks = Feedback::where('category', 'kingbot')->get();
    }

    public function render()
    {
        return view('livewire.king-bot-livewire');
    }
}
