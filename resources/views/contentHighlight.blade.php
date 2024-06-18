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
   <form action="{{route('reaction')}}" method="post">
    @csrf
    <div class="react">

      @if(!$Ilike)
      <button id="like" name="action" value="like">Like</button>
      @else
      <button id="unlike" name="action" value="unlike">Unike</button>
      @endif

      <input type="hidden" name="blog_id" value="{{$content->id}}">
      <label for="comment">
        <button id="comment"  name="action" value="comment">Comment</button>
      </label>
    </div>
    
     <textarea id="comment" name="comment" rows="3" cols="150"></textarea>

  </form>
  <div class="errormsg">
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
     </div>
<br><br><br>
  <div class="showComments">
  @if($comments)
  <h2>Comments</h2>
    <table>
     
      @foreach($comments as $comment)
      <tr>
        <th>{{$comment->fullname}}</th>
        <td>{{$comment->comment}}</td>
      </tr>
      @endforeach
    </table>

  </div>
  @endif
@endsection

