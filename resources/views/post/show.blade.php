@extends('layouts.app')

@section('styles')
    @livewireStyles
@endsection

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        <p>{{$post->content}}</p>
    </div>
    <div>Created at: {{$post->created_at->format('Y-m-d');}}</div>
    <hr>
    <div class="">
    <h3>Post your comment</h3>
    <div class="container text-left">
        <div class="row">
            @livewire('form-comment-component', ['post' => $post->id, 'parent' => 0])
        </div>
    </div>
    </div>

    @livewire('comment-component', ['post' => $post->id])
    @livewireScripts

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header box-shadow-1" style="text-shadow: 1px 1px 2px #7DA0B1">
                  <h5 class="modal-title" id="formModalLabel"> dfsdfs</h5>
                  <button type="button" class="close" style="background-color: #c9c9c9" aria-label="CERRAR">
                      <span aria-hidden="true"><strong>&times;</strong></span>
                  </button>
              </div>
         <div class="modal-body">
            @livewire('form-comment-component', ['post' => $post->id, 'parent' => 0])
         </div>
       </div>
      </div>
    </div>
@endsection


@section('custom-script')
    window.addEventListener('openFormModal', event => {
        console.log("Open modal");
        $("#formModal").modal('show');
    })

    window.addEventListener('closeFormModal', event => {
        console.log("hide modal");
        $("#formModal").modal('hide');
    })
@endsection
