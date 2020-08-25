@extends('layouts.app')
@section('content')
<!--------------------->
<div class="container">

<form action='{{url("profile/{$user->id}")}}' method="Post" enctype="multipart/form-data">
     @csrf
      @method('PATCH')
        <div class="row">
        <h2>Edit profile</h1>
        <div class="col-8 offset-2">
            
            <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label ">{{ __('Title') }}</label>

                           
                                <input id="title" type="text" class="form-control" name="title" value="{{$user->profile->title}}">
                                @if($errors->has('title'))
                                 {{$errors->get('title')[0]}}
                                @endif
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label ">{{ __('description') }}</label>

                           
                                <input id="description" type="text" class="form-control" name="description" value="{{$user->profile->description}}">
                                @if($errors->has('description'))
                                 {{$errors->get('description')[0]}}
                                @endif
                        </div>
                         <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label ">{{ __('URL') }}</label>

                           
                       <input id="url" type="text" class="form-control" name="url" value="{{$user->profile->url}}">
                         @if($errors->has('url'))
                          {{$errors->get('url')[0]}}
                         @endif
                        </div>

           <div class="row">
           <label for="image" class="col-md-4 col-form-label"><h4>Profile Image</h2></label>
             <input type="file" class="form-control-file" id="image" name="image">
              @if($errors->has('image'))
                 {{$errors->get('image')[0]}}
              @endif
             </div>
            

            <div class="row pt-4">
                <button class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
 </form>


</div>
@endsection
<!--
