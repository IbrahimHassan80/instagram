
@extends('layouts.app')
@section('content')
<!---------------------->
<div class="container">
    <div class="row">
        <!-- Image Profile -->
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{$user->profile->profileimage()}}">
        </div>
        <!-- ------------- -->
 
 <div class="col-9">
     <div class="d-flex justify-content-between align-items-baseline">
        
        <div class="d-flex align-items-center pb-2">
            <div class="h4">{{$user->username}}</div>
        @can('show', $user->profile)
           <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
        @endcan
        </div>

        @can('update', $user->profile)
          <a href="{{url('/p/create')}}">add new post</a> 
        @endcan
       
     </div>
     
     @can('update', $user->profile)
      <a href="{{url('profile/' . $user->id . '/edit')}}">Edit profile</a>
     @endcan
     
 <div class="d-flex">
  <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
    <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
      <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
 </div>
     
     <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
     <div>{{$user->profile->description }}</div>
    
    <div>
      <a target="_blank" href="{{$user->profile->url }}">{{$user->profile->url }}</a>
    </div>
  </div>       
</div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
         <div class="col-4 pb-4">
            <a href="{{url('/p/' . $post->id )}}">
                <img id="imgg" class="w-100" src="/storage/{{$post->image}}">
            </a>
        </div>
        @endforeach
    </div>


</div>
@endsection
<!--  

