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
    <title>All Student result</title>
    
<link rel="stylesheet" href="../csss/viewresult.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php"><b>HOME</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></li>
                <li class="logout"><a href="admindash.php"><b>ADMIN DASHBOARD</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h2>Student Record</h2>
        <form>
         <table>
          <tr>
           <th class="id_h1">Id </th>
           <th class="contact_h1">Sem</th>  
           <th class="contact_h1">Roll No</th>
           <th class="contact_h1">CN1</th>
           <th class="contact_h1">CG1</th>
           <th class="contact_h1">ECOM1</th>
           <th class="contact_h1">UNIX1</th>
           <th class="contact_h1"> OOSD1</th>
           <th class="contact_h1">CN2</th>
           <th class="contact_h1">CG2</th>   
            <th class="contact_h1">ECOM2</th>
            <th class="contact_h1">UNIX2</th>
            <th class="contact_h1"> OOSD2</th> 
            

            

         </tr>
      

        
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
    $OOSD2=$_POST['OOSD'];
    $data2=$_POST['total'];
     $CN1+$CN2= $total;
    $sql="INSERT INTO `user_mark`(`id`,`u_rollno`,`u_sem`,`u_CN1`, `u_CG1`, `u_ECOM1`, `u_UNIX1`, `u_OOSD1`, `u_CN2`, `u_CG2`, `u_ECOM2`, `u_UNIX2`, `u_OOSD`) VALUES ('$rollno','$sem','$CN1','$CG1','$ECOM1','$UNIX1','$OOSD1','$CN2','$CG2','$ECOM2','$UNIX2','$OOSD2')";
    $sql2="SELECT * FROM `student._data` WHERE `u_sem`='$sem' AND `u_rollno`='$rollno'";


    
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

<?php
include('../dbcon.php');
  

$sql="SELECT *FROM `user_mark`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>

        <tr>
          <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['u_sem'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_rollno'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_CN1'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_CG1'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['u_ECOM1'].'<br>'; ?></th> 
            <th class="contact_h"><?php  echo $row['u_UNIX1'].'<br>'; ?></th> 
            <th class="contact_h"><?php  echo $row['u_OOSD1'].'<br>'; ?></th>
            <th class="contact_h"><?php  echo $row['u_CN2'].'<br>'; ?></th>
            <th class="contact_h"><?php  echo $row['u_CG2'].'<br>'; ?></th>
            <th class="contact_h"><?php  echo $row['u_ECOM2'].'<br>'; ?></th>
            <th class="contact_h"><?php  echo $row['u_UNIX2'].'<br>'; ?></th>
            <th class="contact_h"><?php  echo $row['u_OOSD2'].'<br>'; ?></th>
            
          


            
            <?php
            ?>
        </
    
            </tr>    
            <?php 
        
            
                  
        



            
    
   
}
}
else{
    echo "No Record Found";
}



?>
          
         </table>
        </form>
      </div>  
    </header>
</body>
</html>
    
      
  
            

        
            



            