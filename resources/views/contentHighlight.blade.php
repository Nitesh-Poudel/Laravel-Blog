@extends('layouts.homeLayout')
@section('title')
  {{$content->title}}
@endsection

@section('style')
  bdfody{color:red}
  textarea{border-radius:8px;color:;border-color:gray;}
  
@endsection

@section('content')
  {{!!$content->passage!!}}
</br></br>
 <a href="#"><b>Author: {{$content->author_name}}</b></a>
@endsection

@section('extra')
   <form action="{{route('todo')}}" method="post">
    @csrf
    <div class="react">
      <button id="like" name="action" value="like">Like</button>
      <input type="hidden" name="blogid" value="{{$content->id}}">
      <label for="comment">
        <button id="comment"  name="action" value="comment">Comment</button>
      </label>
    </div>
    
     <textarea id="comment" name="comment" rows="4" cols="50"></textarea>

  </form>
  
@endsection

