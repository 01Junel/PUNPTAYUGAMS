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
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> RFID </label>
                <input type="number" name="fname" class="form-control" placeholder="Enter RFID Number">
            </div>

            <div class="form-group">
                <label> SchID </label>
                <input type="text" name="fname" class="form-control" placeholder="Enter SchoolID Number">
            </div>

            <div class="form-group">
                <label> Middle Name </label>
                <input type="text" name="mname" class="form-control" placeholder="Enter Middle name">
            </div>

            <div class="form-group">
                <label> Last Name </label>
                <input type="text" name="lname" class="form-control" placeholder="Enter Last name">
            </div>

            <div class="form-group">
                <label> Year/Grade </label>
                <input type="text" name="year" class="form-control" placeholder="Enter Year/Grade">
            </div>
            <div class="form-group">
                <label>Course / Strand</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Course/Strand">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label>Guardian</label>
                <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Guardian">
            </div>
            <div class="form-group">
                <label>Contact #</label>
                <input type="number" name="address" class="form-control" placeholder="Enter Guardian Contact #">
            </div>
            <div class="form-group">
                <label>Birthdate</label>
                <input type="date" name="address" class="form-control" placeholder="Enter Birthdate">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">SeniorHigh Students 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add New Student
            </button>
    </h6>
  </div>

  <div class="card-body">

    <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            SeniorHigh Data Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th> Image </th>
                      <th> RFID </th>
                      <th> SchID </th>
                      <th> First Name </th>
                      <th> Middle Name </th>
                      <th> Last Name </th>
                      <th> Year/Grade </th>
                      <th> Course/Strand </th>
                      <th> Birthday </th>
                      <th>EDIT </th>
                      <th>DELETE </th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th> Image </th>
                    <th> RFID </th>
                    <th> SchID </th>
                    <th> First Name </th>
                    <th> Middle Name </th>
                    <th> Last Name </th>
                    <th> Year/Grade </th>
                    <th> Course/Strand </th>
                    <th> Birthday </th>
                    <th>EDIT </th>
                    <th>DELETE </th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                     <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                          <input type="hidden" name="edit_id" value="">
                          <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                      </form>
                    </td>
                    <td>
                        <form action="" method="post">
                          <input type="hidden" name="delete_id" value="">
                          <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Tiger Nixon</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Tiger Nixon</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Tiger Nixon</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Tiger Nixon</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Tiger Nixon</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Tiger Nixon</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Tiger Nixon</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Tiger Nixon</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                    <td>Tiger Nixon</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Jena Gaines</td>
                    <td>Tiger Nixon</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Quinn Flynn</td>
                    <td>Tiger Nixon</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  <tr>
                    <td>Charde Marshall</td>
                    <td>Tiger Nixon</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                      <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                       </form>
                    </td>
                    <td>
                      <form action="" method="post">
                        <input type="hidden" name="delete_id" value="">
                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                      </form>
                   </td>
                  </tr>
                  

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
    
</body>

</html>