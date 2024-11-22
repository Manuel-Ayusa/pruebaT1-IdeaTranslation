<?php


class Tarea {

    private $conexion;

    public function __construct()
    {
        $this->conexion = BaseDeDatos::conectar();
    }

    public function recuperarInformacion()
    {
        $consulta = 'SELECT 
                    task.id AS task_id, resource.firstname, resource.lastname, work_order.project_id, work_order.created, work_order.id AS order_work  
                    FROM task 
                    INNER JOIN resource 
                    ON task.resource_id_assigned = resource.id
                    INNER JOIN work_order_item_detail 
                    ON  work_order_item_detail.work_order_item_id = task.work_order_item_detail_id
                    INNER JOIN work_order_item 
                    ON  work_order_item.id = work_order_item_detail.work_order_item_id
                    INNER JOIN work_order 
                    ON  work_order.id = work_order_item.work_order_id
                    WHERE task.task_status_id = 4';
        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $resultados;
    }

}

?>