<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCourse extends Component
{

    // #[Validate('required')]
    // #[Validate('required', onUpdate: false)]
    // #[Validate('required', as: 'نام')]
    // #[Validate('required', message: 'پر کن دیگه بابا')]
    #[Validate('min:3', translate: false)]
    public $name = '';
    #[Validate('required')]
    public $price = '';

    public function save()
    {
        $this->validate();
        $inputs = ['name' => $this->name, 'price' => $this->price];
        // $validated = $this->validate([
        //     'name' => 'required',
        //     'price' => 'required'
        // ]);
        Course::create($inputs);
        return to_route('courses')->with('success', 'دوره با موفقیت ساخته شد');
    }
    public function render()
    {
        return view('livewire.create-course');
    }
}
