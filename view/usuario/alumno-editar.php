<h1 class="page-header">
    <?php echo $alm->usuario_id != null ? $alm->usuario_nombre : 'Editar Registro'; ?>
</h1>


<ol class="breadcrumb">
  <li><a href="?c=Alumno&a=menu&id=">Usuarios</a></li>
  
  <li class="active"><?php echo $alm->usuario_id != null ? $alm->usuario_nombre : 'Editar'; ?></li>
</ol>


<form id="frm-alumno" action="?c=Alumno&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->usuario_id; ?>" />
    
    <div class="form-group">
        <label>nombre</label>
        <input type="text" name="usuario_nombre" value="<?php echo $alm->usuario_nombre; ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>
    
    <div class="form-group">
        <label>RFC</label>
        <input type="text" name="usuario_correo" value="<?php echo $alm->usuario_rfc; ?>" class="form-control" placeholder="Ingrese su apellido" />
    </div>
    
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="usuario_rfc" value="<?php echo $alm->usuario_direccion; ?>" class="form-control" placeholder="Ingrese su correo electrónico" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="usuario_password" value="<?php echo $alm->usuario_telefono; ?>" class="form-control" placeholder="Ingrese su correo electrónico" />
    </div>



     <div class="form-group">
        <label>web site</label>
        <input type="text" name="nombre" value="<?php echo $alm->usuario_webSite; ?>" class="form-control" placeholder="Ingrese su correo electrónico" />
    </div>


    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>