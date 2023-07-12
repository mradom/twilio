<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class CommentComponent extends Component
{

    /**
     * $post: Stores the instance of the Post model that will be used to display the comments.
     * $comment: Stores the content of the new comment to be posted.
     * $reply: Stores the ID of the comment being replied to. It is initialized to 0.
     * $selectedItem: Stores the ID of the selected item for reply. Used in conjunction with
     **/
    public $post;
    public $comment;
    public $reply;
    public $selectedItem;


    /**
     * $listeners: Defines the CommentAdded listener that invokes the refresh() method when the event is fired.
     */
    protected $listeners = ['CommentAdded' => 'refresh'];

    /**
     * This method is executed when the component is initialized and receives a $post parameter,
     * which is used to find and assign the corresponding instance of the Post model to the $post property.
     */
    public function mount($post)
    {
        $this->post = Post::find($post);
        $this->reply = 0;
    }

    /**
     * This method is responsible for rendering the view of the livewire.comment-component
     * component and passes the comments associated with the post through the $comments variable.
     */
    public function render()
    {
        return view('livewire.comment-component', ['comments' => $this->post->comments]);
    }

    /**
     * This method is called when the CommentAdded event is fired. In the provided code,
     * it simply returns true. You may need to implement additional logic in this method depending on your requirements.
     */
    public function refresh()
    {
        return true;
    }

    /**
     * This method is executed when the reply button of a comment is clicked. It sets the value of
     * $selectedItem to the ID of the comment being replied to and emits a selectedItem event with
     * the value of $selectedItem. This is used to load the corresponding model in the form component.
     * Finally, a openFormModal browser event is dispatched to open the form modal.
     */
    public function reply($modelId)
    {
        $this->selectedItem = $modelId;
        $this->emit('selectedItem', $this->selectedItem);  //emit to the form component to load the model
        $this->dispatchBrowserEvent('openFormModal');
    }

}
