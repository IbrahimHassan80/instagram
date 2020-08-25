<?php

namespace App\Http\Controllers\posts;

use App\Post;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\postvalid;

class postscontroller extends Controller
{
   	
   	public function __construct(){
   		$this->middleware('auth');
   	}
   	

   	/// main page to show follower posts //////
    
    public function index(){
    	
    	$users = auth()->user()->following()->pluck('profiles.user_id');
    	
    	$posts = post::whereIn('user_id', $users)->latest()->get();

    	return view('posts.index', compact('posts'));
    }

    // ------------------------ //
    
    public function create(){
    	
    	return view('posts.post-create');
    }
    // ------------------------ //
	
	
	public function store(postvalid $request){
	//   validate in request file  //
	
	
	$imagepath = request('image')->store('uploads','public');
	$imagesize = Image::make(public_path("storage/{$imagepath}"))->fit(1200, 1200);
	$imagesize->save();
	
	$new = new post;
	$new->caption = $request->caption;
	$new->image = $imagepath;
	$new->user_id = auth()->user()->id;
	$new->save();

	/* different way to store 
	auth()->user()->posts()->create([
	'caption' => $data['caption'],
	'image' => $imagepath
	]);
	*/
	
	return redirect('profile/' . auth()->user()->id);
	

}
 // show the one post //
public function show(\App\post $post){

 return view('posts.showpost', compact('post'));
	 
}


//--------- follow button ---------//

public function read(User $user){
	$this->middleware('auth');
	
	return auth()->user()->following()->toggle($user->profile);

}
///----------------------------------///


// --- edit image caption  ----- //
public function editcapth($id){
	$post = Post::findorfail($id);
	
	return view('profile.edit-caption', compact('post'));
}
// ----------------- /


public function saveedit(Request $request, $id){
	
	$this->validate($request, [
		'caption'=>''
	]);
	$post = Post::find($id);
	$post->caption = $request->caption; // $request->get('caption') //
	$post->save();
	return redirect ('p/' . $id);
}

// -- delete //
public function delete($id){
	
	post::destroy($id);
	
	return redirect('profile/' . auth()->user()->id);
}



}//---end of class---//
