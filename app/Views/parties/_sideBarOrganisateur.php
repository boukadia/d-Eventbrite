 <?php
use App\Core\AuthService;
$userRole = AuthService::isAuthenticated();

// if (!$userRole === 'admin') {
//     // echo "JWT Cookie not set!";
//     header("Location: /login");
// }

?>   
  
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">Dashboard</h4>
		</div>
		<div class="ms-auto toggle-icon"><i class='bx-arrow-back bx'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
		<li class="menu-label">UI Elements</li>

		<?php if ($userRole['role'] === 'admin') {?>
            <li> 
                <a href="#" class="nav-link" data-page="Statics">Statistics</a>
            </li>
            <li>
                <a href="#" class="nav-link" data-page="ManageCategory">Gestion des catégories</a>
            </li>
        <?php } else { ?>
		<li>
			<a href="#" class="nav-link-side" data-page="Statistique">Statistique</a>
		</li>
		<li>
			<a href="#" class="nav-link-side" data-page="ManageEvent">Gestion des événements</a>
		</li>
		<?php } ?>
	</ul>
	<!--end navigation-->
</div>
    <div class="sidebar-header">
        <div>
            <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Dashboard</h4>
        </div>
        <div class="ms-auto toggle-icon"><i class='bx-arrow-back bx'></i></div>
    </div>
</div>
