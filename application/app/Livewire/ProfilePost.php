<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\ProfileForm;

class ProfilePost extends Component
{
    public ProfileForm $form;

    public function save()
    {
        $this->validate();
        return $this->redirect('/profile');
    }

    public function render()
    {
        return view('livewire.profile-post')
            ->title('プロフィール入力|業務経歴書作成ツール')
            ->layout('components.layouts.app');
    }
}
