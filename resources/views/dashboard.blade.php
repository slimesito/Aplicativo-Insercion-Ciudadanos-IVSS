<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ciudadanos | IVSS</title>
    <meta charset="UTF-8">
    {{-- STYLES --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/dashboardstyles.css') !!}">
    {{-- FONTSAWESOME --}}
    <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary" >
        <div class="logo">
            <a><img src="assets/membrete2.jpg" width="1900" height="100" alt=""></a>
        </div>  
    </nav>

    <section>
    
        <div class="container-fluid page-body-wrapper" align="center">

            @include('layout.success-message')
            
            @include('layout.error-message')

            @include('layout.alternative-message')

            <br>

            <div class="form-box">

                <div class="form value">

                    @csrf
                        
                    <h2><img src="assets/logo.png" style="width: 80%" alt=""></h2>

                    <form method="GET" action="{{ route('search') }}">

                        <div class="inputbox">
                            <ion-icon name="search-outline"></ion-icon>
                            <input type="text" name="query" placeholder="Ingrese la cédula">
                        </div>

                        <div class="home-btns">

                            <button type="submit" class="button-85">Buscar</button>

                    </form>

                            <a class="add-btn" role="button" href="{{ route('create') }}">Agregar</a>
                        
                        </div>

                </div>

            </div>

        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>