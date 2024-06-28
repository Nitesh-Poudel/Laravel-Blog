<h1>{{$user->fullname}}</h1>
<p>{{$user->email}}</p>

@foreach($user->blogs as $blog)
  <h3>{{ $blog->title }}</h3>
  <p>{!! $blog->passage !!}</p>

@endforeach