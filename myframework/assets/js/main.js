var pathname = window.location.pathname;
//console.log(pathname);

$(function () {
    $('[data-toggle="popover"]').popover()
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

// For Authorization Page
if (pathname == "/controller/index") {
    
    (function() {
        'use strict';
    
        window.addEventListener('load', function() {
        var form = document.getElementById('authForm');
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        }, false);
    })();
};

$("#ajaxAuthBtn").click(function(){
    $.ajax({

        method: "POST",
        url: "/controller/ajaxAuthPars",
        data: { username: $("#authUName").val(), password: $("#authPass").val()},
        success: function(msg) {
            if(msg=="welcome"){
                alert("Welcome! You have successfully logged in!");
                window.location.replace("/controller/greetingPage");
            }else{
                alert("Invalid Credentials! Please try again!");
            }
        }
    });
});

// For Contact Page
if (pathname == "/controller/contact") {
    
    (function() {
        'use strict';
    
        window.addEventListener('load', function() {
        var form2 = document.getElementById('contactForm');
        form2.addEventListener('submit', function(event) {
            if (form2.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form2.classList.add('was-validated');  
        }, false);
        }, false);
    })();
};

$("#ajaxBtn").click(function(){
    $.ajax({

        method: "POST",
        url: "/controller/ajaxPars",
        data: { name: $("#namefield").val(), email: $("#email").val(), phone: $("#phone").val(), check: $("#checkbox").val(), select: $("#formSelect").val(), text: $("#textfield").val(), radio: $("#radio").val()},
        success: function(msg) {
            if(msg=="welcome"){
                alert("Form successfully submitted!");
            }else{
                alert("Sorry something isn't right! Please check for errors and try again!");
            }
        }
    });
});