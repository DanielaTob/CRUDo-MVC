<div class="container">



<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th style="width:180px;">Nombre</th>
            <th>Team</th>
            <th>Request</th>
            <th style="width:120px;">Date</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->client_name; ?></td>
            <td><?php echo $r->team; ?></td>
            <td><?php echo $r->request; ?></td>
            <td><?php echo $r->date; ?></td>
            <td>
                <a href="?c=Cita&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
