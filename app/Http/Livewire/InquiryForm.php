<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InquiryForm extends Component
{
    public $course;

    public function render()
    {
        return view('livewire.inquiry-form');
    }
}
