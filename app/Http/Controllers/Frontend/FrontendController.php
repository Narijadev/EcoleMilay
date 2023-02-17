<?php
 
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Models\Article;
 
class FrontendController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
      /*  return view('user.profile', [
            'user' => Article::findOrFail($id)
        ]);*/
    }
    public function register()
    {
        return view('profil');
    }
    
}