
<?php include('partials/menu.php');?>

<!--main section starts-->
<div class="main-content">
<div class="wrapper">
             <h1>Manage Admin</h1>

             <br/> 


             <?php

                 if (isset($_SESSION['add']))//checkeing wether the session is set or not
                  {
                    echo $_SESSION['add'];// displaying session message
                   unset ($_SESSION['add']);//removing session message
                      }
              ?>
              <br/> <br/> 
            
             <!--Button to Add Admin-->
             <a href="add-admin.php"class="btn-primary">Add Admin</a>
             <br/> </br/> <br/> 
             
             <table class="tbl-full">
              <tr>
                 <th>S.N</th>
                 <th>Full Name</th>
                 <th>Username</th>
                 <th>Actions</th>
              </tr>

              <?php
             

             //Query to get all Admin
             $sql="SELECT * FROM tbl_admin";
             //Execute the Query
             $res=mysqli_query($conn,$sql);

             //check wether the query is executed or not 
             if($res=TRUE)
             {
                //count rows to check wether we have data in database or not
                $counts=mysqli_num_rows($res);//function to get all the rows in database
                $sn=1;

                //check the num of rows
                if($counts<0)
                {//we have data in data base
                  while($rows=mysqli_fetch_assoc($res))
                  {
                     //using while loop to get all the data from database
                     //while loop will run as long as we have data in database

                     // get individual data
                     $id=$rows['id'];
                     $full_name=$rows['full_name'];
                     $username=$rows['username'];
                      //display the values in our table
                      ?>
                        <tr>
                          <td><?php echo $sn++; ?></td>
                          <td><?php echo $full_name; ?></td>
                         <td><?php echo $username; ?></td>
                          <td>
                          <a href="#"class="btn-secondary">Update Admin</a> 
                          <a href="#"class="btn-danger">Delete Admin</a>
                          </td>
                          </tr>
                     <?php
                  }
               }
               else
               {
                  //we do not have data in data base
               }
            }
            ?>
             
</table>
</div>
</div>
<!--main section ends-->

<?php include('partials/footer.php');?>
