<!-- <?php
use App\Core\AuthService;
$userRole = AuthService::isAuthenticated();

if (!$userRole === 'admin') {
    // echo "JWT Cookie not set!";
    header("Location: /login");
}

?>   
 -->
<?php include __DIR__ . "/../parties/_headerOrganisateur.php" ?>

<body class="bg-theme bg-theme16">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include __DIR__ . "/../parties/_sideBarOrganisateur.php" ?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include __DIR__ . "/../parties/_navbarOrganisateur.php" ?>
		<!--end header -->
		<script>
    $(document).ready(function() {
         $.ajax({
            url: "/ajax/load_page",
            type: "GET",
            data: { page: "ManageEvent" },
            success: function(response) {
                $("#content").html(response);
            },
            error: function() {
                $("#content").html("<h3>Error loading page</h3>");
            }
        });

        $(".nav-link").click(function(e) {
            e.preventDefault();
            var page = $(this).data("page");

            $.ajax({
                url: "/ajax/load_page",
                type: "GET",
                data: { page: page },
                success: function(response) {
                    $("#content").html(response);
                },
                error: function() {
                    $("#content").html("<h3>Error loading page</h3>");
                }
            });
        });
    });
</script>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--end row-->
				<div class="card radius-10" id="content">
				 
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bxs-up-arrow-alt bx'></i></a>
  
	</div>
	<!--end wrapper-->
 
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="/assetsOrg/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="/assetsOrg/js/jquery.min.js"></script>
	<script src="/assetsOrg/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/assetsOrg/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/assetsOrg/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="/assetsOrg/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/assetsOrg/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="/assetsOrg/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		});
	</script>
	<script src="/assetsOrg/js/index.js"></script>
	<!--app JS-->
	<script src="/assetsOrg/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

</html>