<?php  require_once '../Includes/header.php';   ?>

<style>
    input{
         text-align: center;  
    }
    
    select{
        text-align: center; 
    }
</style>

<div class="row">
    
    <div class="col-sm-3">
        <div class="container m-auto" style="padding-top:20px;">
            <form action="" class="bg-light p-2 border rounded">
                <div class="form-group"><br>
                    <center class=""><h4>Nueva Empresa</h4></center>
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <select class="form-control" name="id_municipio" id="id_municipio">
                        <option value=""></option>
                        <option value = ""></option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono" class="form-control">
                </div>
                 <div class="form-group">
                    <input type="email" id="correo" name="correo" placeholder="Correo Electronico" class="form-control">
                </div>
                <div class="row" align="center">
                    <input type="submit" value="Guardar" class="btn btn-success m-auto" >
                </div><br>
            </form>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="container" style="padding-top:20px;">
            <table class="table table-bordered text-center bg-light">
                    <thead class="thead-dark">
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php  require_once '../Includes/footer.php';   ?>