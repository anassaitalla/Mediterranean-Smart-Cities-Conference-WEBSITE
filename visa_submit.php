<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se connecter à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smartcity";

    $conn = new mysqli($servername, $username, $password,  $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $prefixe = $_POST['prefixe'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['mail'];
    $areYouA = $_POST['araYouA'];
    $paperTitle = $_POST['paperTitle'];
    $paymentDate = $_POST['paymentDate'];
    $institution = $_POST['institution'];
    $pays = $_POST['pays'];
    $nationality = $_POST['nationality'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $passport = $_POST['passport'];
    $expirationDate = $_POST['expirationDate'];


    //     $check_duplicate = "SELECT * FROM `registration` WHERE titreArticle = ?";
    //     $stmt = $conn->prepare($check_duplicate);

    //     if (!$stmt) {
    //         $_SESSION['error_message'] = "Erreur lors de la préparation de la requête.";
    //         header("Location: visa.php");
    //         exit();
    //     }

    //     $stmt->bind_param("s", $titreArticle);
    //     $stmt->execute();
    //     $result = $stmt->get_result();


    //     $check_duplicate2 = "SELECT * FROM `registration` WHERE nom = ?";
    //     $stmt2 = $conn->prepare($check_duplicate2);

    //     if (!$stmt2) {
    //         $_SESSION['error_message'] = "Erreur lors de la préparation de la requête.";
    //         header("Location: visa.php");
    //         exit();
    //     }

    //     $stmt2->bind_param("s", $nom);
    //     $stmt2->execute();
    //     $result2 = $stmt2->get_result();

    //     if ($result->num_rows > 0 && $result2->num_rows>0) {
    //         // Si un enregistrement avec le même ProjectTitle existe, affichez un message d'erreur
    //         $_SESSION['error_message'] = "An article with the same title and the same Full Name already exists.";
    //         header("Location: visa.php");
    //         exit();
    //     } else {        


    //     }
    // } else {
    //     $_SESSION['error_message'] = "Invalid request method.";
    //     header("Location: visa.php");
    //     exit();
    // }
    $sql = "INSERT INTO `visa`(`prefix`, `fullName`, `phone`, `email`,`paperTitle`, `areYouA`, `paymentDate`, `institution`, `country`, `nationality`, `dateOfBirth`, `passport`, `expirationDate`) 
VALUES (?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Vérifiez la préparation de la requête
    if (!$stmt) {
        $_SESSION['error_message'] = "Error while preparing the SQL statement.";
        header("Location: visa.php");
        exit();
    }

    // Liez les paramètres
    $stmt->bind_param("sssssssssssss", $prefixe, $name, $phone, $email, $paperTitle, $areYouA, $paymentDate, $institution, $pays, $nationality, $dateOfBirth, $passport, $expirationDate);

    // Exécutez la requête
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Data inserted successfully.";
        header("Location: visa.php");
        exit();
    }
}
