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
            isset($_POST['teacher_id']) &&
            isset($_POST['address'])  &&
            isset($_POST['employee_number']) &&
            isset($_POST['phone_number'])  &&
            isset($_POST['qualification']) &&
            isset($_POST['email_address']) &&
            isset($_POST['gender'])        &&
            isset($_POST['date_of_birth']) &&
            isset($_POST['subjects'])   &&
            isset($_POST['classes'])
        ) {

            include '../../DB_connection.php';
            include "../data/teacher.php";

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $uname = $_POST['username'];

            $address = $_POST['address'];
            $employee_number = $_POST['employee_number'];
            $phone_number = $_POST['phone_number'];
            $qualification = $_POST['qualification'];
            $email_address = $_POST['email_address'];
            $gender = $_POST['gender'];
            $date_of_birth = $_POST['date_of_birth'];

            $teacher_id = $_POST['teacher_id'];

            $classes = "";
            foreach ($_POST['classes'] as $class) {
                $classes .= $class;
            }

            $subjects = "";
            foreach ($_POST['subjects'] as $subject) {
                $subjects .= $subject;
            }

            $data = 'teacher_id=' . $teacher_id;

            if (empty($fname)) {
                $em  = "El nombre es obligatorio";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($lname)) {
                $em  = "Apellido obligatorio";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($uname)) {
                $em  = "Nombre de usuario obligatorio";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (!unameIsUnique($uname, $conn, $teacher_id)) {
                $em  = "El nombre de usuario está ocupado.";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($address)) {
                $em  = "Dirección obligatoria";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($employee_number)) {
                $em  = "Se requiere el número de empleado";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($phone_number)) {
                $em  = "Número de teléfono obligatorio";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($qualification)) {
                $em  = "Se requiere titulación";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($email_address)) {
                $em  = "Dirección de correo es obligatoria";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($gender)) {
                $em  = "El género es obligatorio";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else if (empty($date_of_birth)) {
                $em  = "Se requiere la fecha de nacimiento";
                header("Location: ../teacher-edit.php?error=$em&$data");
                exit;
            } else {
                $sql = "UPDATE teachers SET
                username = ?,class=?, fname=?, lname=?, subjects=?,
                address = ?, employee_number=?, date_of_birth = ?, phone_number = ?, qualification = ?,gender=?, email_address = ?
                WHERE teacher_id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$uname,  $classes, $fname, $lname, $subjects, $address, $employee_number, $date_of_birth, $phone_number, $qualification, $gender, $email_address,        $teacher_id]);
                $sm = "Actualización realizada exitósamente";
                header("Location: ../teacher-edit.php?success=$sm&$data");
                exit;
            }
        } else {
            $em = "Se ha producido un error";
            header("Location: ../teacher.php?error=$em");
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
