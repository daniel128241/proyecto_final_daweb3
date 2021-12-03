<?php include("bd.php") ?>
<?php include('header.php') ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                <form action="insertar.php" method="POST">
                        <h1>REGISTRO</h1>
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="nombre" autofocus>
                        <br>
                        <input type="text" name="lastname" class="form-control" placeholder="apellido" autofocus>
                        <br>
		                <input type="email" name="email" class="form-control" placeholder="correo" autofocus>
                        <br>
		                <input type="text" name="years" class="form-control" placeholder="edad" autofocus>
                        <br>
		                <input type="text" name="cel" class="form-control" placeholder="telefono" autofocus>
                        </div><br>
                        <input type="submit" class="btn btn-success btn-block" name="cliente">
                        <a href="/proyecto_zuñiga_TallerElectrico/index.php" 
                        class="btn btn-danger btn-block">Inicio</a>
                    </form>
    
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                            <th>configurar</th>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM cliente" ;
                        $result = mysqli_query($conex, $query,);

                        while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">
                            Editar</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                            Eliminar</a>                            
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>