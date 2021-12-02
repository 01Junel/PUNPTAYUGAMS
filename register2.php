<?php
session_start();

  if (!isset($_SESSION['u_id'])) {
      header('Location: login.php');
  }
include('includes/header.php'); 
include('includes/navbar.php'); 
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
      <form  method="POST" action="includes/signup.inc.php">
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
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

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

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> EmpID </th>
            <th> Username </th>
            <th>Email </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <?php
                $con=mysqli_connect("localhost","root","","ams");
                $result = mysqli_query($con,"SELECT * FROM users");
                     ?>
            
            <?php while($row = mysqli_fetch_array($result)): ?>
               <td><?php echo $row['empid'];?></td>
               <td><?php echo $row['username'];?></td>
               <td><?php echo $row['email'];?></td>
               <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
               </td>
          </tr>

        <?php endwhile;?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
<!--Password Checking-->
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
<!--<script>
    $(document).ready(function(){
        var $submitBtn = $("#form input[type='submit']");
        var $passwordBox = $("#password");
        var $confirmBox = $("#confirmpassword");
        var $errorMsg =  $('<span style="color:red;" id="error_msg">Passwords do not match.</span>');

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        $submitBtn.removeAttr("disabled");

        function checkMatchingPasswords(){
            if($confirmBox.val() != "" && $passwordBox.val != ""){
                if( $confirmBox.val() != $passwordBox.val() ){
                    $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($confirmBox);
                }
            }
        }

        function resetPasswordError(){
            $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }  
        }


        $("#confirm_password, #password")
             .on("keydown", function(e){
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkMatchingPasswords();
                }
             })
             .on("blur", function(){                    
                // also check when the element looses focus (clicks somewhere else)
                checkMatchingPasswords();
            })
            .on("focus", function(){
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
  </script>-->
 <?php
include('includes/footer.php'); 
include('includes/scripts.php'); 
?>
   
    