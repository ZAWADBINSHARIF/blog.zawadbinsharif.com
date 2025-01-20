<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class BlogItem extends Component
{

    public Post $post;

    public function mount($post = null)
    {
        $this->post;
    }

    public function render()
    {
        return view('livewire.blog-item');
    }
}
