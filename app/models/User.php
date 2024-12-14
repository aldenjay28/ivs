<?php
// app/models/User.php

class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($username, $password, $full_name, $email, $role = 'user') {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, password, full_name, email, role) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$username, md5($password), $full_name, $email, $role]);
    }

    public function find($user_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($user_id, $data) {
        $stmt = $this->pdo->prepare("UPDATE users SET username = ?, full_name = ?, email = ?, role = ? WHERE user_id = ?");
        return $stmt->execute([$data['username'], $data['full_name'], $data['email'], $data['role'], $user_id]);
    }

    public function delete($user_id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE user_id = ?");
        return $stmt->execute([$user_id]);
    }

    public function authenticate($username, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->execute([$username, md5($password)]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>