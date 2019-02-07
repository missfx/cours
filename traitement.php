<?php
if(isset($_POST['email'])) {
 
    // Editer les 2 lines suivantes pour l'envoi du mail
    $email_to = "stephanie.vachon@velvetcocoon.com";
    $email_subject = "Votre objet de mail";
 
    function died($error) {
        // en cas d'erreur :
        echo "Nous sommes désolés mais des erreurs ont été trouvées lors de l'envoi du formulaire. ";
        echo "Ces erreurs apparaissent ci-dessous<br /><br />";
        echo $error."<br /><br />";
        echo "Merci de les corriger<br /><br />";
        die();
    }
 
 
    // validation des données existantes
    if(!isset($_POST['prenom']) ||
        !isset($_POST['nom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['commentaires'])) {
        died('Nous sommes désolés mais il y a des erreurs');       
    }
 
     
 
    $nom = $_POST['prenom']; // requis
    $prenom = $_POST['nom']; // requis
    $email_from = $_POST['email']; // requis
    $telephone = $_POST['telephone']; // non requis
    $commentaires = $_POST['commentaires']; // requis
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Email non valide<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$prenom)) {
    $error_message .= 'Prénom non valide<br />';
  }
 
  if(!preg_match($string_exp,$nom)) {
    $error_message .= 'Nom non valide<br />';
  }
 
  if(strlen($commentaires) < 2) {
    $error_message .= 'Commentaires non valide<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Détails du formulaire \n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Prenom : ".clean_string($prenom)."\n";
    $email_message .= "Nom: ".clean_string($nom)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Commentaires: ".clean_string($commentaires)."\n";
 
// création du header de l'email
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- Inclure du html ici -->
 
Merci de nous avoir contacté. Nous vous répondrons bientôt.
 
<?php
 
}
?>