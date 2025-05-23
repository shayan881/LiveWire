<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class ShowCourse extends Component
{
    public $course;

    public function mount(Course $course)
    {
        $this->course = $course;
    }
    public function render()
    {
        return view('livewire.show-course');
    }
}
