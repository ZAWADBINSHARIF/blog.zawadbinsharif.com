<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SingleBlog extends Component
{

    public Post $post;
    public User $author;

    public function mount()
    {
        $id = Request()->route("slug");

        if ($id) {
            $this->post = Post::find($id);
            $this->author = $this->post->user;
        }
    }

    public function render()
    {
        return view('livewire.single-blog');
    }
}
