<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;

class ReviewController extends Controller
{
    //
    
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'DESC')->get();
    	return view('index', compact('reviews'));
    }
    
    public function create()
    {
        return view('review');
    }
    
    public function store(Request $request)
    {
        $post = $request->all();
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'impression' => 'required',
        ]);
        $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'content' => $post['content'], 'impression' => $post['impression']];
        
        Review::insert($data);
        
        return redirect('/')->with('flash_message', '投稿が完了しました');
    }
}
