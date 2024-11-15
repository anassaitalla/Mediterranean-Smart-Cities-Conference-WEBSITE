<?php
// session_start();

// $message = ''; // Initialisez la variable du message

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $conn = new mysqli("localhost", "root", "", "smartcity");

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Démarrez la transaction
//     $conn->begin_transaction();

//     $project_title = $_POST['ProjectTitle'];
//     $TeamName = $_POST['TeamName'];
//     $TeamMembers = $_POST['TeamMembers'];

//     $insert_project = "INSERT INTO projectsubmission (ProjectTitle, TeamName) VALUES ('$project_title', '$TeamName')";
//     $insert_TeamMembers = "INSERT INTO teammembers (Name, TeamName) VALUES ";

//     // Vous pouvez modifier cette partie pour insérer des valeurs spécifiques dans la table teammembers
//     $TeamMembers_array = explode(',', $TeamMembers);
//     foreach ($TeamMembers_array as $member) {
//         $insert_TeamMembers .= "('".trim($member)."', '$TeamName'),";
//     }
//     $insert_TeamMembers = rtrim($insert_TeamMembers, ','); // Supprime la virgule en trop à la fin

//     if ($conn->query($insert_project) === TRUE && $conn->query($insert_TeamMembers) === TRUE) {
//         $conn->commit(); // Valide la transaction
//         $message = "Project and Team Members successfully added";
//         $_SESSION['success_message'] = $message;
//         header("Location: projectSubmission.php");
//         exit();
//     } else {
//         $conn->rollback(); // Annule la transaction en cas d'erreur
//         echo "Erreur: " . $conn->error;
//     }

//     $conn->close();
// }


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

    $prefixe = $_POST['prefixe'];
    $nom = $_POST['name'];
    $titreArticle = $_POST['articleTiltle'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $passport = $_POST['passport'];
    $adresse = $_POST['Address'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $typeInscription = $_POST['typeInscription'];
    $fraisSup = $_POST['FraisSup'];

    // Vérifier les doublons
    // $check_duplicate = "SELECT * FROM `registration` WHERE titreArticle = '$titreArticle'";
    // $result = $conn->query($check_duplicate);
    $check_duplicate = "SELECT * FROM `registration` WHERE titreArticle = ?";
    $stmt = $conn->prepare($check_duplicate);

    if (!$stmt) {
        $_SESSION['error_message'] = "Erreur lors de la préparation de la requête.";
        header("Location: virtual-listner-orale-registration.php");
        exit();
    }

    $stmt->bind_param("s", $titreArticle);
    $stmt->execute();
    $result = $stmt->get_result();

    // $check_duplicate2 = "SELECT * FROM `registration` WHERE  nom ='$nom'";
    // $result2 = $conn->query($check_duplicate2);

    $check_duplicate2 = "SELECT * FROM `registration` WHERE nom = ?";
    $stmt2 = $conn->prepare($check_duplicate2);

    if (!$stmt2) {
        $_SESSION['error_message'] = "Erreur lors de la préparation de la requête.";
        header("Location: virtual-listner-orale-registration.php");
        exit();
    }

    $stmt2->bind_param("s", $nom);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    if ($result->num_rows > 0 && $result2->num_rows>0) {
        // Si un enregistrement avec le même ProjectTitle existe, affichez un message d'erreur
        $_SESSION['error_message'] = "An article with the same title and the same Full Name already exists.";
        header("Location: virtual-listner-orale-registration.php");
        exit();
    } else {
        // Insertion des données dans la base de données
        $total = $fraisSup * 60; 
        $sql_projectsubmission = "INSERT INTO `registration`(`prefixe`, `nom`, `titreArticle`, `email`, `telephone`, `passport`, `adresse`, `ville`, `pays`, `typeInscriptionn`, `nbArticleSup`, `total`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql_projectsubmission);

        // Vérifier la préparation de la requête
        if (!$stmt) {
            $_SESSION['error_message'] = "Error while inserting.Try again.";
            header("Location: virtual-listner-orale-registration.php");
            exit();
        }

        // Bind parameters
        $stmt->bind_param("ssssssssssid", $prefixe,$nom,$titreArticle,$email,$phone,$passport,$adresse,$ville,$pays,$typeInscription,$fraisSup,$total);
        
        // Exécution de la requête
        if (!$stmt->execute()) {
            $_SESSION['error_message'] = "Error executing the SQL statement.";
            header("Location: virtual-listner-orale-registration.php");
            exit();
        }
        $msg ="Registration completed";

        // Adresse e-mail du destinataire
        $to = $email;

        // Sujet de l'e-mail
        $subject = "Registration confirmation";

        $message = "Hello,\nYour registration has been successfully registered.\n\nSincerely,\n MSCC 2024";
        $message .= "\n Registration informations:\n";
        $message .= "Name: " . $nom . "\n";
		$message .= "Paper: " . $titreArticle . "\n";
        $headers = "From: abendahman@uae.ac.ma"; // Remplacez par votre adresse e-mail
        
        // Envoi de l'e-mail
        if (mail($to, $subject, $message, $headers)) {
            $msg .= "\n Email sent";
            
        } else {
            $msg .= "\n Email not sent";
        }

        $_SESSION['success_message'] = $msg;
        header("Location: virtual-listner-orale-registration.php");
        exit();
    }
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header("Location: virtual-listner-orale-registration.php");
    exit();
}
