var pathname = window.location.pathname;
//console.log(pathname);

$(function () {
    $( '[ data-toggle="popover" ]' ).popover()
});

$(function () {
    $( '[ data-toggle="tooltip" ]' ).tooltip()
});

// For Authorization Page
if ( pathname == "/welcome/index" ) {
    
    (function() {
        'use strict';
    
        window.addEventListener( 'load', function() {
        var form = document.getElementById('authForm');
        form.addEventListener( 'submit', function( event ) {
            if ( form.checkValidity() === false ) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add( 'was-validated' );
        }, false);
        }, false);
    })();
};

$( "#ajaxAuthBtn" ).click( function() {
    $.ajax({

        method: "POST",
        url: "/welcome/ajaxAuthPars",
        data: { username: $( "#authUName" ).val(), password: $( "#authPass" ).val() },
        success: function( msg ) {
            if( msg=="welcome" ){
                alert( "Welcome! You have successfully logged in!" );
            }else{
                alert( "Invalid Credentials! Please try again!" );
            }
        }
    });
});

$( "#ajaxNavAuthBtn" ).click( function() {
    $.ajax({

        method: "POST",
        url: "/welcome/ajaxAuthPars",
        data: { username: $( "#navUsername" ).val(), password: $( "#navPass" ).val() },
        success: function( msg ) {
            if( msg=="welcome" ){
                alert( "Welcome! You have successfully logged in!" );
            }else{
                alert( "Invalid Credentials! Please try again!" );
            }
        }
    });
});

// For Contact Page
if ( pathname == "/controller/contact" ) {
    
    (function() {
        'use strict';
    
        window.addEventListener( 'load', function() {
        var form2 = document.getElementById( 'contactForm' );
        form2.addEventListener( 'submit', function(event) {
            if (form2.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form2.classList.add( 'was-validated' );  
        }, false);
        }, false);
    })();
};

$( "#ajaxBtn" ).click(function(){
        $.ajax({

            method: "POST",
            url: "/controller/ajaxPars",
            data: { captcha_val: $( "#captcha" ).val(), name: $( "#namefield" ).val(), email: $( "#email" ).val(), phone: $( "#phone" ).val(), check: $( "#checkbox" ).val(), select: $( "#formSelect" ).val(), text: $( "#textfield" ).val(), radio: $( "#radio" ).val()},
            success: function( msg ) {
                if( msg=="welcome" ){
                    alert( "Form successfully submitted!" );
                }else if( msg=="bad login" ){
                    alert( "Sorry something isn't right! Please check for errors and try again!" );
                } else if( msg=="Invalid captcha" ) {
                    alert( "Invalid Captcha! You Must Be A Robot! Resetting form!" );
                } else {
                    alert( "OOPS! You forgot something. Please fill out all required fields!" );
                }
            }
        });
});



if ( pathname == "/about" ) {

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Edit Fruit')
        modal.find('.modal-body input').val(recipient)
    })



    $('.modalShow').click(function(event){
        event.preventDefault();
        var e = $(this);
        var title = e.data('title');
        var body = e.data('value');
        $("#edit").modal("show");
        $('#modal-title').html(title);
        $('#modal-body').html(body);
    });

}