<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nilk2go - concept-plaisir</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/icon.png">
</head>

<body>
	<div id="cursor"></div>
    <div class="no-horizontal">
        <img src="img/iphone.png">
    </div>
    <navbar>
        <div class="navbar">
            <div>
                <img class="logopng" src="img/logo.png" alt="logo Nilk">
            </div>
            <div class="burger-container">
            	<div class="burger"></div>
            </div>
            <div class="navbar_menu">
                <div class="link_animation">
                    <a class="link_menu_navbar" href="index.html#reutilisable">Bouteille réutilisable</a>
                </div>
                <div>
                    <a class="link_menu_navbar" href="index.html#sport">Exercice Sportif</a>
                </div>
                <div>
                    <a class="link_menu_navbar" href="index.html#couleur">Couleurs</a>
                </div>
                <div>
                    <a class="link_menu_navbar" href="contact.php">Contact</a>
                </div>
                <div>
                    <a class=" ZeroConcessionByNilk2Go" href="http://twitter.com/share?&text=%23ZeroConcessionByNilk2Go">#ZeroConcessionByNilk2Go</a>
                </div>
            </div>
        </div>
    </navbar>

    <section class="menu-container">
    	<a class="link_menu_navbar" href="#reutilisable">Bouteille réutilisable</a>
    	<a class="link_menu_navbar" href="#sport">Exercice Sportif</a>
    	<a class="link_menu_navbar" href="#couleur">Couleurs</a>
    	<a class="link_menu_navbar" href="">Contact</a>
    	<a class=" ZeroConcessionByNilk2Go" href="http://twitter.com/share?&text=%23ZeroConcessionByNilk2Go">#ZeroConcessionByNilk2Go</a>
    </section>
    <section class="contact-container">
        <h1 class="contact-title">Contact</h1>
        <form class="container-contact-us" action="contactform.php" method="post">
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="name" required="">
                        <label class="span-text">Nom Prénom</label>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="mail" required="">
                        <label class="span-text">E-mail</label>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input name="subject" type="text" required="">
                        <label class="span-text">Sujet</label>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea name="message" required="required"></textarea>
                        <label class="span-text">Votre message</label>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <button class="send" type="submit" name="submit">Envoyer</button>
                </div>
            </div>
        </form>
    </section>
    <footer id="footer">
        <div class="rs-container">
            <a href=""><img src="img/insta.svg" alt=""></a>
            <a href=""><img src="img/twitter.svg" alt=""></a>
            <a href=""><img src="img/mail.svg" alt=""></a>
            <a href=""><img src="img/fb.svg" alt=""></a>
        </div>
        <p> Ce site est la propriété intellectuelle de Leo Philip, Yohann Tonnerre, Matéo Roux, Samuel Agut, Mathis Chantereau et Vincent Soubabère</p>
    </footer>
    <script type="text/javascript" src="js/main.js"></script>

    <script>
        var div = document.createElement('div');
        div.className = 'fb-customerchat';
        div.setAttribute('page_id', '106786041220294');
        div.setAttribute('ref', '');
        document.body.appendChild(div);
        window.fbMessengerPlugins = window.fbMessengerPlugins || {
            init: function() {
                FB.init({
                    appId: '1678638095724206',
                    autoLogAppEvents: true,
                    xfbml: true,
                    version: 'v8.0'
                });
            },
            callable: []
        };
        window.fbAsyncInit = window.fbAsyncInit || function() {
            window.fbMessengerPlugins.callable.forEach(function(item) {
                item();
            });
            window.fbMessengerPlugins.init();
        };
        setTimeout(function() {
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        }, 0);
    </script>
</body>

</html>