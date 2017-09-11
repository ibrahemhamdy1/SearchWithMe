<?php

namespace App\Http\Controllers;

use App\Post;
use App\Categorie;
use App\Comment;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     
     {   $cats=Categorie::all();
         $this->middleware('auth');
         return view('home',compact('cats'));
     }
    public function index()
    {
        $cats=Categorie::all();
        return  view('Post/NewPost',compact('cats'));
        
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cats=Categorie::all();
        $image =$request['image'];
        
        if(isset($image)){
            $image=$this->upload($image);
            
        }else{
            $image=public_path('/images/user/defulat.jpg');
        }
        //dd($request['Categorie']);
        $request['user_id']= \Auth::user()->id;
         Post::create([
            'name'                    => $request['name'],
            'age'                     => $request['age'],
            'description'             => $request['description'],
            'adders'                  => $request['adders'],            
            'country'                 => $request['country'],
            'gnader'                  => $request['gnader'],
            'lost_relationship'       => $request['lost_relationship'],
            'image'                    => $image,
            'tags'                    => $request['tags'],            
            'cat_id'                  =>$request['Categorie'],
            'user_id'                 =>$request['user_id'],
        ]);
        return back();
    }
    public function upload($file){
        $extension =$file->getClientOriginalExtension();
        $sha1 =sha1($file->getClientOriginalName());
        $filename=date('Y-m-d-i-s')."_".$sha1.".".$extension;
        $path=public_path('/images/user/');
        $file->move($path,$filename);
        return  'images/user/'.$filename;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post,$id)
    {
        $cats=Categorie::all();
        $post=Post::findOrFail($id);
        $comment=Comment::where('post_id',$id)->get();
        
        
       
        return  view('Post/post',compact('post','cats','comment'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$id)
    {
        $post=Post::findOrFail($id);
        return  view('Post/edit-post',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input=$request->all();
        if(isset($input['image'])){
                $input['image']=$this->upload($input['image']);
        
        }
        Post::findOrFail($id)->update($input);
        return redirect ()->back();
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
