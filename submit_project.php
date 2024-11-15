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

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "smartcity";


    $conn = new mysqli($servername, $username, $password,  $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $ProjectTitle = $_POST['ProjectTitle'];
    $TeamName = $_POST['TeamName'];
    $TeamMembers = $_POST['TeamMembers'];
    $ExecutiveSummary = $_POST['ExecutiveSummary'];
    $ProblemStatement = $_POST['ProblemStatement'];
    $Objectives = $_POST['Objectives'];
    $SolutionImplemented = $_POST['SolutionImplemented'];
    $Methodology = $_POST['Methodology'];
    $Outcomes = $_POST['Outcomes'];
    $Challenges = $_POST['Challenges'];
    $Collaboration = $_POST['Collaboration'];
    $Sustainability = $_POST['Sustainability'];
    $ResourcesUtilized = $_POST['ResourcesUtilized'];
    $Timeline = $_POST['Timeline'];
    $Prototype = $_POST['Prototype'];
    $TeamSkills = $_POST['TeamSkills'];
    $Conclusion = $_POST['Conclusion'];
    $NextSteps = $_POST['NextSteps'];

    $user_email = $_POST['UserEmail'];
    $telephone = $_POST['telephone'];


    // Stockage des informations de l'utilisateur dans la session (exemple)
    $_SESSION['ProjectTitle'] = $ProjectTitle;
    $_SESSION['TeamName'] = $TeamName;
    $_SESSION['TeamMembers'] = $TeamMembers;

    // Vérifie si un enregistrement avec le même ProjectTitle existe déjà
    // $check_duplicate = "SELECT * FROM projectsubmission WHERE ProjectTitle = '$ProjectTitle'";
    // $result = $conn->query($check_duplicate);
    $check_duplicate = "SELECT * FROM projectsubmission WHERE ProjectTitle = ?";
    $stmt = $conn->prepare($check_duplicate);
    if (!$stmt) {
        $_SESSION['error_message'] = "Erreur lors de la préparation de la requête.";
        header("Location: virtual-listner-orale-registration.php");
        exit();
    }
    $stmt->bind_param("s", $ProjectTitle);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si un enregistrement avec le même ProjectTitle existe, affichez un message d'erreur
        $_SESSION['error_message'] = "A project with the same title already exists.";
        header("Location: projectSubmission.php");
        exit();
    }

    // Insertion des données dans les tables
    $sql_projectsubmission = "INSERT INTO `projectsubmission`( `ProjectTitle`, `TeamName`, `ExecutiveSummary`, `ProblemStatement`, `Objectives`, `SolutionImplemented`, `Methodology`, `Outcomes`, `Challenges`, `Collaboration`, `Sustainability`, `ResourcesUtilized`, `Timeline`, `Prototype`, `TeamSkills`, `Conclusion`, `NextSteps`, `email`, `telephone`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql_projectsubmission);

    // Bind parameters
    $stmt->bind_param("ssssssssssssssssssi", $ProjectTitle, $TeamName, $ExecutiveSummary, $ProblemStatement, $Objectives, $SolutionImplemented, $Methodology, $Outcomes, $Challenges, $Collaboration, $Sustainability, $ResourcesUtilized, $Timeline, $Prototype, $TeamSkills, $Conclusion, $NextSteps, $user_email, $telephone);


    if ($stmt->execute() === TRUE) {
        // Séparation des membres de l'équipe
        $members = explode(',', $TeamMembers);
        foreach ($members as $member) {
            if (!empty(trim($member))) { // Vérifie si le membre n'est pas vide
                $sql_teammembers = "INSERT INTO teammembers (Name, TeamName) VALUES (?, ?)";

                // Préparation de la déclaration
                $stmt = $conn->prepare($sql_teammembers);
                if ($stmt) {
                    // Liaison des paramètres
                    $stmt->bind_param("ss", $member, $TeamName);

                    // Exécution de la déclaration
                    $stmt->execute();

                    // Fermeture de la déclaration
                    $stmt->close();
                } else {
                    // Gestion des erreurs liées à la préparation de la déclaration
                    echo "Erreur lors de la préparation de la déclaration: " . $conn->error;
                }
            }
        }

        // Envoi de l'e-mail à l'utilisateur
        $subject = "Registration confirmation";
        $message = "Hello,\nYour registration has been successfully registered.\n\nSincerely,\nsmartCity";
        $message .= "\nInformations de l'inscription:\n";
        $message .= "Project Title: " . $_SESSION['ProjectTitle'] . "\n";
        $message .= "Team Name: " . $_SESSION['TeamName'] . "\n";
        $message .= "Team Members: " . $_SESSION['TeamMembers'] . "\n";

        $headers = "From: m.elharrak@emsi-edu.ma"; // Remplacez par votre adresse e-mail
        mail($user_email, $subject, $message, $headers);

        $_SESSION['success_message'] = "Project and Team Members successfully added";
        header("Location: projectSubmission.php");
        exit();
    } else {
        echo "Erreur: " . $conn->error;
    }

    $conn->close();
}
