<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class FormCommentComponent extends Component
{

    /**
     * $post_id: Stores the ID of the post to which the comment belongs.
     * $parent_id: Stores the ID of the parent comment if the comment is a reply.
     * $user: Stores the name of the user submitting the comment.
     * $comment: Stores the content of the comment.
     */
    public $post_id;
    public $parent_id;
    public $user;
    public $comment;

    /**
     * $rules: Contains the validation rules for the user and comment fields.
     */
    protected $rules = [
        'user' => 'required|min:3|max:50',
        'comment' => 'required|max:600',
    ];

    /**
     * This method is executed when the component is initialized and receives a $post
     * parameter, which is used to assign the post ID to the $post_id property.
     */
    public function mount($post)
    {
        $this->post_id = $post;
    }

    /**
     * This method is responsible for rendering the view of the livewire.form-comment-component component.
     */
    public function render()
    {
        return view('livewire.form-comment-component');
    }

    /**
     * This method is executed when the form for submitting a comment is submitted.
     * It validates the user and comment fields using the defined validation rules.
     * If the validation passes, a new comment is created using the Comment::create() method,
     * with the relevant properties. Then, the initialize() method is called to reset the input fields,
     * and the CommentAdded event is emitted.
     */
    public function comment()
    {
        $this->validate();
        Comment::create([
            'post_id' => $this->post_id,
            'parent_id' => $this->parent_id,
            'user' => $this->user,
            'comment' => $this->comment,
        ]);

        $this->initialize();
        $this->emit('CommentAdded');
    }

    /**
     * This method is responsible for resetting the input fields ($user and $comment) to their initial values, in this case, empty strings.
     */
    public function initialize()
    {
        $this->user = "";
        $this->comment = "";
    }
}
