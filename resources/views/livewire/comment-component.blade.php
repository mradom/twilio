<div>
    <h3>Coments</h3>
    @foreach ($comments as $comment)
        <div class="row my-2">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">{{$comment->user}}</h5>
                    <div class="card-body"> Comment:
                        {{$comment->comment}}
                    </div>
                    <div class="card-footer">
                        <a class="card-link icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" wire:click="reply({{$comment->id}})" href="#">
                            Reply
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
