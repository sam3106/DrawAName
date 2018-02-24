<?php include "db.php";?>
<?php
    if(isset($_POST['submit'])){
global $conection;
$name = $_POST["name"];
$number = $_POST["number"];

        if($number<=100 && $number>=0){
            $sql = "INSERT INTO profile (Name)
            VALUES ('$name')";
            $query = mysqli_query($connection, $sql);
        }else if($number<0){
            echo "<script type='text/javascript'>alert('Your number is too low' + ' ' + '$name')</script>";
        }else{
            echo "<script type='text/javascript'>alert('Your number is too high' + ' '+ '$name')</script>";
        }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="PicANumber.css">
<title>Draw A Name</title>
</head>
<body>
  <div class="container space" style="background-color: green;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center"> Draw A Name</h1>
        </div>
    </div>
  </div>
  
  <div class="container padding-bottom-lg" style="background-color:blue;">
     <div class="row">
      <a href="create.php" class="col-lg-3" style="color:green;">
       <div class="nav-tags">
          Create
       </div>
       </a>
         <a href="start.php" class="col-lg-3" style="color:green;">
       <div class="nav-tags">
          Start
       </div>
       </a>
        <a href="update.php" class="col-lg-3" style="color:green;">
       <div class="nav-tags">
          Update
       </div>
       </a>
        <a href="delete.php" class="col-lg-3" style="color:green;">
       <div>
          Delete
       </div>
       </a>
     </div>
  </div>
   
    <div class="container" style="background-color:green;">
       <div class="row text-center">
         <h2 class="col-lg-12">About</h2>
         <p class="col-lg-12">Draw A Name web app is a game where multiple players enter a name and If your name is selected you win.<br>If you choose to keep your name (by not clicking delete) after the game your name will be entered into the next contest.<br>Each section has instruction on what to do.If you want to change or delete you previously picked number feel free to click update or change.<br>So have fun and thank you for vistiting.</p>
    
        </div>
    </div>
   
   <div class="container" style="background-color:green;">
       <div class="row text-center">
          <h2 class="col-lg-12 ">Instruction</h2>
          <p class="col-lg-12"> 1. Enter your name below then click the create button.<br> 2.After all names have been selected click the start button.</p>
           <form class="col-lg-12 text-center" action="create.php" method="post">
             <h2 class="pb-2">Name</h2>
             <input type="text" name="name"><br>
                  <br>
              <input type="submit" name="submit" value="create">
           </form>
       </div>
   </div>
  
</body>
</html>
