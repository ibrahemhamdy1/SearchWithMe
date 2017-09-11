<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use  App\Post;
use  App\Categorie;

class UserController extends Controller
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
        $user= \Auth::user();
        $id=$user['id'];
        $posts=Post::where('user_id',$id)->get();
        
                    
       
       
        return view('User/UserProfile',compact('user','posts'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user  =User::findOrFail($id);
        $posts  =Post::where('user_id',$id)->get();
        //dd($posts);
        return  view('User/User',compact('user','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats=Categorie::all();
        $user=User::findOrFail($id);
        $user_id=\Auth::user()->id;
        if($user['id']==$user_id){   
        return  view('User/edit-user',compact('user','cats'));
        } 
        else{
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
       $input['password'] =bcrypt($input['password']);
        if(isset($input['image']))
        {
                $input['image']=$this->upload($input['image']);
        }
        User::findOrFail($id)->update($input);
        return redirect ()->back();
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
