<?php include 'inc/header.php'; ?>
<?php include 'inc/aside.php'; ?>
<?php include 'inc/db.php'; ?>

<style>
  .dashboard-heading {
    display: flex;
    justify-content: space-between;
    padding-bottom: 15px;
  }

  .filter-btn {
    background-color: white;
    color: #333;
    border: 1px solid grey;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    outline: none;
  }

  table {
    text-align: center;
  }

  th,
  td {
    text-align: center;
  }
</style>

<div class="page-container">
  <div class="main-content">
    <div class="dashboard-heading">
      <h2>Male Users</h2>
      <button type="button" class="filter-btn" onclick="filterByDate()">Filter by Date <i style="color: black" class="fa-solid fa-angle-right"></i></button>
    </div>
    <!-- show Male User -->
    <div class="table-responsive">
      <table id="ex_table" class="table table-bordered">
        <thead>
          <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>About</th>
            <th>Date of Birth</th>
            <th>Phone Number</th>
            <th>Number Of Coins</th>
            <th>Hobbies</th>
            <th>User Image</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          $user_query = "SELECT * FROM male_user ORDER BY `user_id` DESC";
          $user_result = mysqli_query($conn, $user_query);
          foreach ($user_result as $user) { ?>
            <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['user_name']; ?></td>
            <td><?php echo $user['user_about']; ?></td>
            <td><?php echo $user['user_dob']; ?></td>
            <td><?php echo $user['phone_no']; ?></td>
            <?php $user_id = $user['phone_no'];
             $coins_query = "SELECT * FROM male_user_wallet Where user_id = '$user_id'" ;
            $coins_result = mysqli_query($conn, $coins_query);
            $coins = mysqli_fetch_assoc($coins_result);
             ?>
            <td><?php echo $coins['coins']; ?></td>
           <?php 
           $hobbies_query = "SELECT * FROM male_hobbies WHERE user_id = '$user_id'"; 
           $hobbies_result = mysqli_query($conn, $hobbies_query);?>
              <td><?php while($hobbies = mysqli_fetch_assoc($hobbies_result)){echo $hobbies['hoby_name'].',';}?></td>
            

           <td><img src='user_images/" . <?php echo $user['user_image'] ?>"' alt='User Image' style='max-width: 100px;'></td>
          </tr>
          <?php }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include 'inc/footer.php'; ?>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $("#ex_table").DataTable({
      paging: true,
      ordering: false,
      lengthChange: false,
      searching: true,
      info: false,
      autoWidth: false,
      responsive: true,
      pageLength: 10
    });
  });

  function filterByDate() {
    var startDate = prompt("Enter start date (YYYY-MM-DD):");
    var endDate = prompt("Enter end date (YYYY-MM-DD):");
    $("#ex_table tbody tr").each(function() {
      var dateOfBirth = $(this).find("td:eq(3)").text();
      if (dateOfBirth >= startDate && dateOfBirth <= endDate) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }
</script>
