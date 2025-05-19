<?php

namespace App\Livewire;

use Livewire\Component;

class ShowCourse extends Component
{
    public $course;
    public function mount($course)
    {
        $this->course = $course;
    }
    public function render()
    {
        return view('livewire.show-course');
    }
}
