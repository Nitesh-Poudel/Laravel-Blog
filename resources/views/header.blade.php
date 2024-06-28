<?php //session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet"a href="">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Add this to the <head> section of your HTML file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XfP+9MjzJwClRHD1/4t6WYsh2Zmzto/AdomB1t9QvStBmPcZHg5ot5C6nFSv9URbk0Yy9F4kVZBcLDiIM1Ce2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
 
 .links{display:flex;justify-content: space-between;width:80%;align-items:flex-end;}
 
 .links a{color:white}
 .links  .grp1 img{width:16px;filter: invert(1);}
 .links .grp1 {display:flex}
 
 .nav ,.links{display:flex;justify-content:space-between}
 .links  .dropdownParent img{width:36px;height:auto;border:3px solid gray;margin-top:20px}
 /*drop_down*/
 .dropdownParent{position:relative}
 .dropdownParent:hover .dropdown{display:block}
.dropdown{background-color:white;position:absolute;top:30px;right:-20px;border:1px solid gold;border-radius:8px;display:none}
.dropdown a{color:black;padding:0px 0px}
.dropdown div{padding:2px 20px}
.dropdown div:hover{background-color:aliceblue;}
.notification {cursor:pointer;position:relative;padding:0px;margin:0px}
.notification:hovejr .notification-list{display:block}

.status{cursor:pointer;position:absolute;top:-5px;right:-5px;background-color:red;width:16px;text-align:center;border-radius:50%}
.notification-list{position:absolute;top:25px;left:-50px;width:300px;height:200px;overflow-y:scroll;overflow-x:hidden;line-height;border:1px solid gray;display:none;box-shadow: 1px 5px 13px 3px rgba(0, 0, 0, 1);
  background-color:white;
}
.notificatin-list h6{margin:0px;padding:0px}
.notification-list table {
  width: 100%;
  border-collapse: collapse;
}

.notification-list table tr {
  border-bottom: 1px dotted gray;
  background-color: white;
}

.notification-list table tr td {
  padding: 8px;
  text-align: left;
  color:Black;
}
#notifincation{ padding:5px;background-color:green}
#notificnation-list{background-color:blue;
  box-shadow: 15px 15px 15px 10px rgba(0, 0, 0, 1);
}
table tr.seen0{background-color:aliceblue;}
table tr .seen1{background-color:white;}

.user{display:flex;flex-direction:column;color:white}
</style>
     

</head>
<body>
<nav  class="nav  navbar ">
  <div class="logo">
  <img src="{{asset('img/logo.png') }}">
  </div>
  <div class="links">
      <div class="grp1">
       
        
          <a href="{{route('home')}}">  <i class="fas fa-home">Home </i> </a>
      
          <a href="{{route('create.blog')}}"><i class="fas fa-upload">Post </i> </a>

        <div class="notification"id="notification"width="20px"><img src="{{asset('img/bell.png') }}">
            <div class="status"><b>6</b></div>
            <div class="notification-list"id="notification-list">
              
              <table>
              
               <tr class="seen">
                <a href="#"><td><b> your blog<br>
                   
                  </td></a>
                </tr>
               
                <tr>
                 
              </table>
              
            </div>
        </div>
       
       
        
        
    </div>
    <div class="dropdownParent">
     
        <div class="user">
        <img src="{{asset('img/profile.png') }}" height=50px>
       
        </div>
    
        @if(!session()->has('user_id'))
          <a href="{{route('login')}}"><div>login</div></a>
        @else

    

      <div class="dropdown">
        <a href="#"><div>profile</div></a>
          <div>
            <a href="{{route('logout')}}"><div>Logout</div></a>
         </div>
    </div>
    @endif
  


  </div>
  </nav>

  <script>
      document.addEventListener('DOMContentLoaded', function () {
          let notification = document.getElementById("notification");
          let notify = document.getElementById("notification-list");
          let isNotificationVisible = false;
        
         
          // Add click event listener to the notification trigger
          notification.addEventListener('click', function (event) {
              event.stopPropagation(); // Prevents the click event from propagating to the document
              if (!isNotificationVisible) {
                  notify.style.display = 'block';
                  isNotificationVisible = true;
                  updateDatabase();
              } else {
                  notify.style.display = 'none';
                  isNotificationVisible = false;
              }
          });
          // Add click event listener to the document to hide the notification when clicking anywhere outside it
          document.addEventListener('click', function () {
              if (isNotificationVisible) {
                  notify.style.display = 'none';
                  isNotificationVisible = false;
              }
          });
        });
      
        function updateDatabase() {
          console.log("Before AJAX request");

$.ajax({
    type: "POST",
    url: "",
    data: { 
        
     },
    success: function (response) {
        console.log("AJAX request successful");
        console.log(response);  // Check the response in the console

        // Check if there is a redirect URL in the response
        if (response.redirectUrl) {
            console.log("Redirecting to: " + response.redirectUrl);
            // Navigate to the specified URL
            window.location.href = response.redirectUrl;
        }
    },
    error: function (error) {
        console.error("Error updating database", error);
    }
});

console.log("After AJAX request");

}


    
  </script>

</body>
</html>