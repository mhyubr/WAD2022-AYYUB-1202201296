<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid my-2">
        <a class="navbar-brand" href="home">
            <img class="mx-5" src="{{ asset('asset/img/logo-ead.png') }}" alt="Bootstrap" width="" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link text-light {{ ($title === 'Home') ? 'fw-bold' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-light {{ ($title === 'MyItem') ? 'fw-bold' : '' }}" href="list">MyCar</a>
                </li>
            </ul>
        </div>
        <a class="me-5 btn btn-light text-primary" href="add">Add Car</a>
        <div class="me-5">
            <div class="btn-group me-5">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="text-primary">Nama User</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
