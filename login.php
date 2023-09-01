<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
      body{
        
        background-color:#070c5a;
      }
      .container{
        padding:0px;
        margin: 0px;
        display: flex;
        color:white;
        justify-content: center;
        width:100%;
        height: 100vh;
      }
      span{
        width:30%;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-evenly;
      }
      span h1 {
        color:white;
        border-bottom:2px solid white;
        padding-bottom: 5px;
      }
      .img-section{
        width:70%;
      }
      img{
        width:100%;
        height: 100vh;
      }
      form{
        width:80%;
      }
      @media(max-width:786px){
        .img-section{
          width:0%;
          display: none;
        }
        span{
          width: 100%;
          padding: 0px 25px;
        }
        form{
        width:100%;
      }
      }
    </style>
</head>
<body>
  <div class="container">
    <div class="img-section">
      <img src="https://t3.ftcdn.net/jpg/01/22/71/96/360_F_122719641_V0yw2cAOrfxsON3HeWi2Sf4iVxhv27QO.jpg" alt="">
    </div>
    <span>
        <h1><?=$company_name?></h1>
        <form action="loginsql.php" method="post">
          <a href='signup.php' class="btn btn-warning w-100">Sign Up</a>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password"placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-info mt-3 w-50">Log In</button>
      </form>
    </span>
</div>
</body>
</html>