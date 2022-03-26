<div class="container">
<h1 class="page-header">
   Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">Cita</a></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
   
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Client_name"  class="form-control" placeholder="Ingrese su nombre" />
    </div>
    
    <div class="form-group">
        <label>Team</label>
        <input type="text" name="Team"  class="form-control" placeholder="Ingrese su apellido"  />
    </div>

    <div class="form-group">
        <label>Request</label>
        <input type="text" name="Request" class="form-control" placeholder="Ingrese su apellido" />
    </div>
    
    
    <div class="form-group">
        <label>Date</label>
        <input type="text" name="Date" class="form-control datepicker" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>