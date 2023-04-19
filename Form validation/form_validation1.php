<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple form validation with PHP</title>
    
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .error{
            color: red;
        }
        
        body{
            
               
                background-image: url(./richard-horvath-cPccYbPrF-A-unsplash.jpg);
                height: 100vh;
                background-size: cover;
                overflow: hidden;
                color: white;
                
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                /* position: relative; */

            
        }
        /* body::before{
            content: " ";
            background-color: rgba(0, 0, 0, 0.467);
            height: 100vh;
            width: 100%;
            position: absolute;
        } */
        .absolute{
            
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%);
            white-space: nowrap;
            
        }
        .requied{
            
            border-color: red solid 5px;
            
        }
        
    </style>
    
</head>
<body>

     <div class="absolute">
     



<h1>

    Enter your information.

</h1>

<p class="error">

    <span>
    
        Required field.
    
    </span>

</p>

<form action="" method="post">

    <b>Name: </b><input type="text" name="name" class="requied">
    <span class="error"></span>
    <br>
    <br>
    <b>email: </b><input type="text" name="email" class="requied">
    <span class="error"></span>   <br>
    <br>
    <b>website adress: </b><input type="text" name="email">
    <span class="error"></span>

</form>
     
     </div>
    
</body>
</html>