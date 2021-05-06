<?php
require_once "entete.php";
?>

<?php
if( isset($_POST["titre_quizz"]) && !empty($_POST["titre_quizz"]) && 
isset($_POST["id_categorie"]) && !empty($_POST["id_categorie"]) &&
isset($_POST["question"]) && !empty($_POST["question"]))
{
$nom = $_POST["titre_quizz"];
$type = $_POST["id_categorie"];
$quest = $_POST["question"];

try {
  $requete = getBdd()->prepare("INSERT INTO categories(titre_quizz, id_categorie, question) VALUES (?, ?, ?)");
  $requete->execute([$titre_quizz, $id_categorie, $id_question]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Quizz</title>
</head>
<body>

<div id="containerq">
  <div class="container">
    <div id="quiz">

<?php
    $_POST => [
    "titre_quizz" => "blabla",
    "id_categorie" => 1,
    "questions" => [
        [0] => [
            "intitule_question" => "blabla",
            "reponses" => [
                [0] => [
                    "intitule_reponse" => "blabla",
                    "vrai" => true
                ],
                [1] => [
                    "intitule_reponse" => "blabla 2",
                    "vrai" => false
                ],
                [2] => [
                    "intitule_reponse" => "blabla 3",
                    "vrai" => false
                ],
                [3] => [
                    "intitule_reponse" => "blabla 4",
                    "vrai" => false
                ],
            ]
        ],


        [1] => [
          "intitule_question" => "blabla",
          "reponses" => [
              [0] => [
                  "intitule_reponse" => "blabla",
                  "vrai" => true
              ],
              [1] => [
                  "intitule_reponse" => "blabla 2",
                  "vrai" => false
              ],
              [2] => [
                  "intitule_reponse" => "blabla 3",
                  "vrai" => false
              ],
              [3] => [
                  "intitule_reponse" => "blabla 4",
                  "vrai" => false
              ],
          ]
      ],
  ]
]
?>

      </div>

      <p id="progress"></p>

    </div>
  </div>
</div>
   
</body>

<div id="retour">
<p>
</p>
</div>


</html>