<?php
require '../vendor/autoload.php';

$alimentos = new Kawschool\Alimentos;

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    if ($_POST['accion']==='Registrar'){

        if(empty($_POST['titulo']))
            exit('Completar titulo');
        
        if(empty($_POST['descripcion']))
            exit('Completar titulo');

        if(empty($_POST['tipo_id']))
            exit('Seleccionar una tipo');

        if(!is_numeric($_POST['tipo_id']))
            exit('Seleccionar un tipo válido');

        
        $_params = array(
            'titulo'=>$_POST['titulo'],
            'descripcion'=>$_POST['descripcion'],
            'foto'=> subirFoto(),
            'precio'=>$_POST['precio'],
            'tipo_id'=>$_POST['tipo_id'],
            'fecha'=> date('Y-m-d')
        );

        $rpt = $alimentos->registrar($_params);

        if($rpt)
            header('Location: alimentos/index.php');
        else
            print 'Error al registrar un alimento';
        

    }

    if ($_POST['accion']==='Actualizar'){

        if(empty($_POST['titulo']))
        exit('Completar titulo');
    
    if(empty($_POST['descripcion']))
        exit('Completar titulo');

    if(empty($_POST['tipo_id']))
        exit('Seleccionar un tipo');

    if(!is_numeric($_POST['tipo_id']))
        exit('Seleccionar un tipo válido');

    
    $_params = array(
        'titulo'=>$_POST['titulo'],
        'descripcion'=>$_POST['descripcion'],
        'precio'=>$_POST['precio'],
        'tipo_id'=>$_POST['tipo_id'],
        'fecha'=> date('Y-m-d'),
        'id'=>$_POST['id'],
    );

    if(!empty($_POST['foto_temp']))
        $_params['foto'] = $_POST['foto_temp'];
    
    if(!empty($_FILES['foto']['name']))
        $_params['foto'] = subirFoto();

    $rpt = $alimentos->actualizar($_params);
    if($rpt)
        header('Location: alimentos/index.php');
    else
        print 'Error al actualizar un alimento';

    }

}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $alimentos->eliminar($id);
    
    if($rpt)
        header('Location: alimentos/index.php');
    else
        print 'Error al eliminar un alimento';


}


function subirFoto() {

    $carpeta = __DIR__.'/../upload/';

    $archivo = $carpeta.$_FILES['foto']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'],$archivo);

    return $_FILES['foto']['name'];


}




