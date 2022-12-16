<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <nav class="nav justify-content-center bg-dark">
        <a class="nav-link active" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('about')}}">About</a>

    </nav>

    <section id="Hero_title" class="py-3">

        <div class="text-center">
            <h1>Ecco chi siamo veramente!!!</h1>
        </div>

        <div class="container">
            <div class="row">
                @foreach($people as $person)
                <div class="col">
                    <div>
                        <img src="{{$person['image']}}" alt="">
                    </div>
                    <div>
                        <h3>{{$person['role']}}</h3>
                        <p>{{$person['description']}}</p>
                    </div>

                </div>
                @endforeach


            </div>
        </div>

    </section>





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>