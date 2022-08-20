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
    <title>Add Marks</title>
    <link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link rel="stylesheet" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">


</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="admindash.php">Dashboard</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>Step 1/2 : Enter the Details of Student</h2>
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
            <table class="table1">
             <tr>
                <th>Name </th>   <th>Sem</th> <th>Roll No</th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='sem' placeholder='sem'  required class="box"/></td>
                 <td><input type='text' name='rollno' placeholder='Rollno' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                <th>father Name </th>   <th> Mother Name</th> <th>Mobile No</th><th>Your City</th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Father's Name" required class="box"></td>
                 <td><input type='text' name='mother' placeholder="Mother's Name"   required class="box"/></td>
                 <td><input type='int' name='mobile' placeholder='Mobile No'   maxlength="10" required class="box"/></td>
                 <td><input type='text' name='village' placeholder='City' required class="box"/></td>
             </tr>
             
         </table>
         <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="img" required/></td>
           </tr> 
         </table>
         <table class="table4">
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit1" value="Next" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 
