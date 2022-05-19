<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request)
    {
        $this->commentValidation($request);
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'comment' => $request->comment,
            'post_id' => $request->post_id,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil dikirim');
    }
    
    private function commentValidation($request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'website' => 'required|url',
            'comment' => 'required|string',
            'post_id' => 'required|exists   :posts,id',
        ]);
    }
}
