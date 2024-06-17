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
</style>
<!-- Page Container START -->
<div class="page-container">
  <!-- Content Wrapper START -->
  <div class="main-content">

        <!-- dashboard Filter start -->
        <div class="dashboard-heading">
            <h2>Earnings</h2>
            <button type="button" class="filter-btn">
                Filter by Date
                <i style="color: black" class="fa-solid fa-angle-right"></i>
            </button>
        </div>

        <div class="m-t-30" style="width: 100%;">
          <div class="table-responsive">
            <table id="example2" class="table table-bordered">
              <thead>
                <tr>
                  <th>Appointment Date</th>

                  <th>ID</th>
                  <th>Patient Details</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2023</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black;">Megha Sadhukhan</p>
                    <p style="color: black;">megha@gnmail.com</p>
                    <p style="color: black;">123456789</p>
                    <p style="color: black;">Female, 23 years, 2month 13days</p>
                    <p style="color: black;">chakdaha</p>
                  </td>

                  <td>Rs. 500/-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

    </div>
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

