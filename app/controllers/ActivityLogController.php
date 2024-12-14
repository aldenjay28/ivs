<?php
// app/controllers/ActivityLogController.php

class ActivityLogController {
    private $activityLogModel;

    public function __construct($activityLogModel) {
        $this->activityLogModel = $activityLogModel;
    }

    public function logUserAction($user_id, $action) {
        return $this->activityLogModel->logAction($user_id, $action);
    }

    public function getUserLogs($user_id) {
        return $this->activityLogModel->getLogs($user_id);
    }
}
?>