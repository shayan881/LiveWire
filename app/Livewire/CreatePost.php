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
        usleep(1000000);
        // dd($this->title, $this->description);
    }
    public function doSumthing($e)
    {
        // dd('hi, hi, hi');
        dd($e);
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
