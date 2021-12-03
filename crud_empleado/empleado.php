<?php include("bd.php") ?>

<?php include('header.php') ?>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                <form action="insertar.php" method="POST">
                        <h1>EMPLEADO</h1>
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="nombre" autofocus>
                        <br>
                        <input type="text" name="lastname" class="form-control" placeholder="apellido" autofocus>
                        <br>
		                <input type="text" name="years" class="form-control" placeholder="edad" autofocus>
                        <br>
		                <input type="text" name="rfc" class="form-control" placeholder="RFC" autofocus>
                        <br>
		                <input type="email" name="email" class="form-control" placeholder="correo" autofocus>
                        </div><br>
                        <input type="submit" class="btn btn-success btn-block" name="empleado">
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
                            <th>Edad</th>
                            <th>RFC</th>
                            <th>Correo</th>
                            <th>Fecha_registro</th>
                            <th>configurar</th>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM empleado" ;
                        $result = mysqli_query($conex, $query,);

                        while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td><?php echo $row['RFC']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['fecha_reg']; ?></td>
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