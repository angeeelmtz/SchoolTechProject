<?php
session_start();
if (
  isset($_SESSION['teacher_id']) &&
  isset($_SESSION['role'])
) {

  if ($_SESSION['role'] == 'Teacher') {


    if (
      isset($_POST['old_pass']) &&
      isset($_POST['new_pass'])   &&
      isset($_POST['c_new_pass'])
    ) {

      include '../../DB_connection.php';
      include "../data/student.php";

      $old_pass = $_POST['old_pass'];
      $new_pass = $_POST['new_pass'];
      $c_new_pass = $_POST['c_new_pass'];

      $teacher_id = $_SESSION['teacher_id'];

      if (empty($old_pass)) {
        $em  = "Se requiere contraseña antigua";
        header("Location: ../pass.php?perror=$em");
        exit;
      } else if (empty($new_pass)) {
        $em  = "Se requiere una nueva contraseña";
        header("Location: ../pass.php?perror=$em");
        exit;
      } else if (empty($c_new_pass)) {
        $em  = "Se requiere una contraseña de confirmación";
        header("Location: ../pass.php?perror=$em");
        exit;
      } else if ($new_pass !== $c_new_pass) {
        $em  = "La nueva contraseña y la contraseña de confirmación no coinciden";
        header("Location: ../pass.php?perror=$em");
        exit;
      } else if (!studentPasswordVerify($old_pass, $conn, $teacher_id)) {
        $em  = "Contraseña antigua incorrecta";
        header("Location: ../pass.php?perror=$em");
        exit;
      } else {
        // hashing the password
        $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

        $sql = "UPDATE teachers SET
                password = ?
                WHERE teacher_id=?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$new_pass, $teacher_id]);
        $sm = "Contraseña actualizada correctamente!!";
        header("Location: ../pass.php?psuccess=$sm");
        exit;
      }
    } else {
      $em = "Se ha producido un error";
      header("Location: ../pass.php?error=$em");
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
