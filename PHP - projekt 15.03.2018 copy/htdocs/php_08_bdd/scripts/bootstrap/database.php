<?php


class Database
{

    private $host;
    private $user;
    private $password;
    private $name;
    private $db;

    /**
     * Database constructor.
     * @param $host
     * @param $user
     * @param $password
     * @param $name
     */
    public function __construct($host, $user, $password, $name)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->name = $name;
        $db = new mysqli($this->getHost(), $this->getUser(), $this->getPassword(), $this->getName());
        if ($db->connect_errno != 0) {
            $this->error(1);

        } else {
            $this->db = $db;
            return $db;
        }
    }

    public function getDatabase()
    {

    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->polaczenie;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->polaczenie = $db;
    }

    public function select($table)
    {
        $sql = "SELECT * FROM " . $table;
        $result = $this->db->query($sql);
        return $result;
    }

    public function getValueById($table, $column, $id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $tmp = $result->fetch_assoc();
            return $tmp[$column];
        }
        return null;
    }

    public function getObjectById($table, $id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function getObject($table, $key, $value)
    {
        $sql = "SELECT * FROM " . $table . " WHERE " . $key . " = '" . $value . "'";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getComments($table, $post_id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE post_id = " . $post_id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function getPublishComments($table, $post_id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE post_id = " . $post_id . " AND status = 'publish'";
        $result = $this->db->query($sql);
        return $result;
    }

    public function addPage($title, $content, $user)
    {
        $sql = "INSERT INTO page(title,content,user_id) VALUES ('" . $title . "','" . $content . "'," . $user . ")";
        $result = $this->db->query($sql);
        return $result;
    }

    public function addPost($title, $excerpt, $content, $user, $status, $category)
    {
        $sql = "INSERT INTO posts(title, excerpt, content, created, status, user_id, category_id) VALUES(
             '" . $title . "',
             '" . $excerpt . "',
             '" . $content . "',
             now(),
             '" . $status . "',
             " . $user . ",
             " . $category . "
        )";
        $result = $this->db->query($sql);
        return $result;
    }

    public function addCategory($name, $description)
    {
        $sql = "INSERT INTO category(name,description) VALUES('" . $name . "','" . $description . "')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function addUser($login, $email, $password, $description, $role)
    {
        $sql = "INSERT INTO users(login,email,password,recovery,description,role_id) VALUES('" . $login . "', '" . $email . "', '" . sha1($password) . "', '" . sha1($email) . "', '" . $description . "'," . $role . ")";
        $result = $this->db->query($sql);
        return $result;
    }

    public function addComments($author, $content, $status, $id)
    {
        $sql = "INSERT INTO comments(author, created, content, status, post_id) VALUES 
      ('" . $author . "',now(),'" . $content . "','" . $status . " '," . $id . ")";
        $result = $this->db->query($sql);
        return $result;
    }

    public function addNewsletter($author, $email, $status)
    {
        $sql = "INSERT INTO newsletter(author, created, email, status) VALUES  
        ('" . $author . "',now(),'" . $email . "','" . $status . " ')";
        $result = $this->db->query($sql);
        return $result;
    }

    public function deletePage($id)
    {
        $sql = "DELETE FROM page WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM category WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function deleteComments($id)
    {
        $sql = "DELETE FROM comments WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function changeCommentStatus($id, $status)
    {
        if ($status == 'block') {
            $sql = "UPDATE comments SET status='publish' WHERE id = " . $id;
        } else {
            $sql = "UPDATE comments SET status='block' WHERE id = " . $id;
        }
        $result = $this->db->query($sql);
        return $result;
    }

    public function updateCategory($name, $description, $id)
    {
        $sql = "UPDATE category SET name = '" . $name . "', description = '" . $description . "' WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function updatePage($title, $content, $author, $id)
    {
        $sql = "UPDATE page SET title = '" . $title . "', content = '" . $content . "', user_id = " . $author . " WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function updatePost($title, $excerpt, $content, $status, $category, $author, $id)
    {
        $sql = "UPDATE posts SET title = '" . $title . "', excerpt = '" . $excerpt . "', content = '" . $content . "', status= '" . $status . "', category_id = " . $category . ", user_id = " . $author . " WHERE id =  " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function updateUser($login, $email, $description, $id)
    {
        $sql = "UPDATE users SET login = '" . $login . "', email = '" . $email . "', description = '" . $description . "' WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function updateComments($author, $content,  $id)
    {
        $sql = "UPDATE comments SET author = '" . $author . "', content = '" . $content .  "' WHERE id = " . $id;
        $result = $this->db->query($sql);
        return $result;
    }

    public function loginUser($login,$password) {
        $sql = sprintf("SELECT * FROM users WHERE login='%s' AND password='%s'", $login, $password);
        $result = $this->db->query($sql);
        return $result;
    }

    public function updatePassword($token, $password) {
        $sql = "UPDATE users SET password = sha1('".$password."') WHERE recovery = '".$token."'";
        $result = $this->db->query($sql);
        return $result;
    }

}
