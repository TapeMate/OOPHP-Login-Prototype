<?php

class Signup extends Dbh
{
    protected function checkUser($uid, $email)
    {
        $sql = "SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;";
        $stmt = parent::connect()->prepare($sql);

        // check for execution
        if (!$stmt->execute([$uid, $email])) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        // check for returned rows bigger zero
        $resultCheck = null;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}