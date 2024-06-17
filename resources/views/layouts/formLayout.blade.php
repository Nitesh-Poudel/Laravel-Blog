<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <style>
        *{
            margin:0px;
            padding:0px;
          
        }
        /* body{background-color:red} */

        .outer-container{width:100%;display:flex;flex-direction:column;justify-content: center;align-items:center;padding:20px 0px;border:1px solid purple}
       
       .center{ display:flex;align-items:center;justify-content: center}
        .center{ width:90%; height:90vh;}

        .container{background-color:purple;border-radius: 30% 0px;}
        /* .innerContainer{ background-color:rgb(244, 225, 189);height:80%;display:flex;flex-direction:row;border-radius: 0% 0px;} */
        .equal{width:50%;height:100%;overflow:hidden;display:flex;justify-content: center;align-items: center;boder-radius:50%}
        .img{display:flex;justify-content: center;align-items: center;background-color:white;border-radius: 0% 0px;}
        .img img{width:400px;width:60%;display: cover}
        .form{border-radius: 50% 0px;}

        
        .socialMedia{display:flex;width:100%;justify-content: space-between;padding:20px 0px}
     
        .formm { width: 100%; height: 100%; padding: 80px; margin-top: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        
        .form-container {margin-top: 70px;}

        input[type="email"],input[type="text"],input[type="number"],
        input[type="password"] {width: 100%;padding: 10px;margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"] { margin-right: 5px;}

        label {    font-size: 14px; }

        button { width: 100%; height: 40px; background-color: #1b1b1b;
            color: aliceblue;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover { background-color: #00bcd4;}

        .msg {   margin-bottom: 20px;  text-align: center;}

       .socialMedia .link {width: 100%; padding: 10px; border: 1px solid gray;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
        }

        .socialMedia .link:hover {
            background-color: #f2f2f2;
        }
        /* .formm{margin-top:300px} */

        .errormsg{color:red}
        .a{background:red}

    </style>
</head>
<body>
    
    <div class="outer-container">
       
        <div class="container center">
        <div class="innerContainer center">
            <div class="equal img">
                <img src="{{asset('img/ls.jpg') }}">

            </div>
            <div class="equal form">
                <div class="formm">
                    
                        <div class="msg a" style="margin-top: 40px;">
                          @yield('msg')
                        </div>
                        <div class="socialMedia">
                            <div class="link">Google</div>
                            <div class="link">Facebook</div>
                        </div>
                        <div class="form-container">
                            @yield('formArea')
                            
                          
                        </div>
                        
                    
                </div>

            </div>

        </div>

        
    </div>
</body>
</html>