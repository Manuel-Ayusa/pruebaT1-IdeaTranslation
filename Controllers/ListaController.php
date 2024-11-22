<?php 
    require_once('models/Tarea.php');

    class ListaController {

        private $modelo;

        public function __construct() 
        {
            $this->modelo = new Tarea;    
        }
        
        public function inicio()
        {
            $tareas = $this->modelo->recuperarInformacion();

            require_once('Views/index.php');
        }
        
    }

?>