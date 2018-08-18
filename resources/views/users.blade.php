<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="form-inline mx-auto d-flex justify-content-between">
                        <div class="mx-auto">
                            Busqueda de Usuario
                        </div>
                        <form action="{{ route('users') }}" method="GET" class="my-2 form-inline">
                            {{-- Nombre --}}
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="name" placeholder="Nombre">
                            </div>

                            {{-- Email --}}
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>

                            {{-- Biografia --}}
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="bio" placeholder="Biografía">
                            </div>

                            {{-- Boton de buscar --}}
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>
                            </div>

                        </form>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>