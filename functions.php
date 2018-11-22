<?php include "db.php"; ?>

<?php
function createData(){
  if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];


    //sql query
    // .= to concatenate query
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    // mysqli_query($connection, $query);

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("<i><strong>QUERY FAILED:</strong></i> " . mysqli_error($connection));
      }
      // else {
      //   echo "Record Created";
    // }
  }
}

function readData(){
  global $connection;
  //sql query
  $query = "SELECT * FROM users";

  // mysqli_query($connection, $query);

  $result = mysqli_query($connection, $query);

  if(!$result){
    die('Query FAILED' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
      }
}

function updateData(){
  if(isset($_POST['submit'])){
  global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("<i><strong>QUERY FAILED:</strong></i> " . mysqli_error($connection));
    }
    // else {
    //   echo "Record updated!";
    // }
  }

}

function deleteData(){
  if(isset($_POST['submit'])){
  global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    // $query .= "username = '$username', ";
    // $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("<i><strong>QUERY FAILED:</strong></i> " . mysqli_error($connection));
    }
    else {
      echo "Record deleted!";
    }
  }

}

function showAllData() {
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);

  if(!$result){
    die('Query FAILED' . mysqli_error());
  }


  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }

}

 ?>
