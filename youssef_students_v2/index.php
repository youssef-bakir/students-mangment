<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: /youssef_students_v2/home.php");
} else {
    header("Location: /youssef_students_v2/auth/login.php");
}
//  جدول معلمين والمواد الدراسيه ++