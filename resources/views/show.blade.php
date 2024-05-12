<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resultados búsqueda | IVSS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/showstyles.css') !!}">
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

            <br>
        
            <table class="content-table">

                <thead>
            
                    <tr>
                
                        <th scope="col">Cédula de Identidad</th>
                        <th scope="col">Primer Nombre</th>
                        <th scope="col">Segundo Nombre</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Estado Civil</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Fecha de fallecimiento</th>
                        {{-- <th scope="col">Acciones</th> --}}
                
                    </tr>
            
                </thead>
            
                <tbody>
            
                    <tr>
                
                        @foreach($ciudadanos as $ciudadano)
                            <tr>
                                <td>{{ $ciudadano->id_ciudadano }}</td>
                                <td>{{ $ciudadano->primer_nombre }}</td>
                                <td>{{ $ciudadano->segundo_nombre }}</td>
                                <td>{{ $ciudadano->primer_apellido }}</td>
                                <td>{{ $ciudadano->segundo_apellido }}</td>
                                <td>{{ $ciudadano->sexo }}</td>
                                <td>{{ $ciudadano->id_estado_civil }}</td>
                                <td>{{ \Carbon\Carbon::parse($ciudadano->fecha_nacimiento)->format('d-m-Y') }}</td>
                                <td>{{ $ciudadano->fecha_fallecimiento }}</td>
                                {{-- <td><a class="edit-btn" href="{{ route('edit.view', $ciudadano->id_ciudadano) }}">Editar</a></td> --}}
                            </tr>
                            
                        @endforeach
                
                    </tr>
            
                </tbody>

            </table>
            
            {{-- {{ $ciudadanos->links() }} --}}

            <div class="back">
                <p><a href="{{url('/')}}">Regresar</a></p>
            </div>

        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>