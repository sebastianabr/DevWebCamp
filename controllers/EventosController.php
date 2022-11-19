<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Categoria;
use MVC\Router;
use Model\Dia;
use Model\Evento;
use Model\Hora;
use Model\Ponente;

class EventosController{
    

    public static function index(Router $router){
        $pagina_actual=$_GET['page'];
        $pagina_actual= filter_var($pagina_actual,FILTER_VALIDATE_INT);
        if(!$pagina_actual || $pagina_actual<1){
            header('Location: /admin/eventos?page=1');
        }
        $por_pagina = 10;
        $total = Evento::total();
        $paginacion = new Paginacion($pagina_actual,$por_pagina,$total);
        
        $eventos = Evento::paginar($por_pagina,$paginacion->offset());
        foreach($eventos as $evento){
            $evento->categoria=Categoria::find($evento->categoria_id);
            $evento->dia = Dia::find($evento->dia_id);
            $evento->hora = Hora::find($evento->hora_id);
            $evento->ponente=Ponente::find($evento->ponente_id);
        }
        $router->render("admin/eventos/index",[
            'titulo'=>'Conferencias y Workshops',
            'eventos'=>$eventos,
            'paginacion'=>$paginacion->paginacion()
        ]);

    }
    public static function crear(Router $router){
        $alertas = [];

        $categorias = Categoria::all();
        $dias = Dia::all();
        $horas = Hora::all();

        $evento=new Evento;
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $evento->sincronizar($_POST);
            $alertas= $evento->validar();
            if(empty($alertas)){
                $resultado = $evento->crear();
                if($resultado){
                    header("Location: /admin/eventos");
                }
            }
        }

        $router->render("admin/eventos/crear",[
            'titulo'=>"Registrar Evento",
            'alertas'=>$alertas,
            'categorias'=>$categorias,
            'dias'=>$dias,
            'horas'=>$horas,
            'evento'=>$evento
        ]);
    }


    public static function editar(Router $router){
        $alertas = [];
        $id = $_GET["id"];
        $id= filter_var($id,FILTER_VALIDATE_INT);
        if(!$id){
            header('Location: /admin/eventos');
        }
        $categorias = Categoria::all();
        $dias = Dia::all();
        $horas = Hora::all();

        $evento=Evento::find(($id));
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $evento->sincronizar($_POST);
            $alertas= $evento->validar();
            if(empty($alertas)){
                $resultado = $evento->crear();
                if($resultado){
                    header("Location: /admin/eventos");
                }
            }
        }

        $router->render("admin/eventos/editar",[
            'titulo'=>"Editar Evento",
            'alertas'=>$alertas,
            'categorias'=>$categorias,
            'dias'=>$dias,
            'horas'=>$horas,
            'evento'=>$evento
        ]);
    }
    public static function eliminar(Router $router){
        if(!is_admin()){
            header("Location: /login");
        }
        if($_SERVER["REQUEST_METHOD"]==='POST'){
            $id = $_POST["id"];
            $evento = Evento::find($id);
            if(!isset($evento)){
                header("Location: /admin/eventos");
            }
            $resultado=$evento->eliminar();
            if($resultado){
                header("Location: /admin/eventos");
            }
        }
    }
}