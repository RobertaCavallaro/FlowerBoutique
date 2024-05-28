<?php
header('Content-Type: application/json');
$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Dummy registration, replace with actual database insert
  if ($username && $email && $password) {
    $response['success'] = true;
  } else {
    $response['success'] = false;
    $response['message'] = 'Registration failed, please try again';
  }
}

echo json_encode($response);
?>