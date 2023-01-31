<nav class="navbar navbar-toggleable-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">PHOTODROP</a>

    <ul class="nav d-flex justify-content-between">
        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="/">Zdjęcia publiczne</a>
        </li>
        <li class="nav-item  {{Request::is('/zdjecie') ? 'active' : ''}}">
            <a class="nav-link" href="/zdjecie">Moje zdjęcia</a>
        </li>
        <li class="nav-item  {{Request::is('/zdjecie/create') ? 'active' : ''}}">
            <a class="nav-link" href="/zdjecie/create">Dodaj zdjęcie</a>
        </li>
        <li class="nav-item  {{Request::is('/link') ? 'active' : ''}}">
            <a class="nav-link" href="/link">Linki</a>
        </li>
        <li class="nav-item  {{Request::is('/link/create') ? 'active' : ''}}">
            <a class="nav-link" href="/link/create">Dodaj link</a>
        </li>
    </ul>

</nav>