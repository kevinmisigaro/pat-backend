<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request){
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all details');
            return back();
        }

        if($request->hasFile('abstract')){
            $img_ext = $request->file('abstract')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $imagePath = $request->file('abstract')->move(public_path('comments'), $filename);//image save public folder

            Comment::create([
                'document_id' => $request->document_id, 
                'response' => $request->comment, 
                'response_document' => $filename, 
                'commenter_id' => Auth::id()
            ]);

            session()->flash('success','Comment uploaded');
            return back();
        }

        Comment::create([
            'document_id' => $request->document_id, 
            'response' => $request->comment, 
            'commenter_id' => Auth::id()
        ]);

        session()->flash('success','Comment uploaded');
        return back();

    }   
}
