<footer class="container-fluid p-0 text-center text-lg-start bg-light">


    <!-- Section: Newsletter -->
    <section class="container-fluid text-white p-5 border-bottom bg-primary">


        <!-- <form action="" method="GET" class="d-flex justify-content-center align-items-center">

                @csrf
                <label for="newsletter" class="fw-bold">Newsletter</label>
                <input type="email" name="newsletter" id="newsletter" placeholder="news@example.com" class="rounded-pill border-0 m-2 px-3 py-2 w-25">
                <button type="submit" class="bg-transparent border-0">
                    <span class="iconify text-white" data-icon="mdi:send-outline" style="font-size: 30px;"></span>
                </button>
                
        </form> -->


    </section>
  

    <!-- Section: Links  -->
    <section class="container-fluid justify-content-center align-items-center">


        <div class="row text-center text-md-start p-4">


            <!-- Brand presentation -->
            <div class="col-md-4 col-lg-4 col-xl-4 mb-4">

                    <h3 class="fw-bold mb-4">
                        <i class="fa-solid fa-blender pe-2"></i>
                        Cuisinez facile
                    </h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque consectetur in nisl a placerat.
                        Quisque molestie facilisis sem malesuada sagittis.
                        Pellentesque a dui vel ligula commodo tristique eget gravida elit.
                        Etiam at nisl pretium massa congue porttitor. Ut ultrices hendrerit nisl, at venenatis nunc.
                        Aliquam sagittis laoreet diam rutrum lacinia. Morbi ac congue odio, sit amet vehicula ligula.
                        Maecenas tortor nibh, tempus ut tincidunt ac, imperdiet id nunc.
                    </p>

            </div>


            <!-- Useful links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mb-4">

                    <h6 class="fw-bold mb-4">Liens Utiles</h6>

                    <p>
                        <a href="{{ Auth::user() ? route('profile') : route('login') }}" class="text-reset text-decoration-none">Votre compte</a>
                    </p>

                    <p>
                        <a href="#" class="text-reset text-decoration-none">FAQ</a>
                    </p>

                    <!-- <p>
                        <a href="#" class="text-reset text-decoration-none">Mentions Légales</a>
                    </p>
                    
                    <p>
                        <a href="#" class="text-reset text-decoration-none">CGU</a>
                    </p>

                    <p>
                        <a href="#" class="text-reset text-decoration-none">Cookies</a>
                    </p> -->

            </div>


            <!-- Social media links -->
            <div class="col-md-3 col-lg-3 col-xl-3 mb-4">

                    <h6 class="fw-bold mb-4">Suivez-nous sur les réseaux !</h6>

                    <div>
                        <a href="https://fr-fr.facebook.com/" target="blank" class="me-4 text-reset"><i class="iconify fs-3" data-icon="fa6-brands:facebook-f"></i></a>
                        <a href="https://twitter.com/?lang=fr" target="blank" class="me-4 text-reset"><i class="iconify fs-3" data-icon="fa6-brands:twitter"></i></a>
                        <a href="https://www.instagram.com/?hl=fr" target="blank" class="me-4 text-reset"><i class="iconify fs-3" data-icon="fa6-brands:instagram"></i></a>
                        <a href="https://fr.linkedin.com/" target="blank" class="me-4 text-reset"><i class="iconify fs-3" data-icon="fa6-brands:linkedin"></i></a>
                    </div>

            </div>


            <!-- Contact  links -->
            <div class="col-md-3 col-lg-3 col-xl-3 mb-4">

                    <h6 class="fw-bold mb-4">Informations de contact</h6>

                    <p>
                        <i class="iconify me-3" data-icon="fa6-solid:house"></i>
                        Six Fours Les Plages 83140, FRANCE
                    </p>

                    <p>
                        <i class="iconify me-3" data-icon="fa6-solid:envelope"></i>
                        info@example.com
                    </p>

                    <p>
                        <i class="iconify me-3" data-icon="fa6-solid:phone"></i>
                        +33 1 23 45 67 88
                    </p>

                    <p>
                        <i class="iconify me-3" data-icon="fa6-solid:print"></i>
                        +33 1 23 45 67 89
                    </p>

            </div>

            
        </div>


    </section>

  
    <!-- Copyright -->
    <div class="container-fluid text-center text-white p-4 bg-primary">
        © 2022 Copyright:
        <a class="text-white fw-bold" href="{{ route('home') }}">cuisinezfacile.com</a>
    </div>


</footer>