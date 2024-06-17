<?php include 'inc/header.php'; ?>
<?php include 'inc/aside.php'; ?>
<?php include 'connection.php'; ?>

<style>
    .card {
    background-color: #ef4765;
  }
  .card-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
</style>
<div class="page-container">
  <div class="main-content">
  <div class="dashboard-heading">
      <h2>Female Users</h2>
      
    </div>
    
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
                  Video Call Minutes
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                  Voice Call Minutes
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                    No Of Cancel Calls
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                No Of Attend Calls
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                No Of Coin Earned
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                  Total Transaction
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                    <p style="color: black; margin-bottom: 0px;">Male, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>
                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2023</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Male, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2023</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Male, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-05-2021</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Male, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-10-2022</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Male, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>

                </tr>
                <tr class="odd">
                  <td class="dtr-control" tabindex="0">12-03-2024</td>
                  <td>12345</td>

                  <td>
                    <p style="color: black; margin-bottom: 0px;">Melody Sunshine</p>
                    <p style="color: black; margin-bottom: 0px;">melodysunshine@gmail.com</p>
                    <p style="color: black; margin-bottom: 0px;">123456789</p>
                    <p style="color: black; margin-bottom: 0px;">Male, 23 years, 2month 13days</p>
                    <p style="color: black; margin-bottom: 0px;">Mumbai</p>
                  </td>
                  <td>Grievance</td>

                </tr>
              </tbody>
            </table>
          </div>
        </div>

  </div>
  <?php include 'inc/footer.php'; ?>
</div>
