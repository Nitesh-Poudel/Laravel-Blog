<style>
  h1{color:red}
  .nav{background-color:#030f26;display:flex; justify-content:center}
  .nav .logo img{border-radius:50%}
  a{margin:20px}
  .this-header{display:flex;}
  .relations {margin:20px 50px}
  .relation #follow{padding: 5px 10px; background-color:blue}
  
</style>

<div class="container">
  @include('header')
  <div class="this-header">
    <div class="information">
      <h1>{{$user->fullname}}</h1>
      <p>{{$user->email}}</p>
      <p>Total Post : {{$user->blogs_count}}</p>
    </div>
    <div class="relations">
      <form action="">
        <button id="follow">Follow</button>
      </form>

    </div>
   


  </div>

  @foreach($user->blogs as $blog)
    <h3>{{ $blog->title }}</h3>
    <p>{!! $blog->passage !!}</p>



    <div class="comments">
      <details style="cursor:pointer; background-color:aliceblue">
        <summary>
            <h4 style="display: inline-block; margin: 0;"><b>Comments</b></h4>
        </summary>
          <p>
            @foreach($blog->comment as $comments)
             <strong><a href="{{route('user.profile',['id'=>$comments->commenter->id])}}">{{ $comments->commenter->fullname }}</a></strong> {{$comments->comment}}<br>
            @endforeach
 
          </p>
           
      </details>
    </div>
   
   

  
@endforeach

</div>


 