<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $description;
    // public function mount($title, $description)
    // {
    //     $this->title = $title;
    //     $this->description = $description;
    // }

    public function handleSubmit()
    {
        dd($this->title, $this->description);
    }
    public function doSumthing()
    {
        dd('hi, hi, hi');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
