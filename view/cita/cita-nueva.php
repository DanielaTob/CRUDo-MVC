<div class="container">
<h1 class="page-header">
   Nuevo Registro
</h1>

<ol class="breadcrumb">
<a href="?c=Cita" class="btn btn-primary"><i class="bi bi-box-arrow-in-left"></i> Atrás</a>
</ol>

<form id="frm-cita" action="?c=Cita&a=Guardar" method="post" enctype="multipart/form-data">
   
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Client_name"  class="form-control" placeholder="Ingrese su nombre" required/>
    </div>
    
    <div class="form-group">
        <label>Nombre del equipo</label>
        <input type="text" name="Team"  class="form-control" placeholder="Ingrese el nombre del equipo" required />
    </div>

    <div class="form-group">
        <label>Tema de consulta</label>
        <input type="text" name="Request" class="form-control" placeholder="Ingrese su tema de consulta" required/>
    </div>
    
    
    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="Date" class="form-control datepicker" placeholder="Ingrese fecha de la cita" required/>
    </div>
    
    <hr />
    
    <div class="text-right pb-4">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
</div>