<?php

namespace Tests\Feature\Livewire\Category;

use App\Livewire\Category\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Create::class)
            ->assertStatus(200);
    }
}
