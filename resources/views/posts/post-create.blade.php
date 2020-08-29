@extends('layouts.app')
@section('content')
<!--------------------->

<!-- --- ----------------->
<div class="container">
	
<form action="{{route('storeimg')}}" method="post" enctype="multipart/form-data">
 @csrf
	<div class="row">
	 <div class="col-8 offset-2">
		<div class="form-group row">
      <label for="caption" class="col-md-4 col-form-label ">{{__('messages.caption')}}</label>
    
        <input id="caption" type="text" class="form-control" name="caption">
            @if($errors->has('caption'))
             {{$errors->get('caption')[0]}}
            @endif
    </div>
           

           <div class="row">
             <label for="image" class="col-md-4 col-form-label">{{__('messages.postimage')}}</label>
               <input type="file" class="form-control-file" id="image" name="image">
                 @if($errors->has('image'))
                    {{$errors->get('image')[0]}}
                 @endif
             </div>
			
      <div class="row pt-4">
				 <button class="btn btn-primary">{{__('messages.add post')}}</button>
		  </div>
		
     </div>
	  </div>
	 </form>
  </div>
@endsection
<!--


