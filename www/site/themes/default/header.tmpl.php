<header class="main-header">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Logo -->
    <div class="header-logo">
        <a href="<?= $SiteRoot ?>">
            <img src="<?= $theme->getAbsDirectory() ?>images/header/banner.png" 
                 alt="WebDKP Logo" 
                 class="logo-image">
        </a>
    </div>

    <!-- Menú de Navegación -->
    <nav class="header-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?= $SiteRoot ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?= $SiteRoot ?>addon" class="nav-link">Addon</a>
            </li>
            <li class="nav-item">
                <a href="<?= $SiteRoot ?>Browse" class="nav-link">Browse</a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/zeddic/webdkp" 
                   class="nav-link external-link" 
                   target="_blank" 
                   rel="noopener">
                    GitHub
                </a>
            </li>

            <!-- Menú Dinámico según Login -->
            <?php if($siteUser->visitor): ?>
                <li class="nav-item auth-link">
                    <a href="<?= $SiteRoot ?>join" class="nav-link">Join</a>
                </li>
                <li class="nav-item auth-link">
                    <a href="<?= $SiteRoot ?>Login" class="nav-link">Login</a>
                </li>
            <?php else: ?>
                <li class="nav-item auth-link">
                    <a href="<?= dkpUtil::GetGuildUrl($siteUser->guild) ?>" 
                       class="nav-link highlight-link">
                        <i class="fas fa-shield-alt"></i> Your DKP
                    </a>
                </li>
                <li class="nav-item auth-link">
                    <a href="<?= $SiteRoot ?>login?siteUserEvent=logout" 
                       class="nav-link logout-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        
        <!-- Menú Mobile (Hamburguesa) -->
        <div class="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>

<style>
.main-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 2rem;
    background: #1a1a1a;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.logo-image {
    height: 50px;
    transition: transform 0.3s ease;
}

.logo-image:hover {
    transform: scale(1.05);
}

.nav-list {
    display: flex;
    gap: 2rem;
    list-style: none;
}

.nav-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #3498db;
}

.highlight-link {
    color: #2ecc71 !important;
}

.mobile-menu {
    display: none;
    color: white;
    font-size: 1.5rem;
}

/* Responsive */
@media (max-width: 768px) {
    .nav-list {
        display: none;
    }
    
    .mobile-menu {
        display: block;
    }
}
</style>