@extends('layouts.app')
@section('content')
<!---------------------------------------------- -->
<div class="container">
 
 @foreach($posts as $post)
 
 <div class="row py-2">
  
  <!-- Image Profile and User name -->
  <div class="col-6 offset-3">
    <img src="/storage/{{ $post->user->profile->image }}" class="py-2 rounded-circle w-100" style="max-width: 35px">
    
    <a style="color: #084C6A" href="{{url('profile/' . $post->user->id)}}">
        <span>{{$post->user->username}}</span>
    </a>
    
     <!------ Post Image -------->
     <a href="/p/{{$post->id}}">
        <img style="height: 495px" class="w-100" src="/storage/{{$post->image}}">
     </a>
  
  </div>  
    </div>
 
  <!-- ----/////---- -->
  
  <div class="row pt-2 pb-4">
    <div class="col-6 offset-3">
      <div>
   
    <p>
        <span class="font-weight-bold">
          <a style="color: #084C6A" href="{{url('profile/' . $post->user->id)}}">
              <span>{{$post->user->username}}</span>
          </a>
        </span>
        
        {{$post->caption}}
     </p>
    
    </div>
    
    </div>

</div>
@endforeach
</div>
@endsection



