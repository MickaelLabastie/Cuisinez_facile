<!DOCTYPE html>

<html lang="fr-FR">


    <head>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <title>Cuisinez facile</title>

    </head>


    <body class="container-fluid p-0">

            @include('incs.navbar')

            <main class="container-fluid" style="margin : 180px 0 120px 0;">
                
                    <div class="container justify-content-center mt-5">
                        @include('incs.flash')
                    </div>

                    @yield('content')

            </main>

            @include('incs.footer')


            <!-- Scripts for the wysiwyg editor : tynimce -->
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                    selector: '#tinymce-editor'
                });
            </script>


            <!-- Scripts for the design -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/a4f07ec740.js" crossorigin="anonymous"></script>
            <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    </body>


</html>