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
        // Envoi de l'e-mail à l'utilisateur
        $subject = "Demande d'exposition";
        $message = "Bonjour,\n\nVous avez reçu une nouvelle demande d'exposition. Voici les détails :\n\n";
        $message .= "Nature de l'entreprise : " . $nature_of_business . "\n";
        if (!empty($other_specify)) {
            $message .= "Autre (spécifiez) : " . $other_specify . "\n";
        }
        $message .= "Nom complet : " . $full_name . "\n";
        $message .= "E-mail : " . $email . "\n";
        $message .= "Téléphone : " . $mobile_number . "\n";
        $message .= "Poste : " . $job_title . "\n";
        $message .= "Nom de l'entreprise : " . $company_name . "\n";
        $message .= "Pays : " . $country . "\n";
        $message .= "Valeur d'achat prévue : " . $purchasing_value . "\n\n";
        $message .= "Cordialement,\nVotre équipe";

        $headers = "From: m.elharrak@emsi-edu.ma"; // Remplacez par votre adresse e-mail
        mail($email, $subject, $message, $headers);

        $_SESSION['success_message'] = "Data inserted successfully.";
        header("Location: exhibiting.php");
        exit();
        $_SESSION['success_message'] = "Data inserted successfully.";
    } else {
        echo "Erreur: " . $conn->error;
    }
}
