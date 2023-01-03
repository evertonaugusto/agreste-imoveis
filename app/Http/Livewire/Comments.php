<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Comments extends Component
{
    public $comment;

    public function submit()
    {
        Comment::create([
            'text' => $this->comment,
            'user_id' => Auth::user()->id,
        ]);
    }

    public function getCommentsProperty()
    {
        return Comment::paginate(10);
    }

    public function render()
    {
        return view('livewire.comments', ['comments' => $this->comments]);
    }
}
