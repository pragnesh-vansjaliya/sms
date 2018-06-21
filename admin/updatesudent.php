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
<div class="head" xmlns:color="http://www.w3.org/1999/xhtml" xmlns:color="http://www.w3.org/1999/xhtml">
    <h1>Student Management System</h1>
    <h3 class="log"><a href="logout.php" >Logout</a></h3>
    <h3 class="back"><a href="admindash.php" >Back</a></h3>

</div>
<div class="containt">
    <form method="post" action="updatesudent.php">
        Standard:  <input type="text" name="std" placeholder="Enter Standard" required>
        Full Name: <input type="text" name="name" placeholder="Enter Name" required>
        <input type="submit" name="submit" value="Search">
    </form>
</div>

<table align="center" width="80%" border="1" style="margin-top: 10px;">
        <tr >
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Rolno.</th>
            <th>Email</th>
            <th>Marks</th>
            <th>Edit</th>
        </tr>

<?php
if (isset($_POST['submit'])){
    $standerd = $_POST['std'];
    $name=$_POST['name'];
  $sql = "SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
    $run=mysqli_query($coon,$sql);

    if (mysqli_num_rows($run)<1){
        echo "<tr><td colspan='7'>No record found!!</td></tr>";
    }
    else{
        $count=0;
        while ($data=mysqli_fetch_assoc($run)){
            $count++;

            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><img src="../dataimage/<?php echo $data['image']; ?>"style="max-width:100px;"/></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['rollno'];?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['rollno'];?></td>
                <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">edit</a> </td>
            </tr>
            <?php
        }
    }
}
?>
</table>
