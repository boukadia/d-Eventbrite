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
        <div class="ms-auto toggle-icon"><i class='bx-arrow-back bx'></i></div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">UI Elements</li>

        <li>
            <a href="#" class="nav-link" data-page="ManageEvent">Gestion des événements</a>
        </li>
        <li>
            <a href="#" class="nav-link" data-page="ManageUsers">Gestion des utilisateurs</a>
        </li>

        <?php if ($userRole['role'] === 'admin'): ?>
            <li> 
                <a href="#" class="nav-link" data-page="Statics">Statistics</a>
            </li>
            <li>
                <a href="#" class="nav-link" data-page="ManageCategory">Gestion des catégories</a>
            </li>
        <?php endif; ?>
    </ul>
    <!--end navigation-->
</div>
