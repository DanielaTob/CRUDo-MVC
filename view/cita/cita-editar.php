<div class="container">
<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->client_name : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Cita">Cita</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->client_name : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cita" action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Client_name" value="<?php echo $alm->client_name; ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>
    
    <div class="form-group">
        <label>Team</label>
        <input type="text" name="Team" value="<?php echo $alm->team; ?>" class="form-control" placeholder="Ingrese su apellido"  />
    </div>

    <div class="form-group">
        <label>Request</label>
        <input type="text" name="Request" value="<?php echo $alm->request; ?>" class="form-control" placeholder="Ingrese su apellido" />
    </div>
    
    
    <div class="form-group">
        <label>Date</label>
        <input readonly type="text" name="Date" value="<?php echo $alm->date; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

