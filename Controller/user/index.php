<?php
ob_start();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}

switch ($action) {
    case 'adduser':{
            if (isset($_POST['add-user'])) {
                $full_name  = $_POST['full_name'];
                $email      = $_POST['email'];
                $rank       = $_POST['rank'];
                $is_active  = $_POST['is_active'];
                $created_at = $_POST['created_at'];
                if ($db->insertDBuser($full_name, $email, $rank, $is_active, $created_at)) {
                    header('location:index.php?controller=user&action=listuser');
                }
            }

            require_once('View/newuser.php');
            break;
        }
    case 'updateuser':{
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $table  = "user";
                $dataID = $db->getDBid($table, $id);
                if (isset($_POST['update-user'])) {
                    $full_name  = $_POST['full_name'];
                    $email      = $_POST['email'];
                    $rank       = $_POST['rank'];
                    $is_active  = $_POST['is_active'];
                    $created_at = $_POST['created_at'];
                    if ($db->updateDBuser($id, $full_name, $email, $rank, $is_active, $created_at)) {
                        header('location:index.php?controller=user&action=listuser');
                    }

                }
            }
            require_once('View/update.php');
            break;
        }
    case 'deleteuser':{
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $table  = "user";
                $dataID = $db->getDBid($table, $id);
                if ($db->deleteDBuser($id)) {
                    header('location:index.php?controller=user&action=listuser');
                }
            }
        }
    case 'listuser':{
            $table = "user";
            $data  = $db->getAllDB($table);
            require_once('View/list.php');
            break;
        }
    case 'info':{
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $table  = "user";
                $dataID = $db->getDBid($table, $id);
            }
            require_once('View/info.php');
            break;
        }
    default:{
    	$table = "user";
    	$data  = $db->getAllDB($table);    	
    	require_once('View/list.php');
    	break;
    }
}
