<header class="main-header">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/css/styles.css">
    <!-- Logo -->
    <div class="header-logo">
        <a href="<?= $SiteRoot ?>">
            <img src="<?= $theme->getAbsDirectory() ?>images/header/logo.jpg" 
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