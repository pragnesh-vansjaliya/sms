<?php
include('header.php');
?>
<?php

if(isset($_SESSION['uid'])){
    header("location:admin/admindash.php");
}
?>

<div class="head">
    <h1>Admin Login</h1>
</div>

<div class="containt">
    <form action="login.php" method="post">
        UserName: <input type="text" name="uname" required><br>
        <br>
        Password:  <input type="text" name="pass" required><br>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
<?php
    include('footer.php');
    ?>
<?php

    if(isset($_POST["login"])){
        $username = $_POST["uname"];
        $password = $_POST["pass"];
        $qry="SELECT * FROM admin WHERE username = '$username' AND  password = '$password'";
        $run=mysqli_query($coon,$qry);
        $row = mysqli_num_rows($run);
        //echo $row;die;
        if ($row==0){
            ?>
            <script>
                alert('Username and password not match');
                window.open('login.php','_self');
                </script>
            <?php
        }
        else{
            $data = mysqli_fetch_assoc($run);
            $id = $data['id'];
            $_SESSION['uid']= $id;       //echo $_SESSION['uid'];die;
            header("location:admin/admindash.php");
        }
    }

?>