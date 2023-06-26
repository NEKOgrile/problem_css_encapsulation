<?php
//include('connectionbdd.php');
?>


<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <title>Chauffeur</title>
    <link rel="stylesheet" media="screen" type="text/css" href="main.css" />
    <meta name="viewport" content="widtr=device-widtr,initial-scale=1.0" />

</head>

<body>

    <div class="container">
        <table class="table_log">
            <tr>
                <td colspan="2">
                    <?php
                    // Requête pour récupérer les données de la table "chauffeurs"
                    //$chauffeur_bdd = $bdd->prepare("SELECT * FROM chauffeurs ORDER BY id_chauffeur ASC");
                    //$chauffeur_bdd->execute();
                    
                    // Création du menu déroulant avec les valeurs de la table "chauffeurs"
                    ?>
                    <!---<select class="select_chauffeur" name="select_chauffeur">
                    //    <option value="">chauffeur</option>
                    //    <?php
                    //    while ($row = $chauffeur_bdd->fetch(PDO::FETCH_ASSOC)) {
                    //        echo '<option value="' . $row['id_chauffeur'] . '">' . $row['nom_chauffeur'] . ' ' . $row['prenom_chauffeur'] . '</option>';
                    //    }
                    //    ?>
                    //</select>-->
                    <svg id="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5z" />
                    </svg>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table class="informations_table">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Heure 1</th>
                            <th>Heure 2</th>
                        </tr>
                        <?php
                        // Données fictives pour la table "informations"
                        $informations = array(
                            array('id' => 1, 'nom' => 'Doe', 'prenom' => 'John', 'heure1' => '08:00', 'heure2' => '12:00'),
                            array('id' => 2, 'nom' => 'Smith', 'prenom' => 'Jane', 'heure1' => '09:00', 'heure2' => '13:00'),
                            array('id' => 3, 'nom' => 'Johnson', 'prenom' => 'Michael', 'heure1' => '10:00', 'heure2' => '14:00'),
                            // Ajoutez d'autres données fictives ici...
                        );

                        foreach ($informations as $info) {
                            echo '<tr>';
                            echo '<td>' . $info['id'] . '</td>';
                            echo '<td>' . $info['nom'] . '</td>';
                            echo '<td>' . $info['prenom'] . '</td>';
                            echo '<td>' . $info['heure1'] . '</td>';
                            echo '<td>' . $info['heure2'] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                </td>
            </tr>
        </table>
    </div>




</body>
<script type="text/javascript" src="main.js"></script>

</html>