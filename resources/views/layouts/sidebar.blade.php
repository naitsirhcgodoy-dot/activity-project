<aside id="sidebar" class="sidebar" aria-label="Primary navigation">
    <div class="sidebar-top">
        <strong class="sidebar-title"></strong>
    </div>

    <nav class="sidebar-nav">
        <ul>
            <li class="@if(request()->routeIs('home')) active @endif">
                <a href="{{ route('home') }}">Login</a>
            </li>
            <li class="@if(request()->routeIs('register')) active @endif">
                <a href="{{ route('register') }}">Register</a>
            </li>
                <li class="@if(request()->routeIs('attendances.index')) active @endif">
                    <a href="{{ route('attendances.index') }}">Attendance</a>
                </li>
            <li class="@if(request()->routeIs('page.show') && request()->route('id') == 1) active @endif">
                <a href="{{ route('page.show', 1) }}">Dashboard</a>
            </li>
            <li class="@if(request()->routeIs('page.show') && request()->route('id') == 2) active @endif">
                <a href="{{ route('page.show', 2) }}">Details</a>
            </li>
            <li class="@if(request()->routeIs('page.show') && request()->route('id') == 3) active @endif">
                <a href="{{ route('page.show', 3) }}">Email</a>
            </li>
            <li class="@if(request()->routeIs('page.show') && request()->route('id') == 4) active @endif">
                <a href="{{ route('page.show', 4) }}">Gallery</a>
            </li>
            <li class="@if(request()->routeIs('page.show') && request()->route('id') == 5) active @endif">
                <a href="{{ route('page.show', 5) }}">Settings</a>
            </li>
        </ul>
    </nav>

    <div class="sidebar-bottom">
        
    </div>
</aside>