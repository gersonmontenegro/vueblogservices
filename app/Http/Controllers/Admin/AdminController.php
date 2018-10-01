<?php

namespace App\Http\Controllers\Admin;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getData(){
        $posts = Posts::all();
        return json_encode($posts);
    }

    public function addData(Request $request){
	    Posts::create($request->all());
	    return json_encode(Posts::all());
    }

    public function editData(Request $request){
        Posts::where('_id', '=', $request->_id)
                ->update([
                    'text' => $request->text,
                    'title' => $request->title,
                ]);
        return json_encode(Posts::all());
    }

    public function removeData(Request $request){
        Posts::where('_id', '=', $request->_id)
                ->delete();
        return json_encode(Posts::all());
    }
}
