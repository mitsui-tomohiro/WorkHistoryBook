<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required|integer|min:1|max:2')]
    public $gender = 1;

    #[Validate('required|integer|min:18|max:70')]
    public $age = 20;

    #[Validate('required')]
    public $nearestStation = '';
}
