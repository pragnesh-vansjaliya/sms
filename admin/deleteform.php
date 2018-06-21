
<?php
include "../config.php";
$id=$_REQUEST['sid'];
//$sql="DELETE FROM `student` WHERE `student`.`id` = '$id'";
$sql= "DELETE FROM `student` WHERE `id`='$id'";
//$run = mysqli_query($coon,$sql);
if ($coon->query($sql) === TRUE) {
    ?>

    <script>
        alert("data delete successfully");
        window.open('deletesudent.php?sid=<?php echo $id;?>','_self');
    </script>
    <?php
}
?>