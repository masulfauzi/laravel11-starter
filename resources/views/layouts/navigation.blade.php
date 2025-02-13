<!-- Sidebar Menu Starts -->
<ul class="sidebar-content">
    <!-- Dashboard -->
    <li>
        <a href="./email.html" class="sidebar-menu">
            <span class="sidebar-menu-icon">
                <i data-feather="home"></i>
            </span>
            <span class="sidebar-menu-text">Dashboard</span>
        </a>
    </li>

    @if (Auth::user()->role == 'user')
        <li>
            <a href="./email.html" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="mail"></i>
                </span>
                <span class="sidebar-menu-text">Menu Untuk User</span>
            </a>
        </li>
    @else
        <li>
            <a href="./chat.html" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="message-square"></i>
                </span>
                <span class="sidebar-menu-text">Menu Untuk Admin</span>
            </a>
        </li>
    @endif


</ul>
<!-- Sidebar Menu Ends -->
