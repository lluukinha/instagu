@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($posts as $post)
   <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" title="{{$post->caption}}" class="img-fluid">
            </a>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 pt-1">
            <div>
                <p><strong>
                    <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                   </strong> {{ $post->caption}}
                 </p>
            </div>
         </div>
        </div>
   @endforeach

   <div class="row">
       <div class="col-12 d-flex justify-content-center">
           {{ $posts->links() }}
       </div>
   </div>
</div>
@endsection