<?php include 'inc/header.php'; ?>
<?php include 'inc/aside.php'; ?>
<?php include 'connection.php'; ?>

<div class="page-container">
  <div class="main-content">
   <!-- Add user form start -->
    <h2>Add Female User</h2>
    <form action="category_insert.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="user_name" class="form-label">User Name</label>
            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" required>
        </div>
        <div class="mb-3">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
        </div>
        <div class="mb-3">
            <label for="hobbies" class="form-label">Hobbies</label>
            <textarea class="form-control" id="hobbies" name="hobbies" rows="3" placeholder="Hobbies"></textarea>
        </div>
        <div class="mb-3">
            <label for="user_image" class="form-label">User Image</label>
            <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Add user form end -->
  </div>

  <?php include 'inc/footer.php'; ?>
</div>
