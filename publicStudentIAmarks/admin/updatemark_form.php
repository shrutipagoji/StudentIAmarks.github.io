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
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$sem=$row['u_sem'];

$sql2="SELECT * FROM `user_mark` WHERE `u_sem`='$sem'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="admindash.php"><b>DASHBOARD</b></a></li>
                <li><a href="../index.php"><b>HOME</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="update_mark_data.php">
              <table>
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student sem: </th>
                  <td><span class="span"><?php echo $row['u_sem']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>CN</th>   <th>  CG  </th> <th>ECOM</th>
             </tr>
             <tr>
                 <td>
                <input type='text' name='CN1' value="<?php echo $data['u_CN1']; ?>" class="th" required/></td>
                 <td><input type='text' name='CG1' value="<?php echo $data['u_CG1']; ?>" class="th"/></td>
                 <td><input type='text' name='ECOM1' value="<?php echo $data['u_ECOM1']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>UNIX</th>   <th>OOSD</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='UNIX1' value="<?php echo $data['u_UNIX1']; ?> " class="th" required/></td>
                 <td><input type='text' name='OOSD1' value="<?php echo $data['u_OOSD1']; ?> " class="th" required/></td>
                 
             </tr>
             
         </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>CN</th>   <th> CG </th> <th>ECOM</th>
             </tr>
             <tr>
                 <td><input type='text' name='CN2' value="<?php echo $data['u_CN2']; ?> " class="th" required/></td>
                 <td><input type='text' name='CG2' value="<?php echo $data['u_CG2']; ?> " class="th" required/></td>
                 <td><input type='text' name='ECOM2' value="<?php echo $data['u_ECOM2']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>UNIX</th>   <th>OOSD</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='UNIX2' value="<?php echo $data['u_UNIX2']; ?> " class="th" required/></td>
                 <td><input type='text' name='OOSD2' value="<?php echo $data['u_OOSD2']; ?> " class="th" required/></td>
                 </tr>
             <tr>
             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
         </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>