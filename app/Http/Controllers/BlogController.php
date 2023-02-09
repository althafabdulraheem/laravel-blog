<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;
class BlogController extends Controller
{
   public function index()
   {
    $datas=Blog::select('blogs.id','blogs.title','blogs.date','blogs.description','blogs.image','users.name as author_name')
    ->leftJoin('users','users.id','=','blogs.user_id')
    ->get();
    return view('admin.blog.index',['datas'=>$datas]);
   }
   public function create()
   {
        return view('admin.blog.create');
   }
   public function store(Request $request)
   {
    $blog=new Blog();
    $blog->title=$request->title;
    $image=$request->file('img');
    $file_name=time().str_replace(' ','',$image->getClientOriginalName());
    $path=public_path().'/assets/images';
    $image->move($path,$file_name);
    $blog->description=$request->description;
    $blog->date=date('d-M-Y');
    $blog->image=$file_name;
    $blog->user_id=Auth::user()->id;
    $blog->save();  
    return redirect('blog-create');  
   }
}
