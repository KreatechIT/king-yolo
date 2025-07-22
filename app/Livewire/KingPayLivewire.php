<?php

namespace App\Livewire;

use App\Models\Faq;
use App\Models\Feedback;
use Livewire\Component;

class KingPayLivewire extends Component
{
    public $faqs;
    public $feedbacks;

    public function mount(){
        $this->faqs = Faq::sorted()->where('category', 'kingpay')->get();
        $this->feedbacks = Feedback::where('category', 'kingpay')->get();
    }

    public function render()
    {
        return view('livewire.king-pay-livewire');
    }
}
