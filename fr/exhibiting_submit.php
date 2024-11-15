<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se connecter à la base de données
    $servername = "localhost:3306";
    $username = "flshtnet_hackathondah";
    $password = "H@ck@th0n";
    $dbname = "flshtnet_hackathondah";
    $conn = new mysqli($servername, $username, $password,  $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nature_of_business = $_POST["buisnessNature"];
    $other_specify = $_POST["other"];
    $email = $_POST["mail"];
    $full_name = $_POST["fullName"];
    $mobile_number = $_POST["phone"];
    $job_title = $_POST["jobTitle"];
    $company_name = $_POST["companyName"];
    $country = $_POST["ddlCountry"];
    $purchasing_value = $_POST["purchasingValue"];


    $sql = "INSERT INTO `exhibiting`(`buisnessNature`, `other`, `mail`, `fullName`,`phone`, `jobTitle`, `companyName`, `ddlCountry`, `purchasingValue`) 
VALUES (?, ?, ?, ?, ?, ?, ? ,?, ?)";

    $stmt = $conn->prepare($sql);

    // Vérifiez la préparation de la requête
    if (!$stmt) {
        $_SESSION['error_message'] = "Error while preparing the SQL statement.";
        header("Location: exhibiting.php");
        exit();
    }

    // Liez les paramètres
    $stmt->bind_param("sssssssss", $nature_of_business, $other_specify, $email, $full_name, $mobile_number, $job_title, $company_name, $country, $purchasing_value);

    // Exécutez la requête
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Data inserted successfully.";
        header("Location: exhibiting.php");
        exit();
    }
}
