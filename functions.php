<?php "db.php";?>

<?php
function deleteProfile(){
  global $connection;
      $name = $_POST["name"];
      $sql = "DELETE FROM profile WHERE Name = '$name' ";
      $query = mysqli_query($connection, $sql);
      if(!$query){
          echo "error";
      }
  }
?>

<?php
function showAllData(){
    global $connection;
    $sql = "SELECT * FROM profile";
    $query = mysqli_query($connection, $sql);
    
    if(!$query){
        echo "query not working";
    }
    while($row = mysqli_fetch_assoc($query)){
        $name = $row["Name"];
        echo "<option value='$name'>$name</option>";
    }
    
}
?>

   
   <?php
    function updateProfile(){
        if(isset($_POST['submit'])){
        global $connection;
        $name = $_POST["name"];
         $update = $_POST["update"];
        $sql = "UPDATE profile SET ";
        $sql .= "Name = '$name' ";
        $sql .= "WHERE Name = '$update' ";
        $query = mysqli_query($connection, $sql);
        if(!$query){
            echo "query off";
        }
    }
  }
?> 


<?php
function randomCol(){
    global $connection;
     if(isset($_POST['submit'])){
    $sql = "SELECT Name FROM profile ORDER BY RAND() LIMIT 1";
    $query = mysqli_query($connection, $sql);
    if(!$query){
        echo "no dice";
    }
    while($row = mysqli_fetch_assoc($query)){
        $name = $row['Name'];
        echo "<h1 class='huge'>$name</h1>";
    }
}
}

?>

