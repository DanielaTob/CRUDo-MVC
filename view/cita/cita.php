<div class="container pb-4">


<div class="table-responsive">
<ol class="breadcrumb">
  <a href="?c=Cita" class="btn btn-primary"><i class="bi bi-box-arrow-in-left"></i> Atrás</a>
</ol>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th style="width:180px;">Nombre</th>
            <th>Nombre del equipo</th>
            <th>Tema de consulta</th>
            <th style="width:120px;">Fecha</th>
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
                <a class="d-flex btn btn-success" href="?c=Cita&a=Crud&id=<?php echo $r->id; ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="d-flex btn btn-danger" href="?c=Cita&a=Eliminar&id=<?php echo $r->id; ?>"><i class="bi bi-trash3-fill"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div> 
</div>
