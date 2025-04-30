<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="/css/styles.css">
<div class="modern-container">
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to WebDKP</h1>
            <p class="hero-subtitle">Advanced DKP Management System for World of Warcraft</p>
            <button class="cta-button" onclick="document.location='/Join'">Get Started Now</button>
        </div>
    </section>

    <section class="screenshots-section">
        <div class="grid-container">
            <a href="http://www.webdkp.com/images/screenshots/table.jpg" class="screenshot-card" rel="lightbox">
                <img src="http://www.webdkp.com/images/screenshots/table_small.jpg" alt="DKP Table Preview">
                <span class="overlay-text">View Table</span>
            </a>
            <a href="http://www.webdkp.com/images/screenshots/player.jpg" class="screenshot-card" rel="lightbox">
                <img src="http://www.webdkp.com/images/screenshots/player_small.jpg" alt="Player Profile Preview">
                <span class="overlay-text">Player Profile</span>
            </a>
            <a href="http://www.webdkp.com/images/screenshots/control.jpg" class="screenshot-card" rel="lightbox">
                <img src="http://www.webdkp.com/images/screenshots/control_small.jpg" alt="Control Panel Preview">
                <span class="overlay-text">Control Panel</span>
            </a>
        </div>
        <a href="/Screenshots" class="more-link">Explore More Features →</a>
    </section>

    <section class="content-section">
        <div class="info-panel">
            <h2 class="section-title">What is DKP?</h2>
            <p class="highlight-text">Dragon Kill Points (DKP) - Your Fair Loot Distribution System</p>
            <p>WebDKP revolutionizes guild management with:</p>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="fas fa-sync-alt feature-icon"></i>
                    <h3>Real-time Syncing</h3>
                    <p>Instant updates between in-game addon and web interface</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h3>Officer Controls</h3>
                    <p>Granular permissions and access management</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Advanced Analytics</h3>
                    <p>Track participation and contribution metrics</p>
                </div>
            </div>
        </div>

        <div class="cta-section">
            <h2 class="section-title">Why Choose WebDKP?</h2>
            <ul class="feature-list">
                <li><i class="fas fa-check-circle"></i> Complete in-game integration</li>
                <li><i class="fas fa-check-circle"></i> Cloud-based backups</li>
                <li><i class="fas fa-check-circle"></i> Multi-table support</li>
                <li><i class="fas fa-check-circle"></i> ZeroSum DKP implementation</li>
                <li><i class="fas fa-check-circle"></i> Mobile-friendly interface</li>
            </ul>
            
            <div class="demo-section">
                <p>Explore our interactive demo:</p>
                <a href="/demo" class="demo-button">
                    <i class="fas fa-play"></i> Launch Demo
                </a>
            </div>
        </div>
    </section>
</div>

<style>
.modern-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
}

.hero-section {
    background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
    color: white;
    padding: 4rem 2rem;
    border-radius: 15px;
    margin-bottom: 2rem;
    text-align: center;
}

.hero-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero-subtitle {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-button {
    background: #e74c3c;
    color: white;
    padding: 1rem 2rem;
    border: none;
    border-radius: 30px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
}

.cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.screenshot-card {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.screenshot-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.screenshot-card:hover {
    transform: translateY(-5px);
}

.overlay-text {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 1rem;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.screenshot-card:hover .overlay-text {
    opacity: 1;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.feature-card {
    background: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    text-align: center;
}

.feature-icon {
    font-size: 2.5rem;
    color: #3498db;
    margin-bottom: 1rem;
}

.feature-list {
    list-style: none;
    padding: 0;
}

.feature-list li {
    padding: 0.8rem 0;
    font-size: 1.1rem;
}

.feature-list i {
    color: #27ae60;
    margin-right: 0.5rem;
}

.demo-button {
    display: inline-flex;
    align-items: center;
    padding: 1rem 2rem;
    background: #2980b9;
    color: white;
    border-radius: 25px;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.demo-button:hover {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .grid-container {
        grid-template-columns: 1fr;
    }
}