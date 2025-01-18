<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ProfilePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProfilePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ProfilePost::class)
            ->assertStatus(200);
    }
}
