<?php
// include 'includes/db-config.inc.php';
class UserDAO {
    private $connection = null;
    public function __construct($connection) {
        $this->connection = $connection;
    }
    public function createUser($user) {
        $sql = "SELECT * FROM users(username, email) VALUES(?,?)";
        $statement = DatabaseHelper::runQuery($this->connection, $sql, Array($user->getUsername(), $user->getEmail()));
        $row = $statement->fetch();
        if ($row->rowCount() > 0) {
            if ($username == $row['username']) {
                echo "Username exists";
            } elseif ($email == $row['email']) {
                echo "Email exists";
            }
        } else {
            $hashed_password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(username, password, email) VALUES(?,?,?)";
            $statement = DatabaseHelper::runQuery($this->connection, $sql, Array($user->getUsername(), $hashed_password, $user->getEmail()));
        }
    }
    public function findByUsername($username) {
        $sql = 'SELECT * FROM users WHERE username =?';
        $statement = DatabaseHelper::runQuery($this->connection, $sql, Array($username));
        $row = $statement->fetch();
        return $this->toUser($row);
    }
    public function toUser($row) {
        $user = new User($row['username']);
        $user->setEmail($row['email']);
        $user->setPassword($row['password']);
        return $user;
    }
    public function deleteByUsername($username) {
        $sql = 'DELETE FROM users WHERE username=? ';
        $statement = DatabaseHelper::runQuery($this->connection, $sql, Array($username));
        $row = $statement->fetch();
        return $username;
    }
}
