<?php
require_once (dirname(__FILE__)).'../../settings/db_class.php';
class ResourceHub extends Database {

    public function upload($filename, $uploaded_by, $course, $file) {
        $sql = "INSERT INTO `files` (`filename`, `uploaded_by`, `course`, `file`) VALUES ('$filename', '$uploaded_by', '$course', '$file')";
        return $this->db_query($sql);
    }

    public function getByCourse($course) {
        $sql = "SELECT * FROM files WHERE `course`='$course'"; 
        return $this->db_query($sql);
    }

    public function updateFile($id, $filename, $file) {
        $sql = "UPDATE `files` SET `filename`='$filename' and `file`='$file' WHERE `id`='$id'";
        return $this->db_query($sql);
    }

    public function deleteFile($id) {
        $sql = "DELETE FROM `files` WHERE `id`='$id'";
        return $this->db_query($sql);
    }

    public function getUser($email) {
        $sql = "SELECT `username` FROM users WHERE `email`=$email"; 
        return $this->db_query($sql);
    }

    public function getMyFiles($username) {
        $sql = "SELECT `id`,`filename`,`course`,`date` FROM files WHERE `uploaded_by`='$username'"; 
        return $this->db_query($sql); 
    }
}

?>