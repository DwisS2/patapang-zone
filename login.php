<?php

//login.php

include('database_connection.php');

session_start();

$form_data = json_decode(file_get_contents("php://input"));

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

if(empty($error))
{
 $query = "
 SELECT * FROM admin 
 WHERE username = :username
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $result = $statement->fetchAll();
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    if(password_verify($form_data->password, $row["password"]))
    {
     $_SESSION["username"] = $row["username"];
	 /* header("location:add.html"); */
    }
    else
    {
     $validation_error = 'Wrong Password';
    }
   }
  }
  else
  {
   $validation_error = 'Wrong Username';
  }
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error' => $validation_error
);

echo json_encode($output);

?>