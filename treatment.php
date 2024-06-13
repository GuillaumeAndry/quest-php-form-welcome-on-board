<?php
$subjects = [
    'rdv' => 'Prendre rendez-vous',
    'subscribe' => 'Inscription à la newsletter',
    'claim' => 'Réclamation',
    'contract' => 'Demander un devis'
];

$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$message = htmlentities($_POST['message']);
$errors = [];

if (empty($name)) {
    $errors[] = 'Error, empty name field';
}

if (empty($email)) {
    $errors[] = 'Error, empty email field';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "The email format doesn't work";
}

$validSubject = isset($_POST['subject']) ? $_POST['subject'] : false;
   if ($validSubject) {
      $subj = htmlentities($_POST['subject'], ENT_QUOTES, "UTF-8");
      if (!array_key_exists($subj, $subjects)) {
        $errors[] = "This subject doesn't exist";
      }
   }

if (!empty($errors)) {
    require 'error.php';
    die();
} else {
    require 'result.php';
    die();
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

debug_to_console('Bonjour');
