<?php

namespace PHP28\Models;

class User extends Db
{
    public function userExists(string $username) :bool
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function userRegister(string $username, string $password): void
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->connection->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }

    public function getUserByUsername(string $username) :array
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch();
    }
}