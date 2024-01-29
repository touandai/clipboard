(function($){
    const btnForm = $('#formulaire');
    btnForm.on('submit', function() {
       const nom = $('#nom');
       const email = $('#email');
       const message = $('#message');
 
       if (nom.val() === "" ){
 
          const small = nom.parent().find('small');
          small.fadeIn(300);
          
       }
       if (email.val() === "" ){
 
          const small = email.parent().find('small');
          small.fadeIn(300);
          
       }
       if (message.val() === "" ){
 
          const small = message.parent().find('small');
          small.fadeIn(300);
          
       }
       if ((nom.val() !== "" ) && (email.val() !== "" ) && (message.val() !== "" )){
          
           return true;
 
       }
           return false;
 
    });
 

 })(jQuery);
 