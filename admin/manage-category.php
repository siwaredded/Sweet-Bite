<?php include('partials/menu.php');?>

<!--main section starts-->
<div class="main-content">
<div class="wrapper">
             <h1>Manage category</h1>
             <br/> </br/>

             <?php

                 if (isset($_SESSION['add']))//checkeing wether the session is set or not
               {
                echo $_SESSION['add'];// displaying session message
                unset ($_SESSION['add']);//removing session message
               }
             ?>
             <br/> </br/>

             <!--Button to Add Admin-->
             <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
             <br/> </br/> <br/> 
             
             <table class="tbl-full">
              <tr>
                 <th>S.N</th>
                 <th>Full Name</th>
                 <th>Username</th>
                 <th>Actions</th>
              </tr>
               
               <tr>
                  <td>1.</td>
                  <td>siwar edded</td>
                  <td>siwar</td>
                  <td>
                  <a href="#"class="btn-secondary">Update Admin</a> 
                  <a href="#"class="btn-danger">Delete Admin</a>
                  </td>
               </tr>

               <tr>
                  <td>2.</td>
                  <td>soulayma mansouri</td>
                  <td>soulayma</td>
                  <td>
                  <a href="#"class="btn-secondary">Update Admin</a> 
                  <a href="#"class="btn-danger">Delete Admin</a>
                  </td>
               </tr>

               <tr>
                  <td>3.</td>
                  <td>yosra oueslaty</td>
                  <td>yosra</td>
                  <td>
                  <a href="#"class="btn-secondary">Update Admin</a> 
                  <a href="#"class="btn-danger">Delete Admin</a>
                  </td>
               </tr>
</table>
             
</div>
</div>
<!--main section ends-->

<?php include('partials/footer.php');?>