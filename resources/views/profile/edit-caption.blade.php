
@extends('layouts.app')
@section('content')
<!------------------------------- -->
<div class="container">
 <div class="row">
  
  <!-- Image Profile -->
  <div class="col-6">
    <img style="height: 495px" class="w-100" src="/storage/{{$post->image}}">
  </div>
  <!-- ----/////---- -->

    <div class="col-4">
     <div>
    
       <div class="d-flex align-items-center">
    	 <!-- caption Image -->
    	  <div class="pr-3">
		   <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 45px">
    	</div>
    	<!-- --///////---- -->
    	
    	<div>
    	  <!-- user name -->
          <div class="font-weight-bold">
    		<a style="color: #084C6A" href="/profile/{{$post->user->id}}">
    		 <span>{{$post->user->username}}</span> 
            </a>
    		  <span style="font-size: 23px"> . </span>
 
<!------------->

    		</div>
    	</div>
    </div>
    
    <hr>

    
    	<span class="font-weight-bold">
    	  <form method="Post" action="{{url('saveedit/' . $post->id)}}"> 
    		 @csrf
    	    	<input type="" name="caption" value="{{$post->caption}}"> 
    		   	 @if($errors->has('caption'))
                    {{$errors->get('caption')[0]}}
                 @endif
    		   	<button>Edit</button>
    	  </form>
    	</span>
    
    
   </div>
  </div>
 </div>
</div>
@endsection
  

