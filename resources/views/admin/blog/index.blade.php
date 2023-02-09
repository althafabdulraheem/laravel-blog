@extends('layouts.adminlayout')
@section('content')

<div class="col text-md-end">
			<a class="btn btn-primary" href="{{url('blog-create')}}"><i class="fa fa-plus me-2"></i>Add Blog</a>	
</div>
<br>
<div class="header">
  <h2>Blogs</h2>
</div>
@foreach($datas as $data)	
<div class="row">	
    <div class="card">
      <h2>{{$data->title}},<span id="auth_name" style="font-size:15px;">{{$data->author_name}}<span></h2>
      <h5>{{$data->date}}</h5>
      <div class="image" style="height:200px;"><img src="{{asset('assets/images')}}/{{$data->image}}" width="50%" height="150px" alt=""></div>
      <p>{{$data->description}}</p>
      <button class="btn btn-success load-comment" data-id="{{$data->id}}">Load Comments</button>
      <div id="{{$data->id}}">

      </div>
      <hr>
	  <label for="">Add Comment</label>
     <form action="{{url('submit-comment')}}" method="get">
     <textarea name="comment" class="form-control" id="" cols="30" rows="3" required></textarea>
     <input type="hidden" name="blog_id" value="{{$data->id}}" >
     <br>
     <button class="btn btn-primary">submit</button>
     </form> 
    </div>   
      
</div> 
@endforeach 
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
  $(document).on('click','.load-comment',function()
  {
    let id=$(this).attr('data-id');
    $.ajax({
      url:"{{url('fetch-comments')}}",
      type:"GET",
      data:{"id":id},
      success:function(data,status)
      {
        $("#"+id).html(data);
      }
    })
  });

  $(document).on('click','.btn-reply',function()
  {
     let id=$(this).val();
     let text='<form action="store-reply" method="get"><input type="text" name="reply" required/><input type="hidden" name="id" value='+id+' /><button>submit</button></form>';
     $("#rep-"+id).append(text);
  });
});
</script>
@endsection