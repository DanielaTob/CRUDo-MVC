<?php
require_once 'model/cita.php';

class CitaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cita();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/banner.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Cita();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cita/cita-editar.php'; 
        require_once 'view/footer.php';
    }


    public function Nuevo(){
       
        
        if(isset($_REQUEST['id'])){
            $alm = new Cita();
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cita/cita-nueva.php';
        require_once 'view/footer.php';
    }

    public function Citas(){
       
        
        if(isset($_REQUEST['id'])){
            $alm = new Cita();
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cita/cita.php';
    }
    
    public function Guardar(){
        $alm = new Cita();
        
        $alm->id = $_REQUEST['id'];
        $alm->client_name = $_REQUEST['Client_name'];
        $alm->team = $_REQUEST['Team'];
        $alm->request = $_REQUEST['Request'];
        $alm->date = $_REQUEST['Date'];
        

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}