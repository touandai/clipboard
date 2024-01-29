
//pour récuperer les elements du formulaire//

const Formulaire = document.querySelector('#formulaire');
const Nom = document.querySelector('#nom');
const Email = document.querySelector('#email');
const Message = document.querySelector('#message');

//les evenements js//

Formulaire.addEventListener ('submit',e =>{
   e.preventDefault();

   verif_element();
   

});

//function vérification données formulaire

function verif_element(){

        

        const nomvalue = Nom.value.trim();
        const emailValue = Email.value.trim();
        const messageValue = Message.value.trim();
       

        if (nomvalue === "" ){
            let messageErreur ="Le nom ne doit pas être vide";
            setErreur(Nom,messageErreur);

 }

}

//verification chaque champ//


 //fonction affichage message d'erreur//

  function setErreur(elem,messageErreur){

    console.log(elem);   
    
       // const control = elem.parent.element;
      //  const small = control.querySelector('small');
        //ajout message d'erreur//
       // small.innerText = messageErreur;

        //ajout class erreur//
       //control.className = "control erreur";

  }