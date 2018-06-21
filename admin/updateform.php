<?php
include('../header.php');
?>
<?php
if($_SESSION['uid']){

}
else{
    header("location:../login.php");
}
$sid = $_GET['sid'];
$sqi= "SELECT * FROM `student` WHERE `id`='$sid'";

$run=mysqli_query($coon,$sqi);
$data = mysqli_fetch_assoc($run);
?>
<div class="head" xmlns:color="http://www.w3.org/1999/xhtml" xmlns:color="http://www.w3.org/1999/xhtml">
    <h1>Student Management System</h1>
    <h3 class="log"><a href="logout.php" >Logout</a></h3>
    <h3 class="back"><a href="updatesudent.php" >Back</a></h3>

</div>
<div class="containt">
    <form method="post" action="updatedata.php" enctype="multipart/form-data">
        RollNo.:   <input type="text" name="rollno" value=<?php echo $data['rollno'];?> >
        <br><br>
        Full Name: <input type="text" name="name" value=<?php echo $data['name'];?> >
        <br><br>
        Email:     <input type="text" name="email" value=<?php echo $data['email'];?> >
        <br><br>
        Marks:     <input type="text" name="marks" value=<?php echo $data['marks'];?> >
        <br><br>
        Standerd:  <input type="text" name="std" value=<?php echo $data['standerd'];?> >
        <br><br>
        Image:     <input type="file" name="simg" value=<?php echo $data['image'];?> >
        <br><br>
        <input type="hidden" name="sid" value="<?php echo $data['id'];?>">
        <input type="submit" name="submit" value="Submit">

    </form>

</div>