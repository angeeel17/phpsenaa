<div class="container-fluid">
        <h1 class="text-center py-3"> Mi primer PHP </h1>
    </div>

    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <li class="nav-item">
                    <a href="registro.html" class="nav-link">Registro</a>
                </li>
                <li class="nav-item">
                    <a href="ingreso.html" class="nav-link active">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="inventario.html" class="nav-link">Inventario</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Salir</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container py-5">

            <div class="d-flex justify-content-center text-center py-3">

                <form class="p-5 bg-light" method="post">

                    <div class="form-group">
                        <label for="nombre">Ingrese el correo:</label>
            
                        <div class="input-group">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
            
                            <input type="text" class="form-control" id="nombre" name="registroNombre">
            
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label for="pwd">Ingrese la contraseña:</label>
            
                        <div class="input-group">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
            
                            <input type="password" class="form-control" id="pwd" name="registroPassword">
            
                        </div>
            
                    </div>
            
                    <button type="submit" class="btn btn-primary mt-2">Ingresar</button>
                </form>

            </div>

          </div>  

    </div>

</div>