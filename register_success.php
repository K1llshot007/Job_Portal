<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .text {
            text-align: center;
            color: white; 
            margin-top: 40vh;   
        }

        body{
            background-image: url(../Job_portal/peakpx.jpg);
            background-position:top;
            background-size:auto;
            background-repeat:no-repeat ;
    
        }

        .text a{
            color: white;
            
        }

        .text a:hover{
            color: orangered;
            transition: 0.55s;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <!-- <div class="container">
        <form class="container" method="POST" action="config.php">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="fullname" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"> 
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="number" >
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" >
            </div>

            <div class="mb-3">
                <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>

            <br>
            <br>

            Registration Successfull <a href="login.php" id="login">Login</a>
        </form>
    </div> -->
    <div class="text">
        <h1>Registration Successfull</h1>
        <br>
        <h3>Redirecting you to login page</h3>
        <p>If you are not redirected <a href="login.php">click here</a></p>
        <script>
         setTimeout(function(){
            window.location.href = 'login.php';
         }, 5000);
      </script>
    </div>

</body>
</html>