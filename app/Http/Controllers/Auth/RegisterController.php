<?php
 
 namespace App\Http\Controllers\Auth;

 use App\Http\Controllers\Controller;
 
class RegisterController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
    public function register()
    {
        return view('register');
    }
    
}