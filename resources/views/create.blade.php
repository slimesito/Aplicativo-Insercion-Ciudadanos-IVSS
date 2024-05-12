<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro Ciudadanos | IVSS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/createstyles.css') !!}">
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
        
            <div class="form-box">
                <div class="form value">
                    <form method="POST" action="{{ route('store') }}">

                        @csrf

                        <h2>Registro de Ciudadanos</h2>

                        <div class="cedula_select">
                            <label for="">Nacionalidad</label>
                            <select name="nacionalidad" id="cedula_select" required>
                                <option disabled hidden selected>Seleccione la nacionalidad</option>
                                <option value="V">Venezolano</option>
                                <option value="E">Extranjero</option>
                            </select>
                        </div>

                        <div class="cedula">
                            <label for="cedula">Cédula de Identidad</label>
                            <input type="text" placeholder="Ingrese la cédula de identidad" name="ID_CIUDADANO" id="cedula" required>
                        </div>
                        
                        <div class="primer_nombre">
                            <label for="PRIMER_NOMBRE">Primer Nombre</label>
                            <input type="text" placeholder="Ingrese el primer nombre" name="PRIMER_NOMBRE" id="primer_nombre" required autofocus>
                        </div>
        
                        <div class="segundo_nombre">
                            <label for="SEGUNDO_NOMBRE">Segundo Nombre</label>
                            <input type="text" placeholder="Ingrese el segundo nombre" name="SEGUNDO_NOMBRE" id="segundo_nombre" autofocus>
                        </div>

                        <div class="primer_apellido">
                            <label for="PRIMER_APELLIDO">Primer Apellido</label>
                            <input type="text" placeholder="Ingrese el primer apellido" name="PRIMER_APELLIDO" id="primer_apellido" required autofocus>
                        </div>
                        
                        <div class="segundo_apellido">
                            <label for="SEGUNDO_APELLIDO">Segundo Apellido</label>
                            <input type="text" placeholder="Ingrese el segundo apellido" name="SEGUNDO_APELLIDO" id="segundo_apellido" autofocus>
                        </div>
        
                        <div class="sexo">
                            <label for="SEXO">Sexo</label>
                            <select name="SEXO" id="sexo_input" required>
                                <option disabled hidden selected>Seleccione el sexo</option>
                                <option value="M">MASCULINO</option>
                                <option value="F">FEMENINO</option>
                            </select>
                        </div>
        
                        <div class="estado_civil">
                            <label for="ID_ESTADO_CIVIL">Estado Civil</label>
                            <select placeholder="Estado Civil" name="ID_ESTADO_CIVIL" id="estado_civil_input" required>
                                <option disabled hidden selected>Seleccione el estado civil</option>
                                <option value="1">SOLTERO(A)</option>
                                <option value="2">SEPARADO(A)</option>
                                <option value="3">VIUDO(A)</option>
                                <option value="4">CASADO(A)</option>
                                <option value="5">DIVORCIADO(A) CON NUEVAS NUPCIAS</option>
                                <option value="6">DIVORCIADO(A) SIN NUEVAS NUPCIAS</option>
                            </select>
                        </div>
        
                        <div class="fecha_nacimiento">
                            <label for="FECHA_NACIMIENTO">Fecha de nacimiento</label>
                            <input style="padding: 10px;" type="date" placeholder="Fecha de nacimiento" name="FECHA_NACIMIENTO" id="fecha_nacimiento_input" required>
                        </div>
        
                        <div class="fecha_fallecimiento">
                            <label for="FECHA_FALLECIMIENTO">Fecha de fallecimiento</label><br>
                            <input style="padding: 10px;" type="date" placeholder="Fecha de fallecimiento" name="FECHA_FALLECIMIENTO" id="fecha_fallecimiento_input">
                        </div>

                        <div class="btn-register">
                            <button>Registrar</button>
                        </div>

                        <div class="back">
                            <p><a href="{{url('/')}}">Regresar</a></p>
                        </div>
                    
                    </form>
                </div>
            </div>

        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>