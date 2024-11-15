<?php
// Connexion à la base de données
$servername ="localhost:3306";
    $username ="flshtnet_hackathondah";
    $password="H@ck@th0n";
    $dbname ="flshtnet_hackathondah";

    $conn = new mysqli($servername, $username, $password,  $dbname);

//$conn = new mysqli("localhost", "root", "", "smartcity");

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Requête SQL pour récupérer toutes les colonnes des tables avec une jointure
$sql = "SELECT * FROM projectsubmission JOIN teammembers ON projectsubmission.TeamName = teammembers.TeamName";

// Exécution de la requête
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Nom du fichier CSV
    $filename = 'export.csv';

    // Entête HTTP pour indiquer un téléchargement de fichier CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Ouvrir la sortie standard en écriture
    $output = fopen('php://output', 'w');

    // Entête du fichier CSV
    fputcsv($output, array_keys($result->fetch_assoc()));

    // Boucler sur les résultats et les écrire dans le fichier CSV
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }

    // Fermer la sortie
    fclose($output);
} else {
    echo "Aucun résultat trouvé";
}

// Fermer la connexion
$conn->close();
?>
