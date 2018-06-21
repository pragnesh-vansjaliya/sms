<?php
include('header.php');
?>
<div class="head">
    <h3 class="log"><a href="login.php" >Admin_Login</a></h3>
    <h1>Student Management System</h1>
</div>
    <div class="containt">
    <form method="post" action="index.php">
        <h2>Student information</h2> <br><br>
        Choose Standard: <select name="std">
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
            <option value="6">6th</option>
        </select> <br><br>
        Enter RollNo.: <input type="text" name="rollno" required> <br><br>
         <input type="submit" name="submit" value="SUBMIT">
    </form>
    </div>

<?php
include('footer.php');
?>
<?php
if(isset($_POST['submit'])){
    $standerd=$_POST['std'];
    $rollno=$_POST['rollno'];
    $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd'";
    $run=mysqli_query($coon,$sql);
    if($run == true){
        //echo "helo";
    }
    if(mysqli_num_rows($run)>0){
        $data=mysqli_fetch_assoc($run);
        ?>
        <div align="center">
        <table border="1" style="width:50%;  margin-top:20px; background-color: bisque">
            <tr>
                <th colspan="3">Student Details</th>
            </tr>
            <tr>
                <th>RollNo.</th>
                <td><?php echo $data['rollno']; ?></td>
                <td colspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-width: 80px; padding-left: 15px; max-height: 150px;"/></td>

            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $data['email']; ?></td>
            </tr>
            <tr>
                <th>Marks</th>
                <td><?php echo $data['marks']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $data['email']; ?></td>
            </tr>
            <tr>
                <th>Standard.</th>
                <td><?php echo $data['standerd']; ?></td>
            </tr>
        </table>
        </div>
        <?php
    }
    else{
        echo "<script>alert('student data not found');</script>";
    }
}

?>
