
<?php
if(isset($_POST['submit']))
{

	include('dbcon.php');
	
	$sem=$_POST['sem'];
	$rollno =$_POST['rollno'];
	$sql="SELECT * FROM `student_data` WHERE `u_sem`='$sem' AND `u_rollno`='$rollno'";
    $sql2="SELECT * FROM `user_mark` WHERE `u_sem`='$sem' AND `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>

<html>
<head>
    <title>Result</title>
<link rel="stylesheet" href="csss/result.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="admin/aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="admin/contactus.php"><b>CONTACT</b></a></li>
                <li><a href="login.php"><b>ADMIN LOGIN</b></a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <img src="dataimg/<?php  echo $data['u_image']; ?>" class="image2" /> 
            
              <tr>
              <th>Name :</th>
                <td><?php echo $data['u_name'] ?></td>
              </tr>
              <tr>
              <th>Sem:</th>
              <td><?php echo $data2['u_sem']; ?></td>
              </tr>
              <tr>
              <th>Roll No :</th>
              <td><?php echo $data['u_rollno']; ?></td>
              </tr>
              <tr>
              <th>Father Name :</th>
              <td><?php echo $data['u_father']; ?></td>
              </tr>
              <tr>
            
          </table>
          <table class="table2">
              <tr>
               <th>Suject</th><th>FIRST INTERNAL MARKS </th><th>SECOND INTERNAL MARKS</th><th>Total</th><th>AVERAGE</th><th>Max. Marks</th>
              </tr>
              <tr>
                  
              <th>CN</th>
                <th><?php echo $data2['u_CN1']; ?></th>
                <th><?php echo $data2['u_CN2']; ?></th>
                <th><?php echo $total1=$data2['u_CN1']+$data2['u_CN2']; ?> </th>
                <th><?php echo  $per1=$total1/2; ?> </th>
                <th>40</th>
              </tr>
              <tr>                                                                                                                                                                                                                     
              <th>CG</th>
                <th><?php echo $data2['u_CG1']; ?></th>
                <th><?php echo $data2['u_CG2']; ?></th>
                <th><?php echo $total2=$data2['u_CG1']+$data2['u_CG2']; ?> </th>
                <th><?php echo   $per2= $total2/2; ?> </th>
                <th>40</th>
              </tr>
              <tr>
              <th>ECOM</th>
                  <th><?php echo $data2['u_ECOM1']; ?></th>
                  <th><?php echo $data2['u_ECOM2']; ?></th>
                  <th><?php echo $total3=$data2['u_ECOM1']+$data2['u_ECOM2']; ?> </th>
                  <th><?php echo  $per3=$total3/2; ?> </th>
                  <th>40</th>
              </tr>
              <tr>
              <th>UNIX</th>
                  <th><?php echo $data2['u_UNIX1']; ?></th>
                  <th><?php echo $data2['u_UNIX2']; ?></th>
                  <th><?php echo $total4=$data2['u_UNIX1']+$data2['u_UNIX2']; ?></th>
                  <th><?php echo $per4= $total4/2; ?></th>
                  <th>40</th>
              </tr>
              <tr>
              <th>OOSD</th>
                  <th><?php echo $data2['u_OOSD1']; ?></th>
                  <th><?php echo $data2['u_OOSD2']; ?></th>
                  <th><?php echo $total5=$data2['u_OOSD1']+$data2['u_OOSD2']; ?></th>
                  <th><?php echo $per5=$total5/2; ?></th>
                  <th>40</th>
              </tr>
              <tr>
              <th>Total</th>
                  <th>
                   <?php echo $data2['u_CN1']+$data2['u_CG1']+$data2['u_ECOM1']+$data2['u_UNIX1']+$data2['u_OOSD1']; ?>
                  </th>

                  <th>
                  <?php echo $data2['u_CN2']+$data2['u_CG2']+$data2['u_ECOM2']+$data2['u_UNIX2']+$data2['u_OOSD2']; ?>
                  </th>
                  
                  <th><span class="colorchange"><?php echo $all=$total1+$total2+$total3+$total4+$total5; ?></span></th>
                  <th><span class="colorchange"><?php echo $allper=($per1+$per2+$per3+$per4+$per5)/100*100; ?></span></th>

                  <th>200</th>
                  <th></th>
                  
              </tr>    
              </table>
          
             <h1>You Are <span class="colorchange1"><?php 
                        if($allper>=90) 
                        {
                            echo "distinction";
                        }
                       else if($allper>=80 && $allper<90)

                       {
                           echo" first class";

                       }
                       elseif($allper>=70 &&$allper<80)
                       {
                        echo"second class";
                       }
                       elseif($allper>=60 && $allper<70)

                       {
                        echo"pass";
                       }
                       else
                      {
                        echo"fail";
                      }
                      ?></span></h1>
            <marquee scrollamount="5"><p>Your Result is Declared. Kindly check your marks and in case of any discrepancy contact the admin. </p>
                </marquee>
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
}
else
{
?>
<script>
alert('Record Not found');
    window.open('index.php','_self');
</script>
<?php
}

}

?>
