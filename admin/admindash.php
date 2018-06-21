<?php
include('../header.php');
?>
<?php
   if(isset($_SESSION['uid'])){
        echo "";
   }
    else{
       header("location:../login.php");
    }
?>
<div class="head">
    <h3 class="log"><a href="logout.php" >Logout</a></h3>
    <h1>Admin DashBoard</h1>

</div>

<div class="containt">
    <h3><a href="addstudent.php">1. Insert Student Details</a></h3>
    <h3><a href="updatesudent.php">2. Update Student Details</a></h3>
    <h3><a href="deletesudent.php">3. Delete Student Details</a></h3>


</div>

<?php
include('../footer.php');
?>