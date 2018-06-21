<?php
include('../header.php');
?>
<?php
if($_SESSION['uid']){

}
else{
    header("location:../login.php");
}
?>
<div class="head">
    <h1>Student Management System</h1>
    <h3 class="log"><a href="logout.php" >Logout</a></h3>
    <h3 class="back"><a href="admindash.php" >Back</a></h3>

</div>
<div class="containt">
    <form method="post" action="addstudent.php" enctype="multipart/form-data">
        RollNo.:   <input type="text" name="rollno" placeholder="Enter Rollno" required>
        <br><br>
        Full Name: <input type="text" name="name" placeholder="Enter Name" required>
        <br><br>
        Email:     <input type="text" name="email" placeholder="Enter Email" required>
        <br><br>
        Marks:     <input type="text" name="marks" placeholder="Enter Marks" required>
        <br><br>
        Standerd:  <input type="text" name="std" placeholder="Enter Standerd" required>
        <br><br>
        Image:     <input type="file" name="simg" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
    <ul class="pager">
        <li class="previous"><a href="#">Previous</a></li>
        <li class="next"><a href="#">Next</a></li>
    </ul>
</div>
</body>
</html>
<?php
    if (isset($_POST['submit'])){
        //echo "frgfr";die;
        $rollno = $_POST["name"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $marks = $_POST["marks"];
        $std = $_POST["std"];
        $imagename=$_FILES['simg']['name'];
        $tampname=$_FILES['simg']['tmp_name'];
            move_uploaded_file($tampname,"../dataimg/$imagename");

//        $image=$_POST['sname'];


        $sql= "INSERT INTO `student` (`rollno`, `name`, `email`, `marks`, `standerd`,`image`) VALUES ('$rollno','$name','$email','$marks','$std','$imagename')";
        //echo $sql; die;
        $run = mysqli_query($coon,$sql);
        if ($coon->query($sql) === TRUE){
            ?>
            <script>
                alert("data insert successfully");
            </script>
<?php
        }

    }

?>
