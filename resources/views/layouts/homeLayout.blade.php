
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
    <link rel="stylesheet"a href="">
  <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>

    .header{width:100%;height:100px;background-color:blue}
      .reaction{display:flex;justify-content:space-between;align-items:center}
      button{border:none;background:transparent;}
      button img{width:20px}

      .nav{height:80px;margin-top:0px;padding-top:0px;background-color:#0d0c1f}
      .nav img{height:110%;border-radius:50%}
      
      .text , .sidebar a, .reaction {color:black}
      .innerContainer{display:flex;width:100%}
     .search {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px; /* Adding padding for better spacing */
}

input[type="text"] {
    padding: 8px 28px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    width:70%;
  
}

.btn {
    padding: 8px 12px;
    border: none;

    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    /* Your button styles */
}

.btn-primary {
    background-color: #007bff;
    color: white;
    /* Additional button styles */
}

      .sidebar{width:300px;box-shadow: 3px 3px 4px 2px rgba(0, 0, 0, 0.2);}
      .sidebar a{font-size:9px;margin:10px 10px;padding:0px 10px;text-decoration:underline}
     
      .contents,.content, nav,.catagoryTable{box-shadow: 3px 3px 4px 2px rgba(0, 0, 0, 0.2);padding: 20px;}
      .contents,.catagoryTable{height:80vh;overflow:scroll;width:85%}

      .sidebar ul{margin:0px;padding:0px}
      .sidebar ul li{margin:10px;}
      .catagoryTable img{height:200px}

      .catagoryImg{width:95%;height:150px;overflow:hidden;display:flex;justify-content:center;align-items:center;padding:10px; position: relative;background-color:gray;
    }
    .categoryImg img {
    box-shadow: 15px 15px 15px 010px rgba(0, 0, 0, 1);
}
    .catagoryName{ position: absolute;
      
      text-align:center;
    top: 30%; 
    left:30%;
    background: rgba(255, 255, 255, 0.7);
    padding: 0px auto;
  
    border-radius: 5px; }
      .container a{ text-decoration: none;}
     
      nav a{color:white;margin:0px 50px;}

      
      .text p{color:#1b0101}
     
      .reaction{ margin-top:30px; border-top:1px solid gray;}

      .content{ margin:50px 0px;text-align: justify;}
      
      a{ color:black;}
      nav a{text-decoration: none;color:white;}
   
      a{ color:black;}

      .content:hover{background-color:rgb(223, 225, 227); }

    

      ::-webkit-scrollbar {width: 2px;}
      ::-webkit-scrollbar-thumb {background: #888;}



      
      ::-webkit-scrollbar-thumb:hover {background: #555;}

      @yield('style');
    </style>
  
  
    <lnk href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>
 @include('header')
  
<div class="container">

@if(session()->has('user_id'))
    User ID: {{ session('user_id') }}
@endif

<br><br>
<div class="innerContainer">
<div class="sidebar">
  <div class="search">
    
      <input id="input" type="text" id="form1" />
      <button class="btn btn-primary">Search</button>
   
  </div>
   
  <div class="catagoryTable">
    <h6>Catagory</h6>
    <ul type="none">
      
    
           
         

       
          <div class="catagoryImg"><li> 
              <a href="#">
                <img src="" alt="">
              
            <div class="catagoryName">category->catagoryName<b></b></div>
            </a></li></div><br>
           
        
    </ul>
  </div>
</div>
<div class="contents">

  
  
    
        
        

          <a href="">
            <div class="content">
              <div class="text">
                <h2>@yield('title')</h2>
                <p>@yield('content')</p>

                
                <div class="reaction">
                  <div class="extra">
                    @yield('extra')
                  </div>
                  <div><h6>    Likes {{ rand(80, 100) }}   Comments {{rand(20,50)}}  Views {{rand(500,1000)}}</h6></div>
                  
                </div>
              </div>  

            </div>  
          </a>
       
        
    
   
   
</a>
    

    <div class=dropdownParent><h6><button type="submit"></button></h6>
      <div class="dropdown">
       
          <div><button type="submit">Save</button></div>
          <input type="hidden" name="blogid" value="">
          <input type="hidden" name="blog" value="">
         
          <div><a href="#">Report</a></div>
      

      </div>
    </div>
  
    </div>
  </div>


</div>
</div>

</div>




</body>
</html>