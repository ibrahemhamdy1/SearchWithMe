<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'         => 'required|string|max:255',
            'user_phone'   => 'required|string|max:15',
            'user_city'    => 'required|string|max:15',            
            'email'        => 'required|string|email|max:255|unique:users',
            'password'     => 'required|string|min:1|confirmed',
            'image'        =>'required|image',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data['user_city'],$data['address']);
       $image =$data['image'];
        if(isset($image)){
            $image=$this->upload($image);
        }else{
            $image=public_path('/images/user/defulat.jpg');
        }
        return User::create([
            'name' => $data['name'],
            'user_phone' => $data['user_phone'],
            'user_city'  => $data['user_city'],
            'address'    => $data['address'],            
            'email'      => $data['email'],
            'password'   => bcrypt($data['password']),
            'image'      =>$image,
        ]);
    }



    public function upload($file){
        $extension =$file->getClientOriginalExtension();
        $sha1 =sha1($file->getClientOriginalName());
        $filename=date('Y-m-d-i-s')."_".$sha1.".".$extension;
        $path=public_path('/images/user/');
        $file->move($path,$filename);
        return  'images/user/'.$filename;
    }
}
