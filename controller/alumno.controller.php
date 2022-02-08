<?php
require_once 'model/alumno.php';

class AlumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Alumno();
        
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/login.php';
        require_once 'view/footer.php';
    }
    public function Algoritmos(){
        require_once 'view/header.php';
        require_once 'view/algoritmos.php';
        require_once 'view/footer.php';
    }
    public function menu(){
        require_once 'view/header.php';
        require_once 'view/usuario/alumno.php';
        require_once 'view/footer.php';
    }
    public function Editar(){
        $alm = new Alumno();
        
        if(isset($_REQUEST['usuario_id'])){
            $alm = $this->model->Obtener($_REQUEST['usuario_id']);
        }
        
        //$alm->usuario_id = $_REQUEST['usuario_id'];
        $this->model->Obtener($alm);
        require_once 'view/header.php';
        require_once 'view/usuario/alumno-editar.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $alm = new Alumno();
        
        if(isset($_REQUEST['usuario_id'])){
            $alm = $this->model->Obtener($_REQUEST['usuario_id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/alumno-editar.php';
        require_once 'view/footer.php';
    }
    
    public function logIn(){
        $alm = new Alumno();
        $alm->usuario_correo = $_REQUEST['u_correo'];
        $alm->usuario_password = $_REQUEST['u_password'];
        $this->model->logIn($alm);
        
       if($this->model->logIn($alm)==1 ){
        require_once 'view/header.php';
        require_once 'view/usuario/alumno.php';
        require_once 'view/footer.php';
        }else{
            header('Location: index.php');
        }

   
    }

    public function Guardar(){
        $alm = new Alumno();
        
        //$alm->id_alumno = $_REQUEST['id_alumno'];
        $alm->usuario_nombre = $_REQUEST['usuario_nombre'];
        $alm->usuario_correo = $_REQUEST['usuario_correo'];
        $alm->usuario_rfc = $_REQUEST['usuario_rfc'];
        $alm->usuario_password = $_REQUEST['usuario_password'];

        

        $alm->usuario_id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $alm = new Alumno();
        //$alm = $this->model->Obtener($_REQUEST['usuario_id']);
        $alm= $this->model->Eliminar($_REQUEST['usuario_id']);
        header('Location: ');
    }
}
