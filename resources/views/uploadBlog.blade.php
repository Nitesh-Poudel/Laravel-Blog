<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
      .nav img{height:80px}
      .container{box-shadow: 3px 3px 4px 2px rgba(0, 0, 0, 0.2);}
      textarea{height:100px}
    </style>
    <link rel="stylesheet" href="path/to/mainStyle.css"> <!-- Replace "path/to/mainStyle.css" with the correct path -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
   
   
   <br><br><br>
   <div class="container">
       <h1>Create Blog</h1> 
        

      <form action="{{route('store.blog')}}" method="POST">
        @csrf
        <input type="text" placeholder="title" id="title" class="form-control" value="{{old('title')}}"name="title">
        <div id="error"><b></b></div><br>

        <select id="category" name="category" class="form-control">
            <option value="{{old('category')}}">Choose category</option>
            @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->catagoryName}}</option>

            @endforeach

        </select>

        <div id="error"><b></b></div><br>

        <textarea name="content" id="content" class="form-control"></textarea>

        <div id="error"><b></b></div><br>

       
     <button type="submit" name="post" class="btn btn-primary">Post</button>
    
     <dev class="errors">
      <ul type="none">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
      </ul>

       
     </dic>
      </form>
      </div>
</body>
</html>
