<nav class="container-fluid navbar-expand fixed-top bg-primary p-0">


    <ul class="navbar-nav row">


        <!-- Website Title -->
        <li class="nav-item col-6">

                <a class="nav-link text-white" href="{{ route('home') }}">
                    <h1><i class="fa-solid fa-blender mx-2" style="font-size: 40px;"></i>Cuisinez facile !</h1>
                </a>

        </li>


        <!-- Search Bar -->
        <!-- <li class="nav-item">

                <form class="d-flex" role="search">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

        </li> -->


        <!-- Connection/Registration Logo -->
        <li class="nav-item col-6 d-flex justify-content-end">

                <button type="button" class="btn text-white" onclick="document.getElementById('user_options').classList.toggle('d-none');">
                    <span class="iconify" data-icon="mdi:account-circle" style="font-size: 40px;"></span>
                </button>

        </li>


    </ul>


    <!-- Menu Links -->
    <div class="container shadow-sm p-0">


        <ul class="navbar-nav justify-content-around">

                <li class="nav-item px-2 px-lg-5" onclick="document.getElementById('submenu').classList.toggle('d-none');">
                    <a href="#" class="nav-link text-white">Recettes</a>
                </li>

                <li class="nav-item px-2 px-lg-5">
                    <a href="{{ route('articles_categories') }}" class="nav-link text-white">Articles</a>
                </li>
                
                <li class="nav-item px-2 px-lg-5">
                    <a href="{{ route('ingredients') }}" class="nav-link text-white">Ingrédients</a>
                </li>

        </ul>


    </div>


    <!-- Hidden Submenu Links -->
    <div id="submenu" class="container p-0 top-100 d-none">
        <ul class="navbar-nav w-100 d-flex justify-content-center align-items-center">

                @foreach (getNavbar() as $recipe_category)

                        <li class="nav-item px-2 px-lg-5">
                            <a href="{{ route('recipes_category', $recipe_category->category_slug) }}" class="nav-link text-white">{{ $recipe_category->category_label }}</a>
                        </li>
                    
                @endforeach

        </ul>
    </div>


    <!-- Hidden User Options -->
    <div id="user_options" class="container-fluid bg-transparent d-none">


        <ul class="navbar-nav flex flex-column justify-content-center align-items-end">

                @if (Auth::user())

                        <li class="nav-item">
                            <a href="{{ route('profile') }}" class="nav-link text-white">Mon profil</a>
                        </li>

                        <!-- Back Office Link -->
                        @if ((Auth::user()->role === 'ADMIN'))

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('articles.index') }}">Espace Admin</a>
                                </li>

                        @endif

                        <li class="nav-item">

                                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                                    @csrf
                                    <button class="btn btn-outline-danger rounded-pill my-2 py-1 px-2" type="submit">Déconnexion</button>
                                </form>

                        </li>
                    
                @else

                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-white">Connexion</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Inscription</a>
                        </li>
                    
                @endif

        </ul>

        
    </div>
 

</nav>

