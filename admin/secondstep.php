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
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
              <h2>Step 2/2 : Add Exam mark</h2>
         
          <td><input type="hidden" name="sem" class="sem" value="<?php  echo $_POST['sem']; ?>" required/></td>
          
          <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
          
              
              
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>CN</th>   <th> CG</th> <th>ECOM</th>
             </tr>
             <tr>
                 <td><input type='text' name='CN1' placeholder='CN' required/></td>
                 <td><input type='text' name='CG1' placeholder='CG' required/></td>
                 <td><input type='text' name='ECOM1' placeholder='ECOM' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>UNIX</th>   <th>OOSD</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='UNIX1' placeholder='UNIX' required/></td>
                 <td><input type='text' name='OOSD1' placeholder='OOSD' required/></td>
                 
             </tr>
             
         </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>CN</th>   <th> CG </th> <th>ECOM</th>
             </tr>
             <tr>
                 <td><input type='text' name='CN2' placeholder='CN' required/></td>
                 <td><input type='text' name='CG2' placeholder='CG' required/></td>
                 <td><input type='text' name='ECOM2' placeholder='ECOM' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>UNIX</th>   <th>OOSD</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='UNIX2' placeholder='UNIX' required/></td>
                 <td><input type='text' name='OOSD2' placeholder='OOSD' required/></td>
                 
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
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $sem=$_POST['sem'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_sem`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$sem','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
