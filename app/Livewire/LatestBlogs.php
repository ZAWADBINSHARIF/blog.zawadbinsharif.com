<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LatestBlogs extends Component
{

    public $posts;

    public function mount()
    {
        $this->posts = Post::latest()->take(6)->get();
    }

    public function render()
    {
        return view('livewire.latest-blogs');
    }
}
