<?php
// app/models/ActivityLog.php

class ActivityLog {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function logAction($user_id, $action) {
        $stmt = $this->pdo->prepare("INSERT INTO activity_logs (user_id, action) VALUES (?, ?)");
        return $stmt->execute([$user_id, $action]);
    }

    public function getLogs($user_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM activity_logs WHERE user_id = ? ORDER BY created_at DESC");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>