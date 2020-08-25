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
    		<div class="font-weight-bold">
    			<!-- user name -->
          <a style="color: #084C6A" href="/profile/{{$post->user->id}}">
    			 <span>{{$post->user->username}}</span> 
          </a>
    			<span style="font-size: 23px"> . </span>
    		
    

  @can('update', $post->user->profile)
   <div class="dropdown float-right">
    <button style="height: 22px;width: 40px" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   </button>
  
  <!-- Delete button -->
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="editcaption/{{ $post->id }}">Edit</a>
    <form action="{{$post->id}}/delete" method="post">
      @method('delete') @csrf
        <button class="dropdown-item">Delete</button>
    </form>
  
  </div>

</div>
@endcan
<!------------->

    	</div>
    </div>
  </div>
    
    <hr>

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
</div>
@endsection
  

