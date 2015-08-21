$(document).ready(function() { 

    $('.fancybox').fancybox();

    $("#cloud-carousel").CloudCarousel(		

    {		

			

        xPos: 170,

        yPos: 30,

        minScale: 0.9,

        buttonLeft: $(".sliderLeft"),

        buttonRight: $(".sliderRight"),

        altBox: $("#alt-text"),

        titleBox: $("#title-text"),

        bringToFront: false

				

    });

    $("#subscribeform #submit").click(function(e){

        e.preventDefault();

        var email=$("#subscribeform #email").val();

        $.ajax({

            url: 'php/subscribe.php',

            type: 'POST',

            data:{

                the_email: email

            }, 

            success:function(response){

                var msg = $.parseJSON(response);

                if(msg.response == 'ok'){

                    $(".newsletterbox").children('.sub_mess').remove();

                    $(".newsletterbox").prepend('<div class="sub_mess success_sub">Email subscribed!</div>');

                }else{

                    $(".newsletterbox").children('.sub_mess').remove();

                    $(".newsletterbox").prepend('<div class="sub_mess unsuccess_sub">Please check the email address..</div>');

                }

            }

        })

    })

});

$(window).load(function() {

    if(window.location.hash=='')

    {

        document.body.scrollTop;



    }

    else

    {

        $('html,body').animate({

            scrollTop: $("#"+window.location.hash.substr(1)).offset().top - 118

        },'slow');

    }

    $('a[href*=#]:not([href=#])').click(function() {

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 

            || location.hostname == this.hostname) {



            var target = $(this.hash);

            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

            if (target.length) {

                $('html,body').animate({

                    scrollTop: target.offset().top -118

                }, 1000);

                return false;

            }

        }

    });

});