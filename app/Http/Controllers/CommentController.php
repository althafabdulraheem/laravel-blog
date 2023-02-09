<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Reply;
use Auth;
class CommentController extends Controller
{
    public function index()
    {
        $comments=Comment::with(['getUser','getReply'])->get();
        return view('admin.comments.index',['datas'=>$comments]);
    } 

    public function store_comment(Request $request)
    {
        $comment=new Comment();
        $comment->comments=$request->comment;
        $comment->blog_id=$request->blog_id;
        $comment->user_id=Auth::user()->id;
        $comment->save();
        return redirect('blog');
    }
    public function fetch(Request $request)
    {
        $id=$request->id;
        $comments=Comment::with(['getUser','getReply'])->where('blog_id',$id)->get();
    //  dd($comment);

        foreach($comments as $comment)
        {
            $author=$comment->getUser->name;
            echo "<li id='rep-$comment->id'>$comment->comments,$author<button value=$comment->id class='btn btn-reply' style=color:blue;>Reply</button></li>
            <li style='list-style-type:none;'><ul>";
              foreach($comment->getReply as $reply)  
                {
                    echo"<li>$reply->comment,$reply->user_name</li>";
                }       
                  
           echo"</ul></li>";
        }
    }
    
    public function store_reply(Request $request)
    {
        $reply=new Reply();
        $reply->comment=$request->reply;
        $reply->comment_id=$request->id;
        $reply->user_name=Auth::user()->name;
        $reply->save();
        return redirect('blog');
    }
    
}
