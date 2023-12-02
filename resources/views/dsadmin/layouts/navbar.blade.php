<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashadmin') ? 'active' : '' }}" aria-current="page" href="/dashadmin"><i class="bi bi-house-door-fill"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('crud') ? 'active' : '' }}" aria-current="page" href="/crud"><i class="bi bi-clipboard-data"></i>
                    CRUD
                </a>
            </li>
        </ul>
    </div>
</nav>
