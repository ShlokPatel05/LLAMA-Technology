<?php
include("includes/config.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: /llama-site/register.php");
  exit;
}

$full_name  = trim($_POST["full_name"] ?? "");
$email      = trim($_POST["email"] ?? "");

$phone = preg_replace('/[^0-9]/', '', $_POST['phone'] ?? '');

if (!preg_match('/^[0-9]{10}$/', $phone)) {
  die("Invalid phone number. Please enter a valid 10-digit mobile number.");
}

$category   = $_POST["category"] ?? "";
$course     = trim($_POST["course_name"] ?? "");
$message    = trim($_POST["message"] ?? "");

if ($full_name === "" || $email === "" || $phone === "" || $category === "" || $course === "") {
  die("Please fill all required fields.");
}

$stmt = mysqli_prepare($conn, "INSERT INTO registrations (full_name,email,phone,category,course_name,message) VALUES (?,?,?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $email, $phone, $category, $course, $message);
mysqli_stmt_execute($stmt);

header("Location: /llama-site/thankyou.php");
exit;
