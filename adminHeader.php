<?php

 ?>
 <header>
   <div class="container-fluid">

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="admin.php">SocialTruek</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavDropdown">
     <ul class="navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="admin.php">Inicio <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item dropdown">
         <!-- menu de usuarios -->
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Usuarios
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="adminUsuario.php">Altas</a>
           <a class="dropdown-item" href="adminUsuarios.php">Todos</a>
           <a class="dropdown-item" href="#">Buscar</a>
         </div>
       </li>
       <li class="nav-item dropdown">
         <!-- menu de productos -->
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Productos
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="adminProductos.php?cat=0">Todos</a>
               <div class="dropdown-divider"></div>
           <?php $categorias = baseMySQL::verRegistros($pdo,'categorias');?>
           <?php foreach ($categorias as $categoria): ?>
              <a class="dropdown-item" style="text-decoration:none" href="adminProductos.php?cat=<?=$categoria['id'] ?>"><?=$categoria["nombre"]?></a>
           <?php endforeach; ?>
               <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Buscar</a>
         </div>
       </li>
       <li class="nav-item dropdown">
         <!-- menu de categorias -->
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Categorias
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="adminCategoria.php" >Nueva</a>
           <a class="dropdown-item" href="adminCategorias.php">Ver</a>
         </div>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link" href="json.php">Backup <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link" href="adminCodigo.php">Codigo <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item dropdown active">
         <a class="nav-link" href="adminAccess.php?cerrar=1">Salir <span class="sr-only">(current)</span></a>
       </li>
     </ul>
   </div>
 </nav>
</div>
</header>
