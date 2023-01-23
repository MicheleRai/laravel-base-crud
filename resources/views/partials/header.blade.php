<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">FUMETTI PER TUTTI</a>
        <a class="navbar-brand" href="{{ route('comics.index') }}">COMICS</a>
        <a class="navbar-brand" href="{{ route('comics.create') }}">ADD COMICS</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
    </div>
</nav>

