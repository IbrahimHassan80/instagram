@extends('layouts.app')
@section('content')
<!--------------------->

<!-- --- ----------------->
<div class="container">
	
<form action="/p" method="post" enctype="multipart/form-data">
 @csrf
	<div class="row">
	 <div class="col-8 offset-2">
		<div class="form-group row">
      <label for="caption" class="col-md-4 col-form-label ">{{ __('Post Caption') }}</label>
    
        <input id="caption" type="text" class="form-control" name="caption">
            @if($errors->has('caption'))
             {{$errors->get('caption')[0]}}
            @endif
    </div>
           

           <div class="row">
             <label for="image" class="col-md-4 col-form-label">postimage</label>
               <input type="file" class="form-control-file" id="image" name="image">
                 @if($errors->has('image'))
                    {{$errors->get('image')[0]}}
                 @endif
             </div>
			
      <div class="row pt-4">
				 <button class="btn btn-primary">Add new Post</button>
		  </div>
		
     </div>
	  </div>
	 </form>
  </div>
@endsection
<!--


