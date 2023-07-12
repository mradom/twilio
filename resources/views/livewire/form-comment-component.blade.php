<div>
    <div class="row my-2">
        <div class="col">
            <label class="form-label">User:</label>
            <input class="form-control" type="text" wire:model="user" name="user">
            @error('user') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row my-2">
        <div class="col">
            <label class="form-label">Comment:</label>
            <textarea class="form-control" name="comment" row="100" wire:model="comment" placeholder="Write your comment here..."></textarea>
            @error('comment') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row my-2">
        <div class="col">
            <button class="btn btn-primary" wire:click="comment">Send comment!</button>
        </div>
    </div>

</div>
