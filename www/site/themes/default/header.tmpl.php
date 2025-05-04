<script>
function toggleMobileMenu() {
    const menu = document.getElementById("navMenu");
    menu.classList.toggle("active");
}
</script>
<header class="glass-navbar">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="nav-container">

        <!-- Logo con efecto hover -->
        <a href="<?=$SiteRoot?>" class="brand-logo">
            <img src="<?=$theme->getAbsDirectory()?>images/header/banner.png" 
                 alt="Glacier Hughes Logo"
                 class="logo-hover">
            <span class="guild-name">Glacier Hughes</span>
        </a>

        <!-- Botón Hamburguesa -->
        <div class="mobile-menu-btn" onclick="toggleMobileMenu()">
            <i class="fas fa-bars"></i>
        </div>

        <!-- Menú principal -->
        <nav class="main-nav">
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="<?=$SiteRoot?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=$SiteRoot?>addon" class="nav-link">
                        <i class="fas fa-download nav-icon"></i>
                        <span class="link-text">Addon</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=$SiteRoot?>Browse" class="nav-link">
                        <i class="fas fa-search nav-icon"></i>
                        <span class="link-text">Browse</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/cdpr13/Webdkp_Glacier_Hughes"
                       class="nav-link external"
                       target="_blank"
                       rel="noopener noreferrer">
                        <i class="fab fa-github nav-icon"></i>
                        <span class="link-text">GitHub</span>
                    </a>
                </li>
                <?php if($siteUser->visitor): ?>
					<li class="nav-item">
                        <a href="<?=$SiteRoot?>join" class="auth-btn signup-btn">
                            <i class="fas fa-user-plus"></i>
                            <span class="link-text">Registrarse</span>
                        </a>
				    </li>
					<li class="nav-item">
                        <a href="<?=$SiteRoot?>Login" class="auth-btn login-btn">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login</span>
                        </a>
					</li>
                <?php else: ?>
				    <li class="nav-item">
                        <a href="<?=dkpUtil::GetGuildUrl($siteUser->guild)?>" class="profile-link">
                            <i class="fas fa-user-shield profile-icon"></i>
                            <span class="profile-text">Tabla DKP</span>
                        </a>
					</li>
					<li class="nav-item">
                        <a href="<?=$SiteRoot?>login?siteUserEvent=logout" 
                            class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
					</li>	
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</header>

<style>
.glass-navbar {
    background: rgba(16, 18, 27, 0.85);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding: 0.8rem 1rem;
}

.nav-container {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
}

.brand-logo {
    display: flex;
    align-items: center;
    gap: 1rem;
    text-decoration: none;
}

.logo-hover {
    height: 45px;
    transition: transform 0.3s ease;
}

.logo-hover:hover {
    transform: rotate(-5deg) scale(1.1);
}

.guild-name {
    color: #7fd8ff;
    font-family: 'Poppins', sans-serif;
    font-size: 1.3rem;
    font-weight: 600;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    white-space: nowrap;
}

.nav-menu {
    display: flex;
    gap: 1.5rem;
    list-style: none;
    margin: 0;
    padding: 0;
    flex-wrap: wrap;
	align-items: center;
}

.nav-link {
    color: #e0e0e0;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.6rem;
    padding: 0.8rem 1.2rem;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
}

.nav-link:hover {
    background: rgba(127, 216, 255, 0.1);
    color: #7fd8ff;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    width: 0;
    height: 2px;
    background: #7fd8ff;
    transition: all 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
    left: 0;
}

.nav-icon {
    font-size: 1.2rem;
}


.auth-btn {
    padding: 0.6rem 1rem;
    border-radius: 8px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.6rem;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.signup-btn {
    background: #7fd8ff;
    color: #1a1a1a;
}

.signup-btn:hover {
    background: #66c4ed;
}

.login-btn {
    border: 1px solid #7fd8ff;
    color: #7fd8ff;
}

.login-btn:hover {
    background: rgba(127, 216, 255, 0.1);
}

.user-profile {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.profile-link {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    color: #7fd8ff;
    text-decoration: none;
    transition: opacity 0.3s ease;
}

.profile-link:hover {
    opacity: 0.8;
}

.logout-btn {
    color: #ff6b6b;
    padding: 0.6rem;
    border-radius: 50%;
    transition: background 0.3s ease;
}

.logout-btn:hover {
    background: rgba(255,107,107,0.1);
}

.mobile-menu-btn {
    display: none;
}

/* RESPONSIVE STYLES */
@media (max-width: 1024px) {
    .mobile-menu-btn {
        display: block;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        gap: 1rem;
        background: rgba(0, 0, 0, 0.95);
        position: absolute;
        top: 100%;
        right: 0;
        padding: 1rem;
        border-radius: 0 0 0 8px;
        z-index: 999;
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-link .link-text {
        display: inline;
    }
}
</style>