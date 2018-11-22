<?php include "db.php"; ?>
<?php include "functions.php" ?>

<?php createData(); ?>

<?php include "header.php" ?>


    <h2 class = "text-center">Create</h2>
    <form action="login_create.php" method = "post">

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name = "username" class="form-control" placeholder="username">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name = "password" class="form-control" placeholder="password">
      </div>

      <input class = "btn btn-primary" type="submit" name= "submit" = value = "Submit">
    </form>

<?php include "footer.php" ?>
