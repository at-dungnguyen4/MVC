<?php
class Database
{
    private $servername = "localhost:3306";
    private $username = "root";
    private $password = "Anhdungdn97";
    private $dbname = "BTSQL";
    private $conn;
    private $result;

    public function connectDB()
    {
        //$this->conn = new PDO("mysql:host=$this->servername;dbname=BTSQL", $this->username, $this->password);
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            echo "Connect Failed";
            exit();
        }
        return $this->conn;
    }

    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    public function getDB()
    {
        if ($this->result) {
            $data = mysqli_fetch_assoc($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getDBid($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id='$id'";
        $this->execute($sql);
        if ($this->num_rows() != 0) {
            $data = mysqli_fetch_assoc($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getAllDBcategoryid()
    {
        $sql = "SELECT id FROM category";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getDB()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function getAllDBuserid()
    {
        $sql = "SELECT id FROM user";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getDB()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function getDBidblog($table, $id)
    {
        $sql = "SELECT * FROM blog join user on blog.user_id = user.id WHERE blog.id='$id'";
        $this->execute($sql);
        if ($this->num_rows() != 0) {
            $data = mysqli_fetch_assoc($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getAllDB($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getDB()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function getAllDBblog($table)
    {
        $sql = "SELECT * FROM $table ORDER BY created_at desc ";
        $this->execute($sql);
        if ($this->num_rows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getDB()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function num_rows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    public function insertDBuser($full_name, $email, $rank, $is_active, $created_at)
    {
        $sql = "INSERT INTO user(full_name,email,rank,is_active,created_at) values('$full_name','$email','$rank','$is_active','$created_at')";
        return $this->execute($sql);
    }

    public function updateDBuser($id, $full_name, $email, $rank, $is_active, $created_at)
    {
        $sql = "UPDATE user SET full_name = '$full_name', email = '$email', rank = '$rank', is_active = '$is_active', created_at = '$created_at' where id = '$id'";
        return $this->execute($sql);
    }

    public function deleteDBuser($id)
    {
        $sql = "DELETE FROM user where id = '$id'";
        return $this->execute($sql);
    }

    public function insertDBblog($category_id, $user_id, $title, $view, $is_active, $content, $created_at, $updated_at)
    {
        $sql = "INSERT INTO blog(category_id,user_id,title,view,is_active,content,created_at,updated_at) values('$category_id','$user_id','$title','$view','$is_active','$content','$created_at','$updated_at')";
        return $this->execute($sql);
    }

    public function updateDBblog($id, $category_id, $user_id, $title, $view, $is_active, $content, $created_at, $updated_at)
    {
        $sql = "UPDATE blog SET category_id = '$category_id', user_id = '$user_id', title = '$title', view = '$view', is_active='$is_active',content = '$content',created_at = '$created_at',updated_at='$updated_at' where id = '$id'";
        return $this->execute($sql);
    }

    public function deleteDBblog($id)
    {
        $sql = "DELETE FROM blog where id = '$id'";
        return $this->execute($sql);
    }
}
