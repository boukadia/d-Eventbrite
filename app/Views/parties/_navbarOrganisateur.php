<?php
use App\Core\AuthService;
$userData = AuthService::isAuthenticated();

// if (!$userRole === 'admin') {
//     // echo "JWT Cookie not set!";
//     header("Location: /login");
// }
 ?>   
  
<header>
<div class="topbar d-flex align-items-center">
				<nav class="gap-3 navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="flex-grow-1 search-bar">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="top-50 position-absolute search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="top-50 position-absolute search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
						<ul class="align-items-center gap-1 navbar-nav">
							<li class="d-flex mobile-search-icon d-lg-none nav-item" data-bs-toggle="modal" data-bs-target="#SearchModal">
								67<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							 
							 
<!-- notifications -->
							<li class="dropdown dropdown-large nav-item">
								<a class="position-relative dropdown-toggle dropdown-toggle-nocaret nav-link" href="#" data-bs-toggle="dropdown"  ><span class="alert-count" id="notif-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									 
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge" id="#notif-count">8 New</p>
										</div>
									 
									<div class="header-notifications-list" id="notifications-list">
								   
										 
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="w-100 btn btn-light" id="markAllAsReads">Mark all as read</button>
										</div>
									</a>
								</div>
							</li>
						 
						</ul>
					</div>
					<div class="px-3 dropdown user-box">
						<a class="d-flex align-items-center gap-3 dropdown-toggle dropdown-toggle-nocaret" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="/assetsOrg/images/avatars/user.jpeg" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="mb-0 user-name"><?= $userData['username'] ?></p>
								<p class="mb-0 designattion"><?= $userData['role'] ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="d-flex align-items-center dropdown-item" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
				 
							<li>
								<div class="mb-0 dropdown-divider"></div>
							</li>
							<li><a class="d-flex align-items-center dropdown-item" href="/logout"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<?php if ($userRole['role'] === 'admin'): ?>

<script>
	 
$(document).ready(function() {
    function loadNotifications() {
 
		// ?>
        $.ajax({
            url: "/admin/getNotifications", 
            method: "GET",
            dataType: "json",
            success: function(response) {
				console.log("notifications" ,response.notifications);
                let notificationList = $("#notifications-list");
                let notifCount = $("#notif-count");
                let notifBadge = $("#notif-badge");
				let notifications = response.notifications

                notificationList.html("");  
                if (notifications.length === 0) {
                    notifCount.text("0");
                    notifBadge.text("0 New");
                    notificationList.append('<li class="text-center dropdown-item">No new notifications</li>');
                } else {
                    notifCount.text(notifications.length);
                    notifBadge.text(notifications.length + " New");

                    notifications.forEach(notification => {
                        notificationList.append(`
                           <a class="flex items-center hover:bg-gray-100 p-2 dropdown-item" href="javascript:;">
    <div class="flex items-center">
        <!-- User Avatar -->
        <div class="shrink-0">
            <img src="assets/images/avatars/avatar-8.png" class="rounded-full w-8 h-8" alt="user avatar">
        </div>
        <!-- Notification Message -->
        <div class="ml-3 overflow-hidden">
             <p class="text-gray-500 text-xs truncate">${notification.message}</p>
         </div>
    </div>
</a>
                        `);
                    });
                }
            }
        });
    }
	// <h6 class="msg-name">${notification.title} <span class="float-end msg-time">${notification.created_at}</span></h6>

     loadNotifications();

     setInterval(loadNotifications, 10000);

     $("#markAllAsReads").click(function() {
        $.ajax({
            url: "/admin/markAllreadNotifications",  
            method: "POST",
            success: function(response) {
               
				
                loadNotifications(); // Reload notifications
				// let notificationList = $("#notifications-list");
                // let notifCount = $("#notif-count");
                // let notifBadge = $("#notif-badge");

				// notifCount.text("0");
                //     notifBadge.text("0 New");
                //     notificationList.append('<li class="text-center dropdown-item">No new notifications</li>');
            }
        });
    });
});
</script>
<?php endif; ?>
