<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="../image/logo_1.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>First Step- Student Details</h2>
       
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $sem=$_POST['sem'];
    $rollno=$_POST['rollno'];
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
    
    $sql="INSERT INTO `user_mark`(`u_rollno`,`u_sem`,`u_CN1`, `u_CG1`, `u_ECOM1`, `u_UNIX1`, `u_OOSD1`, `u_CN2`, `u_CG2`, `u_ECOM2`, `u_UNIX2`, `u_OOSD2`) VALUES ('$rollno','$sem','$CN1','$CG1','$ECOM1','$UNIX1','$OOSD1','$CN2','$CG2','$ECOM2','$UNIX2','$OOSD2')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>