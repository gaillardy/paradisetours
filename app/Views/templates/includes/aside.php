<aside class="sidebar">
    <div class="sidebar-header">
        <h2>NBPT Admin</h2>
    </div>
    <ul class="menu">


        <li>
            <a href="/nbpt-admin/dashboard" 
                class="<?php if($currentRoute === '/nbpt-admin/dashboard'){echo 'active-menu';} else {echo '';}?>"
            >
            Tableau de bord
            </a>
        </li>

        <li>
            <a href="/nbpt-admin/comptes"
            class="<?php if($currentRoute === '/nbpt-admin/comptes'){echo 'active-menu';} else {echo '';}?>"
            >
                Utilisateurs
            </a>
        </li>

        <li>
            <a href="/nbpt-admin/new-message"
            class="<?php if($currentRoute === '/nbpt-admin/new-message'){echo 'active-menu';} else {echo '';}?>"
            >
                Nouveau message
            </a>
        </li>


        <li>
            <a href="/nbpt-admin/inbox"
            class="<?php if($currentRoute === '/nbpt-admin/inbox'){echo 'active-menu';} else {echo '';}?>"
            >
                Boite de reception
            </a>
        </li>

        <li>
            <a href="/nbpt-admin/send-box"
                class="<?php if($currentRoute === '/nbpt-admin/send-box'){echo 'active-menu';} else {echo '';}?>"
            >
                Boite d'envoi
            </a>
        </li>

        <li>
            <a href="/nbpt-admin/newsletter"
            class="<?php if($currentRoute === '/nbpt-admin/newsletter'){echo 'active-menu';} else {echo '';}?>"
            >
                Newsletter
            </a>
        </li>

        <li>
            <a href="/fr/home"
            target="_blank"
            >
                Nosy be Paradise Tours
            </a>
        </li>

        <li><a href="mailto:geektateur263@gmail.com">Support</a></li>
    </ul>
    <ul class="menu">
        <li><a href="/nbpt-admin/logout" onclick="return confirm('Souhaitez-vous vraiment vous déconnecter ?')"><i class="icon fas fa-power-off"></i></a></li>
    </ul>
</aside>