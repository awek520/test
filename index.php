<!DOCTYPE html>
<html>
    <?php wp_head(); ?>
        <title>Skrybus.pl :: SlamDesign - Tworzenie Stron WWW</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="<?php bloginfo('template_url'); ?>/css/lightbox.css" rel="stylesheet" />
    </head>
    <body>
<div id="bg">
    <div id="bg_up">
        <div class="bg_text_left">
            <img src="<?php bloginfo("template_url") ?>/images/tel.png" style="vertical-align: middle"> 794 940 421 
            <img src="<?php bloginfo("template_url") ?>/images/email.png" style="vertical-align: middle"> slawek.krybus@gmail.com
        </div>
        <div class="time">
            Aktualny czas: <div id="data"></div>
        </div>
    </div>
    <header id="head">
        <div id="header_bg">
            <div id="header_h1">Witaj nieznajomy....</div>
            <div id="header_h2">Jestem Sławek!</div>
            <div id="header_h3">
                Fajnie że odwiedziłeś moją strone!<br>
            </div>
        </div>
            <div id="arrow">
                <img src="<?php bloginfo("template_url") ?>/images/arrow.png">
            </div>
    </header>
    <div id="text_box">
        <div id="text">
            <div id="block">
                <img src="<?php bloginfo("template_url") ?>/images/icon1.png">
                    <h2><u>Twój</u> pomysł!</h2>
            </div>
        </div>
        <div id="text">                
            <div id="block">
                <img src="<?php bloginfo("template_url") ?>/images/icon2.png">
                    <h2>Moja <u>realizacja!</u></h2>
            </div>
        </div>
        <div id="text">                
            <div id="block">
                <img src="<?php bloginfo("template_url") ?>/images/icon3.png"> 
                    <h2>Więcej klientów!</h2>
             </div>
        </div>
    </div>
</div>

    <div id="conteiner_about">
    <h1>Zacznijmy od początku</h1>
        <div id="about_text">
            <div id="about_text_left">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?> 
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?> 
            </div>
            <div id="about_text_right">
                <img src="<?php bloginfo("template_url") ?>/images/eq.png">
            </div>
        </div>
    </div>
        
    <div id="divider-des">
        <div id="divider_text">
            "Dobra strona internetowa to podstawa marketingu w sieci"
        </div>
        <div id="divider_text_small">
            ~ Sławomir Krybus
        </div>
    </div>

<div id="conteiner">
    <h1>Kilka z naszych ostatnich projektów</h1>
    <div id="arcitle_box">
        <div id="arcitle_box">                
            <div id="blocks">
                <div class="img_text">
                    <a href="<?php bloginfo("template_url") ?>/images/project/portfolio-img-1.jpg" data-lightbox="image-1" data-title="Projekt">
                    <img src="<?php bloginfo('template_url'); ?>/images/ico.png"></a>
                </div>
                    <img src="<?php bloginfo("template_url") ?>/images/project/portfolio-img-1.jpg" height="400px">

            </div>
        </div>
        <div id="arcitle_box">                
            <div id="blocks">
                <div class="img_text">
                    <a href="<?php bloginfo("template_url") ?>/images/project/portfolio-img-2.jpg" data-lightbox="image-1" data-title="Projekt">
                    <img src="<?php bloginfo("template_url") ?>/images/ico.png"></a>
                </div>
                    <img src="<?php bloginfo("template_url") ?>/images/project/portfolio-img-2.jpg" height="400px">
            </div>
        </div>
        <div id="arcitle_box">                
            <div id="blocks">
                <div class="img_text">
                    <a href="<?php bloginfo("template_url") ?>/images/project/portfolio-img-3.jpg" data-lightbox="image-1" data-title="Projekt">
                    <img src="<?php bloginfo("template_url") ?>/images/ico.png"></a>
                </div>
                    <img src="<?php bloginfo("template_url") ?>/images/project/portfolio-img-3.jpg" height="400px">
            </div>
        </div>
        <div id="arcitle_box">                
            <div id="blocks">
                <div class="img_text">
                    <a href="<?php bloginfo("template_url") ?>/images/project/portfolio-img-4.jpg" data-lightbox="image-1" data-title="Projekt">
                    <img src="<?php bloginfo("template_url") ?>/images/ico.png"></a>
                </div>
                    <img src="<?php bloginfo("template_url") ?>/images/project/portfolio-img-4.jpg" height="400px">
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
    <footer id="footer">
        <div id="foot">
            <div id="foot_left">
                <div id="foot_text">
                <b><h2>SlamDesign.pl</h2></b>
                Borowa 16A, 44-200 Rybnik
                <br>
                +48 794 940 421
                <br><br>
                biuro@slamdesign.pl
                <br><br>
                <b>NIP: 000000000</b>
                </div>
            </div>
            <div id="foot_center">
                <div id="foot_text">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.4234736168833!2d18.513007215301265!3d50.11579727943059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471148b124c58667%3A0x7f7cd6a97c9449d4!2sBorowa%2016a%2C%2044-200%20Rybnik!5e0!3m2!1spl!2spl!4v1590603027607!5m2!1spl!2spl" width="350" height="170" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div id="foot_right">
                <div id="foot_text">
                    <form action="#" method="post" role="form">
                        <input type="text" id="name" placeholder="Imie i nazwisko">
                        <input type="text" id="email" placeholder="E-mail">
                        <textarea rows="3" id="message" cols="30" placeholder="Opisz tutaj swój projekt"></textarea>
                        <input type="submit" value="Ok!" id="submit" onclick="submitContactForm()">
                    </form>  
                    <div id="statusMsg"></div>
                </div>
            </div>
            <div id="foot_center_bottom">
                <div id="foot_center_bottom_text">
                    Copyright © 2020 By <b>Sławomir Krybus</b>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function submitContactForm(){
            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            var name = $('#inputName').val();
            var email = $('#inputEmail').val();
            var message = $('#inputMessage').val();
            if(name.trim() == '' ){
                alert('Proszę wpisać imię i nazwisko.');
                $('#inputName').focus();
                return false;
            }else if(email.trim() == '' ){
                alert('Proszę wpisać adres email.');
                $('#inputEmail').focus();
                return false;
            }else if(email.trim() != '' && !reg.test(email)){
                alert('Proszę wpisać poprawny adres email.');
                $('#inputEmail').focus();
                return false;
            }else if(message.trim() == '' ){
                alert('Proszę wpisać treść wiadomości.');
                $('#inputMessage').focus();
                return false;
            }else{
                $.ajax({
                    type:'POST',
                    url:'submit_form.php',
                    data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled","disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success:function(msg){
                        if(msg == 'ok'){
                            $('#inputName').val('');
                            $('#inputEmail').val('');
                            $('#inputMessage').val('');
                            $('.statusMsg').html('<span style="color:#009933;">Wiadomość została wysłana.</p>');
                        }else{
                            $('.statusMsg').html('<span style="color:red;">Błąd formularza. Spróbuj później lub skontaktuj się z nami telefonicznie.<br>Telefon: <b>665 515 615</b></span>');
                        }
                        $('.submitBtn').removeAttr("disabled");
                        $('.modal-body').css('opacity', '');
                    }
                });
            }
        }
        </script>
</body>
    <script src="<?php bloginfo('template_url'); ?>/js/lightbox-plus-jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/js.js" async></script>
</html>