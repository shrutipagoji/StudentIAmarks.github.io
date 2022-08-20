<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $rollno=$_POST['rollno'];
    $sem=$_POST['sem'];
    $CN1=$_POST['CN1'];
    $CG1=$_POST['CG1'];
    $ECOM1=$_POST['ECOM1'];
    $UNIX1=$_POST['UNIX1'];
    $OOSD1=$_POST['OOSD1'];
    $CN2=$_POST['CN2'];
    $CG2=$_POST['CG2'];
    $ECOM2=$_POST['ECOM2'];
    $UNIX2=$_POST['UNIX2'];
    $OOSD2=$_POST['OOSD2'];
    
    $sql="UPDATE `user_mark` SET  `u_CN1` = '$CN1', `u_CG1` = '$CG1', `u_ECOM1` = '$ECOM1', `u_UNIX1` = '$UNIX', `u_OOSD1` = '$OOSD1', `u_CN2` = '$CN2', `u_CG2` = '$CG2', `u_ECOM2` = '$ECOM2', `u_UNIX2` = '$UNIX2', `u_OOSD2` = '$OOSD2' WHERE `u_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>