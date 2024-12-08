<?php
session_start();
if (
    isset($_SESSION['admin_id']) &&
    isset($_SESSION['role'])
) {

    if ($_SESSION['role'] == 'Admin') {


        if (
            isset($_POST['fname'])      &&
            isset($_POST['lname'])      &&
            isset($_POST['username'])   &&
            isset($_POST['student_id']) &&
            isset($_POST['address'])    &&
            isset($_POST['email_address']) &&
            isset($_POST['gender'])        &&
            isset($_POST['date_of_birth']) &&
            isset($_POST['section'])       &&
            isset($_POST['parent_fname'])  &&
            isset($_POST['parent_lname'])  &&
            isset($_POST['parent_phone_number']) &&
            isset($_POST['grade'])
        ) {

            include '../../DB_connection.php';
            include "../data/student.php";

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $uname = $_POST['username'];

            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $section = $_POST['section'];
            $email_address = $_POST['email_address'];
            $date_of_birth = $_POST['date_of_birth'];
            $parent_fname = $_POST['parent_fname'];
            $parent_lname = $_POST['parent_lname'];
            $parent_phone_number = $_POST['parent_phone_number'];

            $student_id = $_POST['student_id'];

            $grade = $_POST['grade'];

            $data = 'student_id=' . $student_id;

            if (empty($fname)) {
                $em  = "El nombre es obligatorio";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($lname)) {
                $em  = "Apellido obligatorio";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($uname)) {
                $em  = "Nombre de usuario obligatorio";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (!unameIsUnique($uname, $conn, $student_id)) {
                $em  = "El nombre de usuario está ocupado.";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($address)) {
                $em  = "Dirección obligatoria";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($gender)) {
                $em  = "El género es obligatorio";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($email_address)) {
                $em  = "Dirección de correo electrónico obligatoria";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($date_of_birth)) {
                $em  = "Se requiere la fecha de nacimiento";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($parent_fname)) {
                $em  = "El nombre de los padres es obligatorio";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($parent_lname)) {
                $em  = "Se requiere el apellido de los padres";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($parent_phone_number)) {
                $em  = "Se requiere el número de teléfono de los padres";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else if (empty($section)) {
                $em  = "Sección obligatoria";
                header("Location: ../student-edit.php?error=$em&$data");
                exit;
            } else {
                $sql = "UPDATE students SET
                username = ?, fname=?, lname=?, grade=?, address=?,gender = ?, section=?, email_address=?, date_of_birth=?, parent_fname=?,parent_lname=?,parent_phone_number=?
                WHERE student_id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$uname, $fname, $lname, $grade, $address, $gender, $section, $email_address, $date_of_birth, $parent_fname, $parent_lname, $parent_phone_number, $student_id]);
                $sm = "Actualización realizada exitósamente";
                header("Location: ../student-edit.php?success=$sm&$data");
                exit;
            }
        } else {
            $em = "Se ha producido un error";
            header("Location: ../student.php?error=$em");
            exit;
        }
    } else {
        header("Location: ../../logout.php");
        exit;
    }
} else {
    header("Location: ../../logout.php");
    exit;
}
