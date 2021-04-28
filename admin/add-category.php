<?php include('partials/menu.php');?>

<div class="main-content">
<div class="wrapper">
             <h1>Add Category</h1>

                 <br/> </br> 


                 <?php

                     if (isset($_SESSION['add']))//checkeing wether the session is set or not
                    {
                     echo $_SESSION['add'];// displaying session message
                     unset ($_SESSION['add']);//removing session message
                     }
                  ?>

                <br/> </br> 
            <!--Add category form starts-->
            <form action="" method="post">
                 <table class="tbl-30">

                 <tr>
                     <td>Title: </td>
                     <td> 
                         <input type="text" name ="title" placeholder="Category Title">
                     </td>
                 </tr>

                 <tr>
                     <td>Featured: </td>
                     <td> 
                         <input type="radio" name ="featured" value="yes">yes
                         <input type="radio" name ="featured" value="no">no
                     </td>
                 </tr>

                 <tr>
                     <td>Active: </td>
                     <td> 
                         <input type="radio" name ="featured" value="yes">yes
                         <input type="radio" name ="featured" value="no">no
                     </td>
                 </tr>

                 <tr>
                     <td colspan="2">
                         <input type="submit" name ="submit" value="Add Category" class="btn-secondary">
                     </td>
                 </tr>
             </table>
         </form>
            <!--Add category form ends-->
            <?php

              //check wether the submit button is clicked or not

             if (isset($_POST['submit']))
                {
              //button clicked

              //1.get the value from category form
              $title=$_POST['title'];

              // for radio input, we need to check wether the button is selected or not
              if (isset($_POST['featued']))
              {
              //get the value from form
              $title=$_POST['featured'];
              }
              else{
                  // set the default value
                  $featured="No";
              }
              if (isset($_POST['active']))
              {
                $active=$_POST['active'];
              }
              else
              {
                  $active="No";
              }
              //2.Create sql query to insert category into database
              $sql="INSERT INTO tbl_category SET
                title='$title',
                featured='$featured',
                active='$active'
                ";

              //3.Executing Query and saving data into database

              $res=mysqli_query($conn,$sql);

              //4.check wether the query is executed or not and data added or not
              if($res==TRUE)
              {
                  //Query executed and category added
                  $_SESSION['add'] ="<div class ='succes' >Category Added Successfully.</div>";
                   //Redirect page to Manage Admin
                    header("location:".SITEURL.'admin/manage-category.php');
                   }
              else{
                  //failed to add category
                  $_SESSION['add'] ="<div class ='error' > Failed to add Category.</div>";
                  //Redirect page to Manage Admin
                   header("location:".SITEURL.'admin/add-category.php');
              }
                }       
            ?>

  </div>
</div>

<?php include('partials/footer.php');?>
