<?php 
    include("init.php");
    // include("includes/templates/header.php");
    // <?php 
    // include("layout/init.php");
    include($tpl."header.php");
    include("includes/languages/en.php");
?>
    <form action="" class="login">
        <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
        <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
        <input class="btn btn-primary" type="submit" value="Login">
    </form>

<?php include($tpl."footer.php");?>