<?php

use App\Core\AuthService;

if (!AuthService::isAuthenticated()) {
	header("Location: /login");
}
if (!AuthService::hasRole('organisateur')) {
	header("Location: /login");
}

$userRole = AuthService::isAuthenticated();

if (!$userRole === 'organisateur') {
    header("Location: /login");
}

?>  
<?php include __DIR__ . "/../parties/_headerOrganisateur.php" ?>

<body class="bg-theme bg-theme16">
 	<div class="wrapper">
 		<?php include __DIR__ . "/../parties/_sideBarOrganisateur.php" ?>
 		<?php include __DIR__ . "/../parties/_navbarOrganisateur.php" ?>
         <script>
        $(document).ready(function() {
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
			<div class="page-content"  >
				<!--end row-->
				<div class="card radius-10" id="content">
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> 
        <a href="javaScript:;" class="back-to-top">
			<i class='bxs-up-arrow-alt bx'></i></a>
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
	<script src="/assetsOrg/js/organisateur.js"></script>
</body>

</html>
you dont get it this page return this page inside of the body : 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Manage Events</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Organizer ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Price</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="eventTableBody">
         </tbody>
    </table>

    <script>
        $(document).ready(function() {
            fetchEvents();
        });

        function fetchEvents() {
            $.ajax({
                url: "/admin/events",  
                type: "GET",
                dataType: "json",
                success: function(events) {
                    let rows = "";
                    events.forEach(event => {
                        rows += `
                            <tr>
                                <td>${event.id}</td>
                                <td>${event.organizer_id}</td>
                                <td>${event.title}</td>
                                <td>${event.description}</td>
                                <td>${event.location}</td>
                                <td>${event.date}</td>
                                <td>${event.price}</td>
                                <td>${event.status}</td>
                                <td>${event.created_at}</td>
                                <td>
                                    <a href='event_details.php?id=${event.id}'>Details</a> | 
                                    <a href='#' onclick='validateEvent(${event.id})'>Validate</a> | 
                                    <a href='#' onclick='deleteEvent(${event.id})'>Delete</a>
                                </td>
                            </tr>`;
                    });
                    $("#eventTableBody").html(rows);
                },
                error: function() {
                    alert("Error fetching events.");
                }
            });
        }

        function validateEvent(eventId) {
            $.ajax({
                url: `/admin/events/${eventId}/validate`,
                type: "POST",
                success: function(response) {
                    alert(response.message);
                    fetchEvents();
                }
            });
        }

        function deleteEvent(eventId) {
            if (!confirm("Are you sure you want to delete this event?")) return;
            $.ajax({
                url: `/admin/events/${eventId}/delete`,
                type: "POST",
                success: function(response) {
                    alert(response.message);
                    fetchEvents();
                }
            });
        }
    </script>

</body>
</html>


 
 