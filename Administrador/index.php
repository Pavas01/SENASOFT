<?php require_once '../Includes/header.php'; ?>

<style>
    body{
        background-image: url(../Img/admin.jpg);
</style>


<div class="navbar">
<ul class="nav nav-pills">
    <li class="nav-item dropdown">
        <a class="nav-link  text-dark bg-dark p-1" data-toggle="dropdown" href="#"><h2 class="text-light">
        <i class="fas fa-cog"></i> AGREGAR</h2></a>
    <div class="dropdown-menu bg-dark">
        <a class="dropdown-item bg-dark text-light m-auto" href="#"><i class="fab fa-product-hunt"></i> PRODUCTOS</a>
        <a class="dropdown-item bg-dark text-light m-auto" href="agregar_empresas.php"><i class="fas fa-hotel"></i> EMPRESAS</a>
        <a class="dropdown-item bg-dark text-light m-auto" href="agregar_bodegas.php"><i class="fas fa-home"></i> BODEGAS</a>
        <a class="dropdown-item bg-dark text-light m-auto" href="#"><i class="fas fa-users"></i> CLIENTES</a>
    </div>
    </li>
</ul>

<ul class="nav nav-pills">
    <li class="nav-item dropdown">
        <a class="nav-link  text-dark bg-dark p-1" data-toggle="dropdown" href="#"><h2 class="text-light">
        <i class="fas fa-user-circle"></i> CUENTA</h2></a>
    <div class="dropdown-menu bg-dark">
        <a class="dropdown-item bg-dark text-light m-auto" href="#">
        <i class="fas fa-user "></i> VER CUENTA
           </a>
        <a class="dropdown-item bg-dark text-light m-auto" href="../Includes/cerrar_sesion.php">
        <i class="fas fa-power-off"></i> CERRAR</a>
    </div>
    </li>
</ul>
</div>

<div class="container shadow-lg">
    
</div>

<?php require_once '../Includes/footer.php'; ?>