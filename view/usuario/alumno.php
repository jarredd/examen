

<h1 class="page-header">Usuarios</h1>

<div class="well well-sm text-right">
    <nav class="nav">
    <a class="nav-link active" href="#">Usuarios</a>
    <a class="nav-link" href="#">Configuración de cuenta </a>
    <a class="nav-link" href="?c=Alumno&a=Algoritmos&id=">Algoritmos</a>
    
    </nav>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            
            <th>nombre</th>
            <th>Correo</th>
            <th style="width:120px;">RFC</th>
            
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            
            <td><?php echo $r->usuario_nombre; ?></td>
            <td><?php echo $r->usuario_correo; ?></td>
            
            <td><?php echo $r->usuario_rfc; ?></td>
            
          

            <td>
                <a href="?c=Alumno&a=Editar&id=<?php echo $r->usuario_id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->usuario_id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

