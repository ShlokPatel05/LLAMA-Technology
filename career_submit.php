<?php
include("includes/config.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: /llama-site/career.php");
  exit;
}

// Honeypot
if (!empty($_POST['website'])) {
  header("Location: /llama-site/thankyou.php");
  exit;
}

function clean($v){ return trim($v ?? ""); }

$full_name = clean($_POST['full_name']);
$email = clean($_POST['email']);

$phone = preg_replace('/[^0-9]/', '', $_POST['phone'] ?? '');
if (!preg_match('/^[0-9]{10}$/', $phone)) {
  die("Invalid phone number. Please enter a valid 10-digit mobile number.");
}

$role_interest = clean($_POST['role_interest']);
$experience_level = clean($_POST['experience_level']);
$message = clean($_POST['message']);

if ($full_name==="" || $email==="" || $phone==="" || $role_interest==="" || $experience_level==="") {
  die("Required fields missing.");
}

// File validation
if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
  die("Resume upload failed.");
}

$allowedExt = ['pdf','doc','docx'];
$maxSize = 5 * 1024 * 1024; // 5MB

$tmp = $_FILES['resume']['tmp_name'];
$origName = $_FILES['resume']['name'];
$size = (int)$_FILES['resume']['size'];

$ext = strtolower(pathinfo($origName, PATHINFO_EXTENSION));
if (!in_array($ext, $allowedExt)) die("Only PDF/DOC/DOCX allowed.");
if ($size > $maxSize) die("File too large. Max 5MB.");

// MIME check (best effort)
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $tmp);
finfo_close($finfo);

$allowedMime = [
  'application/pdf',
  'application/msword',
  'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
];
if (!in_array($mime, $allowedMime)) die("Invalid file type.");

// Upload folder
$uploadDir = __DIR__ . "/uploads/resumes/";
if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

$safeBase = preg_replace('/[^a-zA-Z0-9_-]/', '_', strtolower($full_name));
$filename = $safeBase . "_" . time() . "_" . bin2hex(random_bytes(4)) . "." . $ext;
$dest = $uploadDir . $filename;

if (!move_uploaded_file($tmp, $dest)) die("Failed to save resume.");

// Insert DB (prepared)
$sql = "INSERT INTO career_applications
(full_name, email, phone, role_interest, experience_level, message, resume_file)
VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssssss",
  $full_name, $email, $phone, $role_interest, $experience_level, $message, $filename
);

if (!mysqli_stmt_execute($stmt)) {
  @unlink($dest);
  die("Database error.");
}

header("Location: /llama-site/thankyou.php");
exit;
