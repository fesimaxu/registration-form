<?php
$userdataFirst = print_r($_POST['firstname']);

$userdataLast = print_r($_POST['lastname']);

$userdataEmail = print_r($_POST['email']);

$userdataDate = print_r($_POST['date']);

$userdataGender = print_r($_POST['gender']);

$userdataCountry = print_r($_POST['country']);


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo "First Name : " . $firstname . "<br>";
echo "Last Name : " . $lastname . "<br>";
echo "Email : " . $email . "<br>";
echo "Date : " . $date . "<br>";
echo "Gender : " . $gender . "<br>";
echo "Country : " . $country;

$fileopen = fopen('userdata.csv', 'a');
$formdata = array(
    'firstname'=> $firstname,
    'lastname' => $lastname,
    'email' => $email,
    'date' => $date,
    'gender' => $gender,
    'country' => $country
);
fputcsv($fileopen,$formdata);
?>