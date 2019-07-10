@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-8">
       <img src="/storage/{{ $post->image }}" title="{{$post->caption}}" class="img-fluid">
       </div>
       <div class="col-4">
           <div>
               <div class="d-flex align-items-center">
                   <div class="pr-3">
                    <a href="/profile/{{ $post->user->id }}" target="_self">
                        <img src="{{ $post->user->profile->profileImage() }}" 
                             class="rounded-circle" style="height:30px;" >
                    </a>
                    </div>
                   <div class="font-weight-bold">
                       <a class="text-dark pr-3" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                       <a href="#">Follow</a>
                    </div>
               </div>
               <hr>
               <p><strong>
                   <a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                  </strong> {{ $post->caption}}
                </p>
           </div>

       </div>
   </div>
</div>
@endsection