
<?php
include "../config.php";
$rollno = $_POST["name"];
$name = $_POST["name"];
$email = $_POST["email"];
$marks = $_POST["marks"];
$std = $_POST["std"];
$id=$_POST['sid'];
$imagename=$_FILES['simg']['name'];
$tampname=$_FILES['simg']['tamp_name'];
move_uploaded_file($tampname,'../dataimg/$imagename');

//        $image=$_POST['sname'];
$sql= "UPDATE `student` SET `rollno` = '5', `name` = '$name', `email` = '$email', `marks` = '$marks', `standerd` = '$std', `image` = '$imagename' WHERE `student`.`id` = $id ";
//echo $sql; die;
$run = mysqli_query($coon,$sql);
if ($coon->query($sql) === TRUE) {
    ?>

    <script>
        alert("data update successfully");
        window.open('updateform.php?sid=<?php echo $id;?>','_self');
    </script>
    <?php
}
?>