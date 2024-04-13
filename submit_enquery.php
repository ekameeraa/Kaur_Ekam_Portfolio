<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $db_host = 'localhost';
    $db_user = 'u802235977_ekam';
    $db_pass = 'Sidhu295';
    $db_name = 'u802235977_ekam_portfolio';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $errors = array();

    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    if ($lname == NULL) {
        $errors[] = "Last name field is empty.";
    }

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    if ($fname == NULL) {
        $errors[] = "First name field is empty.";
    }

    $country = mysqli_real_escape_string($connection, $_POST['country']);
    if ($country == NULL) {
        $errors[] = "Country field is vacant.";
    }

    $email = $_POST['email'];
    if ($email == NULL) {
        $errors[] = "Email field is empty.";
    }

    $message = $_POST['message'];
    if ($message == NULL) {
        $errors[] = "Message field is empty.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "\"" . $email . "\" is not a valid email address.";
    }

    $errcount = count($errors);
    if ($errcount > 0) {
        $errmsg = array();
        for ($i = 0; $i < $errcount; $i++) {
            $errmsg[] = $errors[$i];
        }

        echo json_encode(array("errors" => $errmsg));
    } else {
        $querystring = "INSERT INTO enquiries(id,first_name,last_name,country,email, message) VALUES(NULL,'" . $fname . "','" . $lname . "','" . $country . "','" . $email . "', '" . $message . "')";
        $qpartner = mysqli_query($connection, $querystring);
        echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));
    }
?>