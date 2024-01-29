<?php
include 'header.php';

$host = 'localhost';
$dbname = 'clipboard';
$username = 'postgres';
$password = 'Zidane1010.,';

        $dsn = "pgsql:host=$host;port=5433;dbname=$dbname;";

            try{
            $conn = new PDO($dsn,$username,$password);

            if($conn){
            // savoir si connexion à la base est établie echo " vous êtes Connectés ";//
            }
            }catch (PDOException $e){
            echo $e->getMessage();
            }

   if(array_key_exists('envoyer',$_POST)){

       // if(isset($_POST['nom']) && empty($_POST['nom'])){
            //var_dump($_POST);die;
        //    header("location:?nom=1");
         //   exit();
       // }
       // if(isset($_POST['email']) && empty($_POST['email'])){
            //var_dump($_POST);die;
         //   header("location:?email=1");
         //   exit();
        //}
        //if(isset($_POST['message']) && empty($_POST['message'])){
            //var_dump($_POST);die;
           // header("location:?message=1");
            //exit();
        //}   
                $reqInsert = "INSERT INTO public.contacts (nom, email, message, date_contact) 
                values (:nom, :email, :message, :date_contact)";
                
                $tbr = $conn -> prepare($reqInsert);
                $tbr -> execute ([

                ":nom" => $_POST['nom'],
                ":email" => $_POST['email'],
                ":message" => $_POST['message'],
                ":date_contact" => date('Y-m-d h:m:s'),

                ]); 
    }

?>

<body>

<main id="content" class="container">
    <section class="container">
       <a href="index.html">Accueil</a>
    </section>
    <section class="container contact">
        <h1>Contactez-nous</h1>
            <p>Des questions ou un probleme ?N’hésitez pas à utiliser ce formulaire pour nous joindre!</p>
            
                <form method="POST" action="">
                    <div>
                    <label for="nom">Nom</label>
                    <input class="form-control" type="text" id="nom" name="nom" placeholder="Martin">
                    
                    //<?php
                    //    if(isset($_GET['nom']) && ($_GET['nom']==1)){
                     //   echo '<span><font color="red">Votre nom est obligatoire</font></span>';
                      //  }
                   //?>
                    
                    </div>
                    <div>
                    <label for="email">Votre Email</label>
                    <input class="form-control" type="email" id="email" name="email">

                    //<?php
                     //   if(isset($_GET['email']) && ($_GET['email']==1)){
                      //  echo '<span><font color="red">Votre email est obligatoire</font></span>';
                        //}
                    //?>

                    </div>
                    <div>
                    <label for="message">Votre message</label>
                    <textarea class="form-control" id="message" name="message" placeholder="écrivez votre message..."></textarea>
                    
                    //<?php
                    //    if(isset($_GET['message']) && ($_GET['message']==1)){
                    //    echo '<span><font color="red">Veuillez indiquer votre message !</font></span>';
                     //   }
                    //?>

                    </div>
                    <br>
                    <button type="submit" id="envoyer" name="envoyer">Valider</button>
                </form>
    </section>

</main>    

<?php
include 'footer.php';
?>

</body>
</html>