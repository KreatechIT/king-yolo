<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

class ContactLivewire extends Component
{

    public $name, $email, $message;
    public $g_recaptcha_response;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
        'g_recaptcha_response' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . env('NOCAPTCHA_SECRET') . '&response=' . $this->g_recaptcha_response);
        $responseKeys = json_decode($response, true);

        if (!($responseKeys["success"] ?? false)) {
            $this->addError('g_recaptcha_response', 'reCAPTCHA verification failed.');
            return;
        }

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        session()->flash('success', 'Thank you! Your message has been sent.');

        $this->reset('name', 'email', 'message', 'g_recaptcha_response');
    }

    public function render()
    {
        return view('livewire.contact-livewire');
    }
}
