<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actualizar Ciudadanos | IVSS</title>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/updatestyles.css') !!}">
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
                    <form method="POST" enctype="multipart/form-data" action="{{ route('update', $ciudadano->id_ciudadano) }}">
                        @csrf
                        
                        <h2>Registro de Ciudadanos</h2>

                        <div class="primer_nombre">
                            <label for="primer_nombre">Primer Nombre</label>
                            <input type="text" value="{{$ciudadano->primer_nombre}}" placeholder="Primer Nombre" name="PRIMER_NOMBRE" id="primer_nombre" autofocus>
                        </div>
        
                        <div class="segundo_nombre">
                            <label for="segundo_nombre">Segundo Nombre</label>
                            <input type="text" value="{{$ciudadano->segundo_nombre}}" placeholder="Segundo Nombre" name="SEGUNDO_NOMBRE" id="segundo_nombre" autofocus>
                        </div>

                        <div class="primer_apellido">
                            <label for="primer_apellido">Primer Apellido</label>
                            <input type="text" value="{{$ciudadano->primer_apellido}}" placeholder="Primer Apellido" name="PRIMER_APELLIDO" id="primer_apellido" autofocus>
                        </div>
                        
                        <div class="segundo_apellido">
                            <label for="segundo_apellido">Segundo Apellido</label>
                            <input type="text" value="{{$ciudadano->segundo_apellido}}" placeholder="Segundo Apellido" name="SEGUNDO_APELLIDO" id="segundo_apellido" autofocus>
                        </div>
        
                        <div class="sexo">
                            <label for="sexo">Sexo</label>
                            <select name="SEXO" id="sexo_input">
                                <option>{{$ciudadano->sexo}}</option>
                                <option value="M">MASCULINO</option>
                                <option value="F">FEMENINO</option>
                            </select>
                        </div>
        
                        <div class="estado_civil">
                            <label for="estado_civil">Estado Civil</label>
                            <select name="ID_ESTADO_CIVIL" id="estado_civil_input">
                                <option>{{$ciudadano->id_estado_civil}}</option>
                                <option value="1">SOLTERO(A)</option>
                                <option value="2">SEPARADO(A)</option>
                                <option value="3">VIUDO(A)</option>
                                <option value="4">CASADO(A)</option>
                                <option value="5">DIVORCIADO(A) CON NUEVAS NUPCIAS</option>
                                <option value="6">DIVORCIADO(A) SIN NUEVAS NUPCIAS</option>
                            </select>
                        </div>
        
                        <div class="fecha_nacimiento">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input style="padding: 10px;" type="date" name="FECHA_NACIMIENETO" id="fecha_nacimiento_input" value="{{ $ciudadano->fecha_nacimiento }}">
                        </div>
        
                        <div class="fecha_fallecimiento">
                            <label for="fecha_fallecimiento">Fecha de fallecimiento</label><br>
                            <input style="padding: 10px;" type="date" name="FECHA_FALLECIMIENTO" id="fecha_fallecimiento_input" value="{{ $ciudadano->fecha_fallecimiento }}">
                        </div>

                        <div class="btn-update">
                            <button>Actualizar</button>
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