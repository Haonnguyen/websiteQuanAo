<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/vendor/vendor.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/plugins.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
<link rel="shortcut icon" href="{{ asset('css/images/favicon.ico') }}" type="image/png">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-ooRFAWxy8XRpUucjz1ztnJ3icUqGKSP9jwtp2+nvPpIpe6IaRJQApde1yY2tWB+h" crossorigin="anonymous">
    

</head>
<body>


        <div id="search" class="search-modal">
                <button type="button" class="close">×</button>
                <form action="{{route('products.search')}}" method="GET">
                    <input type="search" name="query" placeholder="type keyword(s) here" />
                    <button type="submit" class="btn btn-lg btn-golden">Search</button>
                </form>
        </div>


        @include('header')  
        
        <main>
            @yield('content')
        </main>

        @include('footer')

      


</body>
</html>