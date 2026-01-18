<?php
session_start();
include("../includes/config.php");

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
  header("Location: /llama-site/admin/login.php");
  exit;
}

$id = (int)($_GET['id'] ?? 0);
if ($id <= 0) die("Invalid request.");

$stmt = mysqli_prepare($conn, "SELECT resume_file, full_name FROM career_applications WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);

if (!$row) die("Not found.");

$filename = $row['resume_file'];

$filePath = realpath(__DIR__ . "/../uploads/resumes/" . $filename);
$baseDir  = realpath(__DIR__ . "/../uploads/resumes/");

// prevent path traversal
if (!$filePath || strpos($filePath, $baseDir) !== 0) die("Invalid path.");
if (!file_exists($filePath)) die("File missing.");

$downloadName = preg_replace('/[^a-zA-Z0-9_-]/', '_', strtolower($row['full_name'])) . "_resume_" . $id;
$ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
$downloadName .= "." . $ext;

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $downloadName . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filePath));

readfile($filePath);
exit;
