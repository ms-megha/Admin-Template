<?php
// include_once('config.php');
// $obj = new Doctorbooking();
// $get_bookings = $obj->get_all_bookings(); ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/aside.php'; ?>
<style>
      .dashboard-heading {
    display: flex;
    justify-content: space-between;
    padding-bottom: 15px;
  }
  .filter-btn {
    background-color: white;
    color: #333;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border: 1px solid grey;
    transition: background-color 0.3s ease;
    ouutline: none;
  }
</style>
<!-- Page Container START -->
<div class="page-container">
  <!-- Content Wrapper START -->
  <div class="main-content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="h5">
                <?php // echo $num ?>
                Bookings Management
                <div style="font-size: 10px"><?php // echo $num ?></div>
              </h5>

              <div>
                <!-- <a href="order-history.php" class="btn btn-sm">+ Add New Hoteml</a> -->
                <!--<a href="add-degree.php"><button class="btn btn-primary">+ Add New Degree</button></a> -->
              </div>
            </div>

            <div class="dashboard-heading">
            <h2>Earnings</h2>
            <button type="button" class="filter-btn">
                Filter by Date
                <i style="color: black" class="fa-solid fa-angle-right"></i>
            </button>
        </div>
            <div class="m-t-30">
              <div class="table-responsive">
                <table id="example2" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Booking ID</th>

                     
                      <th>Appointment</th>
                      <th>Patient Name</th>
                      <th>Patient Number</th>
                      <th>Patient Age</th>
                      <th>Patient Gender</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td class="dtr-control" tabindex="0">1245679812</td>
                      <td>
                        Date: 22-03-2024 <br />
                        Time: 10:00 AM
                      </td>

                      <td>PAPAI</td>
                      <td>9123636160</td>
                      <td>25</td>
                      <td>Male</td>
                      <td><a href="patient_details.php"><button class="btn btn-primary">View More</button></a></td>
                    </tr>
                    <tr class="even">
                      <td class="dtr-control" tabindex="0">492827185</td>
                     
                      <td>
                        Date: 23-03-2024 <br />
                        Time: 10:00 AM
                      </td>

                      <td>Prasun jana</td>
                      <td>9123636160</td>
                      <td>26</td>
                      <td>Male</td>
                      <td><button class="btn btn-primary">View More</button></td>
                    </tr>
                    <tr class="odd">
                      <td class="dtr-control" tabindex="0">1513419274</td>
                     
                      <td>
                        Date: 04-04-2024 <br />
                        Time: 4:35 PM
                      </td>

                      <td>Sayandeep</td>
                      <td>8777636501</td>
                      <td>28</td>
                      <td>Male</td>
                      <td><button class="btn btn-primary">View More</button></td>
                    </tr>
                    <tr class="even">
                      <td class="dtr-control" tabindex="0">1579424337</td>
                     
                      <td>
                        Date: 01-04-2024 <br />
                        Time: 10:00 AM
                      </td>

                      <td>Ab ab</td>
                      <td>1234567890</td>
                      <td>65</td>
                      <td>Male</td>
                      <td><button class="btn btn-primary">View More</button></td>                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //col-md-12 -->
    </div>
    <!-- //row -->
  </div>

  <!-- Page Container END -->

  <!-- Quick View START -->
  <?php include 'inc/footer.php'; ?>
  <!--<script src="assets/js/pages/dashboard-crm.js"></script>-->

  <script type="text/javascript">
    $("#ex_table").DataTable({
      paging: false,
      ordering: false,
      lengthChange: false,
      searching: false,
      info: false,
      autoWidth: false,
      responsive: true,
      pageLength: 10,
    });
  </script>
</div>
