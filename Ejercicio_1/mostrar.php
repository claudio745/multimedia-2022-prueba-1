<?php
    require 'conexion.php';
        $consulta = "SELECT * FROM noticias";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado)
        {
            while($row = $resultado->fetch_array)
            {
                $titulo = $row['titulo'];
                $cuerpo = $row['cuerpo'];
                $imagen = $row['imagen'];
                $categoria = $row['categoria'];
                $autor = $row['autor'];
              ?>
                <div>
                    <h2> <?php echo $titulo; ?> </h2>
                    <div>
                        <p>
                            <b>Titulo:  </b> <?php  echo $titulo    ?> <br>
                            <b>Cuerpo:  </b>  <?php echo $cuerpo  ?> <br>
                            <b>Imagen:  </b>  <?php echo $imagen    ?>   <br>
                            <b>Categoria:  </b> <?php  echo $categoria   ?>     <br>
                            <b>Autor:  </b> <?php   echo $autor     ?>   <br> 
                        </p>
                    </div>
                </div>
                <?php
            }
        }
    