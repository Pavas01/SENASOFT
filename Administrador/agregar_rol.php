<?php
require_once '../Includes/conexion.php';
require_once '../Includes/header.php';

$idrol="SELECT * FROM rol";
$rol=mysqli_query($conexion,$idrol);

?>

<style>
    .hidden{
        display: none;
    }
</style>

<div class="row" style="padding-top:20px;">
    <div class="col-sm-12">
       <center><h3>Cambiar Rol Invitado</h3></center>
        <div class="container">
            <table class="table table-bordered bg-light text-center">
                <thead class="thead-dark">
                   <th class="hidden">#</th>
                    <th>Nombre / Apellido</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Asignar Rol</th>
                </thead>
                <tbody>
                   <?php 
                    $sql = "SELECT * FROM usuarios WHERE id_rol=5";
                    $result = mysqli_query($conexion,$sql);
                    while($row=mysqli_fetch_array($result)){?>
                    <tr>
                        <td class="hidden"><?php echo $row[0] ?></td>
                        <td><?php echo $row[1] ." ". $row[2] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[7] ?></td>
                        <td>
                            <a href="#" class="btn btn-warning edit">
                                <i class="fas fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="Modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Asignar Roles</h4>
                </div>
                <form action="recibe_rol.php" method="POST" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <select name="rol" id="" class="form-control" required>
                               <?php while ($dato=mysqli_fetch_array($rol)) {?>
                                <option value="<?php echo $dato[0] ?>">
                                <?php  echo $dato[1] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<script>
    $(document).ready(function (){
        $('.edit').on('click', function(){
            $('#Modal').modal('show');
                $tr = $(this).closest('tr');
                var data =$tr.children("td").map(function(){
                return $(this).text();
                }).get();
                console.log(data);
                $('#id').val(data[0]);
        });
    });
</script>

<?php
require_once '../Includes/footer.php';
?>