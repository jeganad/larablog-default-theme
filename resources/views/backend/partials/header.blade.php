<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="{{ route('larablog.backend.posts.index') }}" class="nav-item is-tab is-hidden-mobile is-active">Posts</a>
            <a href="/{{ config('larablog.routes.backend') }}" class="nav-item is-tab is-hidden-mobile">Admin</a>
        </div>
        <div class="nav-center">
            <a class="nav-item">
                Larablog - Admin
            </a>
        </div>
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <div class="nav-right nav-menu">
            <a href="{{ route('larablog.backend.posts.index') }}" class="nav-item is-tab is-hidden-tablet is-active">Posts</a>
            <a href="{{ config('larablog.routes.backend') }}" class="nav-item is-tab is-hidden-tablet">Admin</a>
            <a class="nav-item is-tab">Log out</a>
        </div>
    </div>
</nav>