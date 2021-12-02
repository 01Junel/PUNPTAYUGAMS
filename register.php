<?php

 session_start();

  if (!isset($_SESSION['u_id'])) {
      header('Location: login.php');
  }

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php
       /* include('./includes/db.inc.php');
        include('/includes/function.inc.hp.php');
        if(isset($_POST["submit"]))
        {
          $password = mysqli_real_escape_string($conn, $_POST['password']);
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          $statement = $connection->prepare("
           INSERT INTO users (empid, fname, mname, lname, username, email, pass)
           VALUES (:empid, :fname, :mname, :lname, :username, :email, :pass)
          ");
          $result = $statement->execute(
           array(
            ':empid'    => $_POST["empid"],
            ':fname'    => $_POST["fname"],
            ':mname'    => $_POST["mname"],
            ':lname'    => $_POST["lname"],
            ':username' => $_POST["username"],
            ':email'    => $_POST["email"],
            ':pass'     => password_hash($password, PASSWORD_DEFAULT),
           )
          );
          if(!empty($result))
          {
              $message = "Data Inserted";
              echo "<script type='text/javascript'>alert('$message');</script>";
          }
          else{
            echo "\nPDOStatement::errorCode(): ";
        print $statement->errorCode();
            echo "\nPDO::errorCode(): ", $statement->errorCode();
            echo "\nPDO::errorInfo():\n";
           print_r($statement->errorInfo());
          }
         }*/

?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" action="register.php">
          <!--action="{{ route('login') }}"-->
        <div class="modal-body">

            <div class="form-group{{ $errors->has('empid') ? ' has-error' : '' }}">
                <label for="empid" class="col-md-4 control-label">Employee ID No.</label>
                <input id="empid" type="number" class="form-control" name="empid" placeholder="Enter Employee Id Number" required autofocus>
                      
                <span class="help-block">
                  <strong> </strong>
                </span>
            </div>

            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                <label for="fname" class="col-md-4 control-label"> First Name </label>
                <input id="fname" type="text" name="fname" class="form-control" placeholder="Enter First name"  required autofocus>

                <span class="help-block">
                        <strong> </strong>
                </span>
            </div>

            <div class="form-group{{ $errors->has('mname') ? ' has-error' : '' }}">
                <label for="mname" class="col-md-4 control-label"> Middle Name </label>
                <input id="mname" type="text" name="mname" class="form-control" placeholder="Enter Middle name" required autofocus>

                <span class="help-block">
                        <strong> </strong>
                </span>
            </div>

            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                <label for="lname" class="col-md-4 control-label"> Last Name </label>
                <input id="lname" type="text" name="lname" class="form-control" placeholder="Enter Last name" required autofocus>

                <span class="help-block">
                        <strong> </strong>
                </span>
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="col-md-4 control-label"> Username </label>
                <input id="username" type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email" required autofocus>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input id="password" type="password" name="password" class="form-control" placeholder="Enter Password" minlength="8" required autofocus>
            </div>
            <div class="form-group{{ $errors->has('confirmpassword') ? ' has-error' : '' }}">
                <label for="confirmpassword" class="col-md-4 control-label">Confirm Password</label>
                <input id="confirmpassword" type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password"  minlength="4" required autofocus>

                <div id="msg"></div>
            </div>
        
        </div>
        <!--<div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </div>-->
        <div class="modal-footer">
          <input type="hidden" name="user_id" id="user_id" />
          <input type="hidden" name="operation" id="operation" />
          <button type="submit" name="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </form>

    </div>
  </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Users 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin
            </button>
    </h6>
  </div>

  <div class="card-body">

    <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Admin Users Data Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th> Employee ID </th>
                      <th> Username </th>
                      <th> Email </th>
                      <th> Delete </th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th> Employee ID </th>
                      <th> Username </th>
                      <th> Email </th>
                      <th> Delete </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Last Updated
             <?php date_default_timezone_set("Asia/Manila");
              $time = Time();
              $actual_Time = date('H:i:s', $time);
              $Dtd = date('M d Y');
              $Fdtd = date('Y-m-d');
              $DoW = date('l');
              
              echo $Dtd." ".  $DoW . " at " . $actual_Time;
              ?>

              </div>
        </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
              $(document).ready(function(){
                  $("#confirmpassword").keyup(function(){
                       if ($("#password").val() != $("#confirmpassword").val()) {
                           $("#msg").html("Password do not match").css("color","red");
                       }else{
                           $("#msg").html("Password matched").css("color","green");
                      }
                });
        });
    </script> 

    

     <!-- Bootstrap core JavaScript-->
  <script src="./vendor2/jquery/jquery.min.js"></script>
  <script src="./vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./vendor2/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="./vendor2/datatables/jquery.dataTables.js"></script>
  <script src="./vendor2/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="./js2/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="./js2/demo/datatables-demo.js"></script>

  <script>
        $(document).ready(function(){  

          load_data();
            
          function load_data()
          {
            $.ajax({
              url:"fetch.php",
              method:"POST",
              success:function(data)
              {
                $('#user_data').html(data);
              }
            });
          } 


        });
  </script>
    
</body>

</html>