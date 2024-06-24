@extends('layouts.homeLayout')
@section('title')
  {{$content->title}}
@endsection

@section('style')
  bdfody{color:red}
  textarea{border-radius:8px;color:;border-color:white;background-color:white}
  .react{display:flex}
  .comment{display:flex}
  .comment{background-color:white}
  label{border:1px solid gray; padding:2px 3px;margin:5px;border-radius:5px}
  .buttons{display:flex;align-items:center}
  tr{border-buttom:1px solid gray}
table tr td{padding:5px 20px}

@endsection

@section('sidebar')
<div class="sidebar">
  <div class="search">
    
      <input id="input" type="text" id="form1" />
      <button class="btn btn-primary">Search</button>
   
  </div>
   
  <div class="catagoryTable">
    <h6>You may also like</h6>
    @foreach($contentList as $contents)
    <ul type="none">
      <a href="{{route('particular.blog', ['id' => $contents->id])}}">
        <div class="catagoryImg">
        <li> 
          
            <img src="" alt="">
            <div class="catagoryName">
              {{$contents->title}}
            </div>
          
        </li>
      </div><br>
      </a>
    </ul>
    @endforeach
  </div>


</div>
@endsection

@section('content')
 <p> {!!$content->passage!!}</p>
</br></br>
 <a href="#"><b>Author: {{$content->bloger->fullname}}</b></a>
@endsection

@section('extra')
   <form action="{{route('reaction')}}" method="post">
    @csrf
    <div class="react">
      <div class="buttons">
        @if(!$Ilike)
        <button id="like" name="action" value="like"><img src="{{asset('img/like.png')}}" ></button>
        @else
        <button id="unlike" name="action" value="unlike"><img src="{{asset('img/unlike.png') }}" ></button>
        @endif
        <label for="comment">Comment</label>
      </div> 
      <div class="reactCount">
          <b> Likes {{ $content->like_count }}   Comments {{$content->comment_count}}  Views {{rand(500,1000)}}</b>
      </div> 
      
      
    </div>
    
        
    <input type="hidden" name="blog_id" value="{{$content->id}}">
     
      <div class="comment">
        <textarea id="comment" name="comment" rows="2" cols="150"></textarea>
        <button id="comment"  name="action" value="comment">Comment</button>
     
     </div>
  </form>
  <div class="errormsg">
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
     </div>
<br>
  <div class="showComments">
  @if($content->comment)
  <h2>Comments</h2>
    <table>
     
      @foreach($content->comment as $comment)
      @if(!$comment->fullname && !$comment->comment)
            <td colspan="2">No comment</td>
        @else
      <tr>
        <th>{{$content->comment->fullname}}</th>
        <td>{{$comment->comment}}</td>
      </tr>
      @endif
      @endforeach
    </table>

  </div>
  @endif
@endsection

