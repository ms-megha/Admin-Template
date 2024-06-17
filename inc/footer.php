<!-- Content Wrapper END -->

<!-- Footer START -->
<footer class="footer">
    <div class="footer-content text-center">
        <p class="m-b-0" style="margin: 0 auto;">Copyright © 2022 365Softwares. All rights reserved.</p>
        <!-- <span>
            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
            <a href="" class="text-gray">Privacy &amp; Policy</a>
        </span> -->
    </div>
</footer>
<!-- Footer END -->

</div>
</div>
</div>


<!-- Core Vendors JS -->
<script src="assets/js/vendors.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/datatables/js/dataTables.responsive.min.js"></script>
<script src="assets/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="assets/datatables/js/dataTables.buttons.min.js"></script>
<!-- page js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script> -->
<!-- <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script> -->
<!-- <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script> -->
<!-- <script src="assets/vendors/chartjs/Chart.min.js"></script> -->

<!-- Core JS -->
<script src="assets/js/app.min.js"></script>
<script>

  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "ordering": false,
      "lengthChange": false,
      "searching": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "pageLength": 10,
    });
    $('#example2').DataTable({
      "paging": true,
      "ordering": false,
      "lengthChange": false,
      "searching": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "pageLength": 10,
      
    //   "buttons": ["pdf"]
    });
    
  });



</script>
</body>

</html>
