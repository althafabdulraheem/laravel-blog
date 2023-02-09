@extends('layouts.adminlayout')
@section('content')
<h1>Comments</h1>
<hr>
<ul>
  @foreach($datas as $data)
  <li>{{$data->comments}}</li>
    @foreach($data->getReply as $reply)
      <li style="list-style-type:none;">
        <ul>
          <li>{{$reply->comment}}</li>
        </ul>
      </li>
    @endforeach
  @endforeach
</ul>
@endsection