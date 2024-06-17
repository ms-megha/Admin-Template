<?php include 'inc/header.php'; ?>
<?php include 'inc/aside.php'; ?>
<?php include 'connection.php'; ?>
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
<div class="page-container">
  <div class="main-content">
  <div class="dashboard-heading">
      <h2>Male Users</h2>
      <button type="button" class="filter-btn" onclick="filterByDate()">
        Filter by Date
        <i style="color: black" class="fa-solid fa-angle-right"></i>
      </button>
    </div>
    <div class="m-t-30" style="width: 100%;">
          <div class="table-responsive">
            <table id="example2" class="table table-bordered">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>ID</th>
                  <th>Interaction Details</th>
                  <th>Grievance</th>
                  <th>Show Details</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-01-2024</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Female, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                  <td><a href="specific_maleUser.php" class="btn btn-success">View Details</a>
</td>
                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2023</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Female, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                  <td><a href="specific_maleUser.php" class="btn btn-success">View Details</a>
</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2023</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Female, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                  <td><a href="specific_maleUser.php" class="btn btn-success">View Details</a>
</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-05-2021</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Female, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                  <td><a href="specific_maleUser.php" class="btn btn-success">View Details</a>
</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2022</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Female, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                  <td><a href="specific_maleUser.php" class="btn btn-success">View Details</a>
</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-03-2024</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Female, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                  <td><a href="specific_maleUser.php" class="btn btn-success">View Details</a>
</td>

                </tr>
              </tbody>
            </table>
          </div>
        </div>

  </div>

  <?php include 'inc/footer.php'; ?>
  <script src="assets/js/pages/dashboard-crm.js"></script>
  <script type="text/javascript">
    // $("#ex_table").DataTable({
    //   paging: true,
    //   ordering: false,
    //   lengthChange: false,
    //   searching: true,
    //   info: false,
    //   autoWidth: false,
    //   responsive: true,
    //   pageLength: 10,
    // });
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
