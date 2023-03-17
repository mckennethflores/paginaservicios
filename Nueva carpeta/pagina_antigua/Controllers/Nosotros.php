<?php
class Nosotros extends Controllers{
    public function __construct(){
        parent::__construct();
    }

    public function nosotros(){
       // echo "mensaje desde el controlador";
       $data['page_tag'] = "Nosotros";
       $data['page_title'] = "MasterDent | Servicios en Odontología General y Especializada - Nosotros";
       $data['page_name'] = "nosotros";
       $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas sequi rerum debitis reiciendis qui fugiat corrupti beatae neque repellendus enim! Aliquam quos consequuntur cupiditate culpa animi dicta beatae delectus magni.";
       $this->views->getView($this,"nosotros",$data);
    }

}
?>