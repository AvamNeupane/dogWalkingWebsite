<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $petName = $_POST["petName"];
    $birthday = $_POST["birthday"];
    $breed = $_POST["breed"];
    $gender = $_POST["gender"];
    $spayedNeutered = $_POST["spayedNeutered"];
    $address = $_POST["address"];
    $packageType = $_POST["packageType"];


    $to = "mohammed.nasser1@ontariotechu.net";
    $subject = "Pet Registration Confirmation";
    $message = "Thank you for registering your pet!\n";
    $message .= "Pet Name: $petName\n";
    $message .= "Birthday: $birthday\n";
    $message .= "Breed: $breed\n";
    $message .= "Gender: $gender\n";
    $message .= "Spayed/Neutered: $spayedNeutered\n";
    $message .= "Client Address: $address\n";
    $message .= "Package Type: $packageType\n";

    $headers = "From: mohammed.nasser1@ontariotechu.net";

    mail($to, $subject, $message, $headers);


    header("Location: RejConfo.html");
    exit;
} else {

    header("Location: Home Page.html");
    exit;
}
