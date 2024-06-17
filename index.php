<?php //include 'config.php'; ?>
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
  .card {
    background-color: #ef4765;
  }
  .card-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .Today-appoinment {
    text-align: center;
    margin: 20px 0;
    display: flex;
    align-items: center;
  }

  .Today-appoinment h2 {
    margin-bottom: 10px;
  }

  .Today-appoinment a {
    color: blue;
    text-decoration: none;
    font-size: 18px;
  }

  .Today-appoinment a i {
    color: black;
    margin-left: 5px;
  }


.status-select {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px;
    width: 100%;
    font-size: 14px;
    background-color: #fff;
}

.status-select option {
    background-color: #fff;
    color: #333;
}

.status-select:hover {
    border-color: #999;
}

.status-select:focus {
    border-color: #555;
    outline: none;
}
table {
    text-align: center;
  }
  th, td {
    text-align: center;
  }
</style>
<!-- Page Container START -->
<div class="page-container">
  <!-- Content Wrapper START -->
  <div class="main-content">
    <!-- dashboard Filter start -->
    <div class="dashboard-heading">
      <h2>Dashboard</h2>
      <button type="button" class="filter-btn" onclick="filterByDate()">
        Filter by Date
        <i style="color: black" class="fa-solid fa-angle-right"></i>
      </button>
    </div>
    <!-- dashboard Filter end -->
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="card e_b_card card">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="card-info">
                <h2 class="m-b-0 text_color">
                  <span style="color: white" class="text_color"
                    >12<?php //echo $student_row['s_id']; ?></span
                  >
                </h2>
                <p style="color: white" class="m-b-0 text_color">
                  Total Male User
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card e_b_card">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="card-info">
                <h2 class="m-b-0 text_color">
                  <span style="color: white" class="text_color"
                    >12<?php //echo $s_count; ?></span
                  >
                </h2>
                <p style="color: white" class="m-b-0 text_color">
                  Total Female User
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card e_b_card">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="card-info">
                <h2 class="m-b-0 text_color">
                  <span style="color: white" class="text_color"
                    >12<?php //echo $s_count; ?></span
                  >
                </h2>
                <p style="color: white" class="m-b-0 text_color">
                  Active Female User
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card e_b_card">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="card-info">
                <h2 class="m-b-0 text_color">
                  <span style="color: white" class="text_color">
                    <i
                      style="color: white"
                      class="fa-solid fa-indian-rupee-sign"
                    ></i>
                    8100<?php //echo $s_count; ?></span
                  >
                </h2>
                <p style="color: white" class="m-b-0 text_color">
                  Pending Payment
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card e_b_card">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="card-info">
                <h2 class="m-b-0 text_color">
                  <span style="color: white" class="text_color">
                    810<?php //echo $s_count; ?></span
                  >
                </h2>
                <p style="color: white" class="m-b-0 text_color">
                  Number Of Agents
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="Today-appoinment">
        <h2>Today's Pending Payment</h2>
        <a style="margin-left: 37rem" href=""
          >View All <i class="fa-solid fa-angle-right"></i
        ></a>
      </div>

      <!--  table start -->

      <div class="m-t-30" style="width: 100%">
        <div class="table-responsive">
          <table id="example2" class="table table-bordered">
            <thead>
              <tr>
                <th>Date</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Agent Name</th>
                <th>Pending Amount</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <td class="dtr-control" tabindex="0">12-10-2023</td>
                <td>12345</td>

                <td>Megha Sadhukhan</td>

                <td>Agent Name</td>
                <td>1000</td>
                <td>
                        <select  class="status-select">
                            <option value="pending">Pending</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </td>
              </tr> 
              <tr class="odd">
                <td class="dtr-control" tabindex="0">12-10-2024</td>
                <td>12345</td>

                <td>Megha Sadhukhan</td>

                <td>Agent Name</td>
                <td>1000</td>
                <td>
                        <select class="status-select">
                            <option value="pending">Pending</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </td>
              </tr>
            </tbody>
          </table>
        </div> 
      </div>
      <!--  table end -->


    </div>
    <div class="row" style="display: none">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Overall Rating</h5>
            </div>
            <div class="d-flex align-items-center m-t-20">
              <h1 class="m-b-0 m-r-10 font-weight-normal">4.5</h1>
              <div class="star-rating m-t-15">
                <input
                  type="radio"
                  id="star1-5"
                  name="rating-1"
                  value="5"
                  checked
                  disabled
                /><label for="star1-5" title="5 star"></label>
                <input
                  type="radio"
                  id="star1-4"
                  name="rating-1"
                  value="4"
                  disabled
                /><label for="star1-4" title="4 star"></label>
                <input
                  type="radio"
                  id="star1-3"
                  name="rating-1"
                  value="3"
                  disabled
                /><label for="star1-3" title="3 star"></label>
                <input
                  type="radio"
                  id="star1-2"
                  name="rating-1"
                  value="2"
                  disabled
                /><label for="star1-2" title="2 star"></label>
                <input
                  type="radio"
                  id="star1-1"
                  name="rating-1"
                  value="1"
                  disabled
                /><label for="star1-1" title="1 star"></label>
              </div>
            </div>
            <p>
              <span class="text-success font-weight-bold">+1.5</span> point from
              last month
            </p>
            <div class="m-t-30" style="height: 150px">
              <canvas class="chart" id="rating-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="d-md-flex justify-content-between align-items-center">
              <h5>Total Sales</h5>
              <div class="d-flex">
                <div class="m-r-10">
                  <span class="badge badge-secondary badge-dot m-r-10"></span>
                  <span class="text-gray font-weight-semibold font-size-13"
                    >Revenue</span
                  >
                </div>
                <div class="m-r-10">
                  <span class="badge badge-purple badge-dot m-r-10"></span>
                  <span class="text-gray font-weight-semibold font-size-13"
                    >Margin</span
                  >
                </div>
              </div>
            </div>
            <div class="m-t-50" style="height: 225px">
              <canvas class="chart" id="sales-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Monthly Target</h5>
            </div>
            <div
              class="d-flex align-items-center position-relative m-v-50"
              style="height: 150px"
            >
              <div
                class="w-100 position-absolute"
                style="height: 150px; top: 0"
              >
                <canvas class="chart m-h-auto" id="porgress-chart"></canvas>
              </div>
              <h2
                class="w-100 text-center text-large m-b-0 text-success font-weight-normal"
              >
                $3,531
              </h2>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <span class="badge badge-success badge-dot m-r-10"></span>
              <span
                ><span class="font-weight-semibold">70%</span> of Your
                Goal</span
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="display: none">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Today Booking</h5>
              <div>
                <!-- <a href="order-history.php" class="btn btn-sm btn-default">View All</a> -->
              </div>
            </div>
            <div class="m-t-30">
              <div class="table-responsive">
                <table id="ex_table" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>For the Month</th>
                      <th>Hotel Details</th>
                      <th>No. of Students</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="11" class="text-center">No Data Found!</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page Container END -->

  <!-- Quick View START -->
  <?php include 'inc/footer.php'; ?>
  <script src="assets/js/pages/dashboard-crm.js"></script>
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
    function filterByDate() {
    var startDate = prompt("Enter start date (DD-MM-YYYY):");
    var endDate = prompt("Enter end date (DD-MM-YYYY):");

    $("#example2 tbody tr").each(function() {
      var date = $(this).find("td:eq(0)").text(); 
      if (isDateInRange(date, startDate, endDate)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }
  function isDateInRange(date, startDate, endDate) {
    var dateObj = new Date(date.split("-").reverse().join("-"));
    var startObj = new Date(startDate.split("-").reverse().join("-"));
    var endObj = new Date(endDate.split("-").reverse().join("-"));

    return dateObj >= startObj && dateObj <= endObj;
  }
  </script>
</div>
