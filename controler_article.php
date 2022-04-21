
<?php
    //import des ressources
    
    //import de la connexion à la bdd
    include './utils/connectBdd.php';
    //import du model
    include './model/model_article.php';
    //import de la vue 
    include './view/vue_article.php';

    
    
        //test pour vérifier si les champs du formulaire sont remplis
        if(isset($_POST['nom_article']) AND isset($_POST['prix_article']) AND 
        $_POST['nom_article'] !='' AND $_POST['prix_article'] !='' ){
            //stocker les super globales POST dans des variables
            $name =$_POST['nom_article'];
            $price =$_POST['prix_article'];
            //appel de la fonction ajouter  un user en BDD
            addArticle($bdd,$name,$price) ;
            
            //message
            echo "$name à été ajouté en BDD";
        }
        //sinon vides
        else{
            echo 'Veuillez compléter les champs du formulaire';
        }
    ?>
?>