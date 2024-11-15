<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se connecter à la base de données
    $servername = "localhost:3306";
    $username = "flshtnet_hackathondah";
    $password = "H@ck@th0n";
    $dbname = "flshtnet_hackathondah";

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "smartcity";

    $conn = new mysqli($servername, $username, $password,  $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $involved = $_POST['involved'];
    $salutation = $_POST['Salutation'];
    $fullName = $_POST['fullName'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $jobTitle = $_POST['jobTitle'];
    $companyName = $_POST['companyName'];
    $companyMainActivity = $_POST['CompanyMainActivity'];
    $question = $_POST['question'];


    $sql = "INSERT INTO `sponsor`(`involved`, `Salutation`, `fullName`, `mail`,`phone`, `jobTitle`, `companyName`, `CompanyMainActivity`, `question`) 
VALUES (?, ?, ?, ?, ?, ?, ? ,?, ?)";

    $stmt = $conn->prepare($sql);

    // Vérifiez la préparation de la requête
    if (!$stmt) {
        $_SESSION['error_message'] = "Error while preparing the SQL statement.";
        header("Location: sponsors.php");
        exit();
    }

    // Liez les paramètres
    $stmt->bind_param("sssssssss", $involved, $salutation, $fullName, $email, $phone, $jobTitle, $companyName, $companyMainActivity, $question);

    // Exécutez la requête
    if ($stmt->execute()) {
        // Envoi de l'e-mail à l'utilisateur
        $subject = "Demande de sponsoring";
        $message = "Bonjour,\n\nVous avez reçu une nouvelle demande de sponsoring. Voici les détails :\n\n";
        $message .= "Implication : " . $involved . "\n";
        $message .= "Salutation : " . $salutation . "\n";
        $message .= "Nom complet : " . $fullName . "\n";
        $message .= "E-mail : " . $email . "\n";
        $message .= "Téléphone : " . $phone . "\n";
        $message .= "Poste : " . $jobTitle . "\n";
        $message .= "Nom de l'entreprise : " . $companyName . "\n";
        $message .= "Activité principale de l'entreprise : " . $companyMainActivity . "\n";
        $message .= "Question / Commentaire : " . $question . "\n\n";
        $message .= "Cordialement,\nVotre équipe";

        $headers = "From: m.elharrak@emsi-edu.ma"; // Remplacez par votre adresse e-mail
        mail($email, $subject, $message, $headers);

        $_SESSION['success_message'] = "Data inserted successfully.";
        header("Location: sponsors.php");
        exit();
    } else {
        echo "Erreur: " . $conn->error;
    }

    $conn->close();
}
