<?php
    $data = array();
    flexible_function($data);

    function flexible_function(&$data){
        $function ='login';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function=$action;
        }
        echo  $function($data);
    }

      function view(&$data){
          $data['employee_data'] = m_get_data();
          $data['page'] = "employee/view";
    }
    function add(&$data){
        //$data['$data_add'] = m_add_data();
        $data['page'] = "employee/add";
    }
      function add_info(&$data){
      $data['$data_add'] = m_add_data();
      if($data['$data_add']){
        $action='view';
    }else{
        $action="add";
    }
    header("location:index.php?action=$action"); 
    }

    function delete(&$data){
        $data_delete = m_delete_employee();
        if($data_delete){
            header('location:index.php?action=view');
        }else{
            echo 'you cannot delete';
        }
    }

    function update(&$data){
        $data['data_update'] = getupdateinfo_employee() ;
        $data['page'] = "employee/update";
          //var_dump($data['data_update']);
    }
    function edit(&$data) {
        $id=$_GET['id'];
        $data_update2= m_update_employee($_POST);
        if($data_update2){
            $action='view';
        }else{
            $action='update&id=$id';
        }
        header("location:index.php?action=$action");
    }
    function update_info(&$data) {
        $data_update= m_update_employee($_POST);
        if($data_update){
            $action='view';
        }else{
            $action="add";
        }
        header("location:index.php?action=$action");
    }
function login(&$data){
    $data['page']= "employee/login";
}

    function c_employee_loging(&$data){
    validate();  
}
function c_employee_logout(&$data){
    validate_logout();
    session_destroy();
    header('Location: index.php?action=login');
    
    
}

function register(&$data){
    //$data['$data_add'] = m_add_user();
    $data['page'] = "employee/register";
    
  }
  function register_data(&$data){
    $data['$data_user'] = m_add_user();
    if($data['$data_user']){
        $action='login';
    }else{
        $action="register";
    }
    header("location:index.php?action=$action");
   // $data['page'] = "register";
    
  }
    
  function home(&$data){
    
    $data['page'] = "employee/home";
}
    
    ?>