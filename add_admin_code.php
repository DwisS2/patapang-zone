<?php

//register.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$message = '';
$validation_error = '';


if(empty($form_data->username))
{
 $error[] = 'Username is Required';
}
else
{
 if(!filter_var($form_data->username))
 {
  $error[] = 'Invalid Username Format';
 }
 else
 {
  $data[':username'] = $form_data->username;
 }
}

if(empty($form_data->password))
{
 $error[] = 'Password is Required';
}
else
{
 $data[':password'] = password_hash($form_data->password, PASSWORD_DEFAULT);
}

if(empty($error))
{
 $query = "
 INSERT INTO admin (username, password) VALUES (:username, :password)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $message = 'Registration Completed';
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error'  => $validation_error,
 'message' => $message
);

echo json_encode($output);