<?php

namespace App\Livewire\Dashboard;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{

    use WithFileUploads;

    // #[Rule('required|min:3')]
    public $title;

    // #[Rule('nullable|max:1024|image|sometimes')]
    public $image;

    // #[Rule('required|min:10')]
    public $description;


    public function submit()
    {

        $validation = $this->validate([
            'title' => ["required", 'min:3'],
            'description' => ["required", "min:10"],
            'image' => ["nullable", "image", "max:1024", "sometimes"]
        ]);


        if ($this->image && $validation['image']) {
            $validation['image'] = $this->image->store("uploads/post", "public");
            dump($validation['image']);
        }

        Post::create([
            ...$validation,
            'user_id' => Auth::id()
        ]);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.dashboard.create-post');
    }
}
