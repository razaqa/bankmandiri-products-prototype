<nav class="navbar navbar-trans navbar-expand-lg">
    <div class="brand">
        <img id="nav-logo" alt="logo" src="{{ asset('img/mandiri_logo.png') }}" />
    </div>

    <div class="right-menu collapse navbar-collapse pull-xs-right justify-content-end" id="navbarText">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">products</a>
            </li>
        </ul>
    </div>

    <input type="checkbox" id="menuToggle" />
    <label for="menuToggle" class="menuOpen">
        <div class="open"></div>
    </label>

    <div class="menu menuEffects">
        <label for="menuToggle"></label>
        <div class="menuContent">
            <ul>
                <li><a class="menu-link" href="/">products</a></li>
            </ul>
        </div>
    </div>
</nav>