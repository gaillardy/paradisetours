<style>
.sidebar .menu li a {
    display: flex;
    align-items: center;
    gap: 10px; /* Espace entre l'icône et le texte */
    text-decoration: none;
    color: inherit;
    font-size: 14px;
}

.sidebar .menu li a i {
    font-size: 18px; /* Taille des icônes */
    color: #00796b; /* Même couleur que le thème */
}

</style>
<aside class="sidebar">
    <div class="sidebar-header">
        <h2>NBPT Admin</h2>
    </div>
    <ul class="menu">
        <li>
            <a href="/fr/home" target="_blank">
                <i class="fas fa-globe"></i> Voir le site
            </a>
        </li>
        <li>
            <a href="/nbpt-admin/dashboard" 
                class="<?php if($currentRoute === '/nbpt-admin/dashboard'){echo 'active-menu';} else {echo '';}?>">
                <i class="fas fa-tachometer-alt"></i> Tableau de bord
            </a>
        </li>
        <li>
            <a href="/nbpt-admin/comptes" 
                class="<?php if($currentRoute === '/nbpt-admin/comptes'){echo 'active-menu';} else {echo '';}?>">
                <i class="fas fa-users"></i> Utilisateurs
            </a>
        </li>
        <li>
            <a href="/nbpt-admin/new-message" 
                class="<?php if($currentRoute === '/nbpt-admin/new-message'){echo 'active-menu';} else {echo '';}?>">
                <i class="fas fa-envelope"></i> Nouveau message
            </a>
        </li>
        <li>
            <a href="/nbpt-admin/inbox" 
                class="<?php if($currentRoute === '/nbpt-admin/inbox'){echo 'active-menu';} else {echo '';}?>">
                <i class="fas fa-inbox"></i> Boîte de réception
            </a>
        </li>
        <li>
            <a href="/nbpt-admin/send-box" 
                class="<?php if($currentRoute === '/nbpt-admin/send-box'){echo 'active-menu';} else {echo '';}?>">
                <i class="fas fa-paper-plane"></i> Boîte d'envoi
            </a>
        </li>
        <li>
            <a href="/nbpt-admin/newsletter" 
                class="<?php if($currentRoute === '/nbpt-admin/newsletter'){echo 'active-menu';} else {echo '';}?>">
                <i class="fas fa-newspaper"></i> Newsletter
            </a>
        </li>
        <li>
            <a href="mailto:geektateur263@gmail.com">
                <i class="fas fa-life-ring"></i> Support
            </a>
        </li>
        <li>
            <a href="https://piwik.pro/login/" 
                class="<?php if($currentRoute === '/nbpt-admin/analytique'){echo 'active-menu';} else {echo '';}?>" 
                target="_blank">
                <i class="fas fa-chart-line"></i> Analytique
            </a>
        </li>
    </ul>
    <ul class="menu">
        <li>
            <a href="/nbpt-admin/logout" 
                onclick="return confirm('Souhaitez-vous vraiment vous déconnecter ?')">
                <i class="fas fa-power-off"></i> Déconnexion
            </a>
        </li>
    </ul>
</aside>
