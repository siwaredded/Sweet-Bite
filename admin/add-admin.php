<?php include('partials/menu.php');?>

<div class="main-content">
<div class="wrapper">
             <h1>Add Admin</h1>

                 <br/> </br>  
                 
                 <?php

                  if (isset($_SESSION['add']))//checkeing wether the session is set or not
                    {
                     echo $_SESSION['add'];// displaying session message
                    unset ($_SESSION['add']);//removing session message
                    }
                 ?>
                

             <form action="" method="post">
                 <table class="tbl-30">

                 <tr>
                     <td>Full Name: </td>
                     <td> 
                         <input type="text" name ="full_name" placeholder="Enter Your Name">
                     </td>
                 </tr>

                 <tr>
                     <td> Username: </td>
                     <td>
                     <input type="text" name ="username" placeholder="Your Username">
                          </td>
                 </tr>

                 <tr>
                     <td>Password: </td>
                     <td> 
                     <input type="password" name ="password" placeholder="Your Password">
                     </td>
                 </tr>

                 <tr>

                 </tr>
                 <td colspan="2">
                 <input type="submit" name ="submit" value="Add Admin" class="btn-secondary">
                 </td>

                 </table>
</form>

</div>
</div>


<?php include('partials/footer.php');?>


<?php
//process the value from form and save it in database
//check wether the submit button is clicked or not

if (isset($_POST['submit']))
{
    //button clicked

    //1.get the data from form
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);//password encryption with md5

    //2. SQL Query to save the data into Database
    $sql="INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password'
    ";

   

}
//3.Executing Query and saving data into database

$res=mysqli_query($conn,$sql) or die(mysqli_error());

//4.check wether the(query is executed) data is inserted or not and display appropriate message
if($res==TRUE)
{//Data inserted 
    //create a session variable to displat message
    $_SESSION['add'] ="Admin Added Successfully";
    //Redirect page to Manage Admin
    header("location:".SITEURL.'admin/manage-admin.php');
}
else
{// failed to insert data
    //create a session variable to display message
    $_SESSION['add'] ="Failed to Add Admin";
  //Redirect page to Manage Admin
  header("location:".SITEURL.'admin/manage-admin.php');

}

?>