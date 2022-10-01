<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="de">
<head>
  <title>Helden des Bildschirms Gameserver und Voiceserver</title>

  <meta charset="utf-8">

  <meta name="description" content="Helden des Bildschirms bietet dir Gameserver und Voiceserver, Minecraft, Mods, TeamSpeak, Discord, Meet.">

  <meta name="keywords" content="minecraft, rlcraft, gameserver, server, teamspeak, discord, meet, voiceserver">

  <meta name="author" content="Janis">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

  <link rel="stylesheet" href="index.css">

  <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-/icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="manifest" href="/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#0033CC" />
  <style type="text/css">
  </style>



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176121451-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-176121451-1', { 'anonymize_ip': true });
  </script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K73ZCBF');</script>
  <!-- End Google Tag Manager -->

  <script async
  src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5350651163680266"
       crossorigin="anonymous"></script>
</head>

<body>
  <div id="wrapper" style="
    min-height: calc(100vh - 98px);
    ">
    <div class="head">
      <img src="/img/logo.png" alt="Logo von @Zauberah erstellt." style="width:64px;height:51px;">
      <a href="/">Helden des Bildschirms</a>
    </div>

    <div class="over_nav">
      <a href="/">Home</a>
      <a href="/artikel">Blog</a>
      <a href="/download">Download Server</a>
      <!-- <a href="#minecraft">Minecraft Server</a>
      <a href="#blog">Blog</a>
      <a href="#such_hilfe">Download Server</a> -->
      <a href="/#voiceserver">Voiceserver</a>
      <a href="/#spenden">Spenden</a>
      <a href="/#twitch-embed">Twitch</a>
      <div class="suchen" style="float:right">
        <input type="text" value="" id="suche_input" class="suche"><button id="suche_summit" class="suche">suchen</button>
      </div>
    </div>

    <div class="adblockdetect">
    </div>

    <div id="werbung_google_layerable">
      <!-- Adblocklayerable -->
      <ins class="adsbygoogle" style="display:block; text-align:center; margin-top: 1%;" data-ad-client="ca-pub-5350651163680266" data-ad-slot="5168793244" data-ad-format="auto" data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>

<content_box>
    <?php

        $hfp = "../../hidden_file/giveaway/";

        if (!is_file($hfp ."Teilnehmer" . "100" . ".json")) {
          echo "<h2> Es wird verlost:</h2><br> Ein Xbox Game Pass Ultimate 2 Monate(Trial) Key der auf Accounts ohne ein ehmaliges oder aktives Abo bis zum 26.11.2022 aktiviert werden kann.";
        } else {
          echo "Die maximale Teilnehmerzahl ist erreicht.";
          exit;
        }

    if(isset($_POST["submit"])){
      if (!isset($_POST["subscribe"])) {
        exit("Bitte zustimmen für die Teilnahme.");
      }

      $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=&response=".$_POST["adkey_text_input"]);
      $request = json_decode($request);
        if($request->success == true){
            if($request->score >= 0.6){
                echo ('Name: '.htmlspecialchars($_POST["name"]).'<br>'.' Email: '.htmlspecialchars($_POST["email"]));

            $jsone =[
                //Daten von User-Input können zu lang sein.
                'name'=> htmlspecialchars($_POST["name"]),
                'email'=> htmlspecialchars($_POST["email"]),
            ];

            for ($i=1; $i <= 100; $i++) {
              if (!file_exists($hfp ."Teilnehmer" . $i . ".json")) {  //Datei vorhanden?
                file_put_contents($hfp ."Teilnehmer" . $i . ".json",json_encode($jsone)); //Was passiert wenn nicht in Datei sollte abgefragt werden ob vorhanden weiter oben.
                ?>
                <h1 style="color: green;">Teilnahme bestätigt</h1>
                <?php
                echo ('Danke für deine Teilnahme '.htmlspecialchars($_POST["name"]).'<br>'.'Ich senden dir in den nächsten Tagen wenn du Gewonnen hast eine Bestätigung an deine Email: '.htmlspecialchars($_POST["email"]));
		break;
              } else {
                //if ($i <= 100)
                if ($i == 100)
                {
                  echo "Es sind 100 Teilnehmer erreicht, aus diesem Grund bitten wir sie es später erneut zu versuchen.";
                  //break;
                }
              }
            }

            } else {
                echo "Die Anfrage wurde aufgrund von Spamverdacht blockiert.";
            }
        } else {
            echo "Es gab einen Fehler mit dem Captcha";
        }
    }
   ?>
     <div class="giveaway">
    <form action="index.php" method="post">
    E-Mail: <input type="email" value="" id="e-mail" name="email" placeholder="Email" required> <br>
    Name: <input type="text" name="name" placeholder="Name" required><br>
    AdKey: <input type="text" value="" id="adkey_text_input" name="adkey_text_input"> <br>
    <label for="subscribe">Ich stimme zu, dass man mich über die angegebene E-Mail kontaktieren darf.</label>
    <input type="checkbox" id="subscribe_checkbox" name="subscribe" value="subscribe"> <br>
    <button type="submit" name="submit">Teilnehmen</button></box>
  </form>
  </div>

  <script src="https://www.google.com/recaptcha/api.js?render=6Lc9k8kfAAAAAAC0AdMMQAZ6u25VOlgzh7L9zbuW"></script>
  <script>

