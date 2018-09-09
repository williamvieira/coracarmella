// menu
      var slideRight = new Menu({
        wrapper: '#o-wrapper',
        type: 'slide-right',
        menuOpenerClass: '.c-button',
        maskId: '#c-mask'
      });

      var slideRightBtn = document.querySelector('#c-button--slide-right');
      
      slideRightBtn.addEventListener('click', function(e) {
        e.preventDefault;
        slideRight.open();
      });


// Form
 jQuery(document).ready(function(){
            jQuery('#faleconosco-btn').submit(function(){
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                    type: "POST",
                    url: "/mail/enviaform.php",
                    data: dados,

                    success: function( data )
                    {
                        document.getElementById("msg").innerHTML = "<p style='color:yellow;'>Mensagem enviada com sucesso!</p><br>";
                    }
                });
                
                return false;
            });

        });



// Form
 jQuery(document).ready(function(){
            jQuery('#demonstracao-form').submit(function(){
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                    type: "POST",
                    url: "/mail/enviademonstracao.php",
                    data: dados,

                    success: function( data )
                    {
                        document.getElementById("msg-demonstracao").innerHTML = "<p style='color:green;'>Mensagem enviada com sucesso!</p><br>";
                    }
                });
                
                return false;
            });

        });


// Form
 jQuery(document).ready(function(){
            jQuery('#projetocustomizado-form').submit(function(){
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                    type: "POST",
                    url: "/mail/enviacustomizado.php",
                    data: dados,

                    success: function( data )
                    {
                        document.getElementById("msg-projetocustomizado").innerHTML = "<p style='color:green;'>Mensagem enviada com sucesso!</p><br>";
                    }
                });
                
                return false;
            });

        });