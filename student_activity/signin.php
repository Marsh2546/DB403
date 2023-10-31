<?php
  session_start();
  if (isset ($_POST['submit'])){
    require 'connect.php';
    $studentid = $_POST['student_id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM student 
    WHERE studentID='{$studentid}'";
      try {
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($row){
          if(password_verify($password, $row['password'])) {
            $_SESSION['USER'] = [
              'studentID' => $row['studentID'],
              'studentName' => $row['studentName']
            ];
            header('location:index.php');
            exit;
          }
          else{
            $err = 'password not correct!';
          }
          }
          else{
            $err = 'StudentID not found!';
        }
      }
      catch(Exception $e){
        echo $e;
      }
      finally{
        $conn->close();
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student activity > signup</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      html,
      body {
        height: 100%;
      }

      .form-signup {
        max-width: 330px;
        padding: 1rem;
      }

      .form-signup .form-floating:focus-within {
        z-index: 2;
      }

      .form-signup input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signup input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signup w-100 m-auto">
      <form method = "post">
      <img class="rounded mx-auto d-block position-static top-20 start-100 bottom-50" class="mb-4" src="img/apple.png" alt="" width="130" height="">
      <br></br>
        <!-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  <?php
    if(isset($err)){
      echo "<div class='alert alert-danger'>$err</div>";
    }
    else{

    }
  ?>
        <div class="form-floating">
          <input name="student_id" type="text" class="form-control" id="floatingEmail" placeholder="Email address">
          <label for="floatingEmail">Student ID</label>
        </div>
        <div class="form-floating">
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <button class="btn btn-primary w-100 py-2" type="submit" name = "submit" >Sign in</button>  
        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php" class="link-danger">Signup now</a></p>
        <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
        <!-- <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p> -->
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>