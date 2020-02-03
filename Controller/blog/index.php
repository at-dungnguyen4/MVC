<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}
switch ($action) {
    case 'listblog':{
            $table = "blog";
            $data  = $db->getAllDBblog($table);
            require_once('View/blog.php');
            break;
        }
    case 'infoblog':{
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $table  = "blog";
                $dataID = $db->getDBidblog($table, $id);
            }
            require_once('View/infoblog.php');
            break;
        }
    case 'addblog':{
            $data1 = $db->getAllDBuserid();
            $data2 = $db->getAllDBcategoryid();
            if (isset($_POST['add-blog'])) {
                $category_id = $_POST['category_id'];
                $user_id     = $_POST['user_id'];
                $title       = $_POST['title'];
                $view        = $_POST['view'];
                $is_active   = $_POST['is_active'];
                $content     = $_POST['content'];
                $created_at  = $_POST['created_at'];
                $updated_at  = $_POST['updated_at'];
                if ($db->insertDBblog($category_id, $user_id, $title, $view, $is_active, $content, $created_at, $updated_at)) {
                    header('location:index.php?controller=blog&action=listblog');
                }
            }
            require_once('View/newblog.php');
            break;
        }
    case 'updateblog':{
            if (isset($_GET['id'])) {
                $id    = $_GET['id'];
                $table = "blog";
                $dataID = $db->getDBid($table, $id);
                $data1  = $db->getAllDBuserid();
                $data2  = $db->getAllDBcategoryid();
                if (isset($_POST['update-blog'])) {
                    $category_id = $_POST['category_id'];
                    $user_id     = $_POST['user_id'];
                    $title       = $_POST['title'];
                    $view        = $_POST['view'];
                    $is_active   = $_POST['is_active'];
                    $content     = $_POST['content'];
                    $created_at  = $_POST['created_at'];
                    $updated_at  = $_POST['updated_at'];
                    if ($db->updateDBblog($id, $category_id, $user_id, $title, $view, $is_active, $content, $created_at, $updated_at)) {
                        header('location:index.php?controller=blog&action=listblog');
                    }

                }
            }
            require_once('View/updateblog.php');
            break;
        }
    case 'deleteblog':{
            if (isset($_GET['id'])) {
                $id     = $_GET['id'];
                $table  = "blog";
                $dataID = $db->getDBid($table, $id);
                if ($db->deleteDBblog($id)) {
                    header('location:index.php?controller=blog&action=listblog');
                }
            }
        }
    default:{
        $table = "blog";
    	$data  = $db->getAllDB($table);    	
    	require_once('View/blog.php');
    	break;
    }
}
