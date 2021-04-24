<?php

namespace App\Http\Livewire;

use App\Mail\NotifyMailable;
use App\Mail\ThankYouMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $email;
    public $userMessage;
    public $successMessage;

    protected $rules = [
        'email' => 'required|email',
        'userMessage' => 'required|min:32',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $this->validate();

        $contact['email'] = $this->email;
        $contact['userMessage'] = $this->userMessage;

        $to = config("MAIL_FROM_ADDRESS");
        if ($to == null) {
            $to = "webmaster@topautocam.com";
        }

        Mail::to($contact['email'])->send(
            new ThankYouMailable($contact)
        );

        $admin = config("MAIL_ADMIN");
        if ($admin == null) {
            $admin = "admin@topautocam.com";
        }

        Mail::to($admin)->send(
            new NotifyMailable($contact)
        );

        $this->resetForm();

        $this->successMessage = "your message is sent";
    }

    public function resetForm()
    {
        $this->email = '';
        $this->userMessage = '';
    }
}
