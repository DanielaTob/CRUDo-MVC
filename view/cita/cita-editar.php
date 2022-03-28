<div class="container pb-4">
<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->client_name : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
<a href="?c=Cita&a=Citas" class="btn btn-primary"><i class="bi bi-box-arrow-in-left"></i> Atrás</a>
 
 
</ol>

<form id="frm-cita" action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Client_name" value="<?php echo $alm->client_name; ?>" class="form-control" placeholder="Ingrese su nombre" required/>
    </div>
    
    <div class="form-group">
        <label>Nombre del equipo</label>
        <input type="text" name="Team" value="<?php echo $alm->team; ?>" class="form-control" placeholder="Ingrese el nombre del equipo" required/>
    </div>

    <div class="form-group">
        <label>Tema de consulta</label>
        <input type="text" name="Request" value="<?php echo $alm->request; ?>" class="form-control" placeholder="Ingrese su tema de consulta" required/>
    </div>
    
    
    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="Date" value="<?php echo $alm->date; ?>" class="form-control datepicker" placeholder="Ingrese fecha de la cita" required/>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
</div>

