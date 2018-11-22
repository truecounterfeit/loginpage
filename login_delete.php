<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php deleteData(); ?>

<?php include "header.php"?>

<h2 class = "text-center">Delete</h2>
    <form action="login_delete.php" method = "post">

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name = "username" class="form-control" placeholder="username">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name = "password" class="form-control" placeholder="password">
      </div>

      <div class="form-group">
        <select name="id" id="">
          <!-- <option value="">1</option> -->
          <?php showAllData(); ?>
        </select>
      </div>

      <input class = "btn btn-primary" type="submit" name= "submit" = value = "DELETE">
    </form>

<?php include "footer.php" ?>