let adBlockEnabled = false;
async function detectAdBlock() {
  const googleAdUrl = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
  try {
    await fetch(new Request(googleAdUrl)).catch(_ => adBlockEnabled = true)
  } catch (e) {
    adBlockEnabled = true;
  } finally {
    //console.log(`AdBlock Enabled: ${adBlockEnabled}`)
  }

  if (adBlockEnabled == true) {
    adBlockEnabled = true;
    return true;
  }

  setTimeout(function() {
    var a = document.querySelector('.showads'),
      adBlockEnabled = a ? (a.offsetHeight ? false : true) : true;
    //console.log('ads blocked?', adBlockEnabled)
    if (adBlockEnabled == true) {
      adBlockEnabled = true;
      return true;
    }
  }, 200);

  setTimeout(function() {
    if (document.querySelector('.showads').offsetHeight <= 65 || document.querySelector('.adsbygoogle').offsetHeight <= 5 || adBlockEnabled == true) {
      //console.log('ads blocked?', ' = true');
      adBlockEnabled = true;
      return true;
    }
  }, 200);

  return false;
}
  detectAdBlock();
  setTimeout(function() {
    if (adBlockEnabled == true) {
      const title = document.createElement("a");
      const content_box = document.getElementsByClassName("adblockdetect")[0];
      title.innerHTML =
        'Adblocker erkannt, ich werde die Dienstleistung einschränken, bis du diesen deaktivierst. <br> Wie habe ich dich erkannt, ja das ist einfach: <a href="https://heldendesbildschirms.de/artikel/?artikel=was-ist-eigentlich-der-sinn-von-anti-adblockern-wie-leicht-lassen-sie-sich-umgehen">Was ist eigentlich der Sinn von Anti-Adblockern / Wie leicht lassen sie sich umgehen </a> <br> Falls du Adblocker mit Whitelisting nutzt, solltest du zu uBlock Origin und Privacy Badger wechseln. ;)';
      content_box.appendChild(title);

    } else {
      //alert("adblocker nicht erkannt");
    }
  }, 1000);
  //Das man es leicht umgehen kann ist mir klar, es soll den Nutzer nur darauf hinweißen fair zu sein. ;)
  //Umgehung document.querySelector('.showads').offsetHeight = 6; document.querySelector('.adsbygoogle').offsetHeight = 66; adBlockEnabled = false; checkrobot();
  /*Beste Umgehung:
  grecaptcha.ready(function() {
    grecaptcha.execute('6Lc9k8kfAAAAAAC0AdMMQAZ6u25VOlgzh7L9zbuW', {action: 'submit'}).then(function(token) {
             document.getElementById("adkey_text_outinput").value = token;
             document.getElementById("adkey_text_input").value = document.getElementById("adkey_text_outinput").value;
          }
    });
  });
  Mit einer Webserver Anfrage könne man das ganze auch automatisieren.
  https://heldendesbildschirms.dynv6.net/giveaway/index.php&email=email%40web.de&name=Name&adkey_text_input=<AdKey>&subscribe=subscribe&submit=*/

     function checkrobot() {
       grecaptcha.ready(function() {
         grecaptcha.execute('6Lc9k8kfAAAAAAC0AdMMQAZ6u25VOlgzh7L9zbuW', {action: 'submit'}).then(function(token) {
           setTimeout(function() {
                if (document.querySelector('.showads').offsetHeight <= 65 || document.querySelector('.adsbygoogle').offsetHeight <= 5 || adBlockEnabled == true ){
                  console.log('ads blocked?', ' = true');
                  alert("Bitte deaktiviere deinen Adblock. :)");
                } else {
                  document.getElementById("adkey_text_outinput").value = token;
                  document.getElementById("adkey_text_input").value = document.getElementById("adkey_text_outinput").value;
               }
           }, 200);
         });
       });
     }
 </script>
<div class="ads showads">
  <div id="werbung_google">
  <!-- Adblock -->
  <ins class="adsbygoogle"
       style="display:block; text-align:center; margin-top: 1%; margin-bottom: 21px;"
       data-ad-client="ca-pub-5350651163680266"
       data-ad-slot="9833970873"
       data-ad-format="auto"
       data-full-width-responsive="true">
       Dein AdKey lautet: <input type="text" value="" id="adkey_text_outinput"> <button onclick="checkrobot()">AdKey bestätigen</button><br>
     </ins>
     </div>
  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>

<script>
function copy(txt) {
  var copyText = document.getElementById(txt);
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

<!--<div id="werbung">
<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=DE&source=ac&ref=tf_til&ad_type=product_link&tracking_id=heldendesbild-21&marketplace=amazon&region=DE&placement=B07WFQQLBG&asins=B07WFQQLBG&linkId=8841e2dc7d055c4469d0eaf3233e1d2b&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>

<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=DE&source=ac&ref=tf_til&ad_type=product_link&tracking_id=heldendesbild-21&marketplace=amazon&region=DE&placement=B07PVCVBN7&asins=B07PVCVBN7&linkId=19eb6fd6268585cc196290d07813cf3a&show_border=false&link_opens_in_new_window=false&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
</div>-->

</content_box>
</div>
</body>

<footer>
  <text>
  <ul>
    <!-- <li>&copy; 2019 Helden des Bildschirms</li> -->
    <li><a href="mailto:support@heldendesbildschirms.de">Kontakt</a></li>
    <li><a href="datenschutz.html">Datenschutz</a></li>
    <li><a href="impressum.html">Impressum</a></li>
  </ul>
  </text>
</footer>
</html>
