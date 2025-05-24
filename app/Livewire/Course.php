<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course as CourseModel;
use Livewire\Attributes\Js;

class Course extends Component
{
    public $search = '';
    public $sort = true;
    public function delete(CourseModel $course)
    {
        $course->delete();
        return "Delete Course Was Successful.";
    }

    #[Js]
    public function resetData()
    {
        return <<<'JS'
        $wire.search = '';
        JS;
    }
    public function render()
    {
        $courses = CourseModel::where('name', 'LIKE', "%{$this->search}%")->orderBy('id', $this->sort ? 'asc' : 'desc')->get();
        // $this->js('alert("ok ok")');
        return view('livewire.course', compact('courses'));
    }
}
