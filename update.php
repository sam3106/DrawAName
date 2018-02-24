<?php include "db.php";?>
<?php include "functions.php";?>
<?php 
if(isset($_POST['submit'])){
updateProfile();
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="DrawAName.css">
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
          <p class="col-lg-12"> 1. Select which name.<br> 
          2.Then enter your new name.<br>
          3.Click update.
          </p>
           <form class="col-lg-12 text-center" action="update.php"  id="update" method="post">
            <h2 class="pb-3">Which Name</h2>
             <select name="update">
            <?php showAllData(); ?>
             </select>
             <br>
            
            <h2 class="py-2">Name</h2>
              <input type="text" name="name" placeholder="new name">
        
             <br>
             <br>
             <input type="submit" name="submit" value="update">
           </form>
       </div>     
   </div>
    
</body>
</html>
