<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU">
    </script>
    <!-- Yandex.Metrika counter -->
    <script>
    (function(d, w, c) {
        (w[c] = w[c] || []).push(function() { try { w.yaCounter49921105 = new Ya.Metrika2({ id: 49921105, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true, trackHash: true }); } catch (e) {} });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function() { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/49921105" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>
    <title>Добрый картон</title>
</head>

<body>
   <?php 
   include('nav_header.php');
    ?>
   
    <section class="contacts">
        <div class="contacts-mobile">
            <h2 class="contacts-mobile-title">контакты</h2>
            <div class="contacts-mobile-address">
                <span class="contacts-mobile__title">Адрес офиса
                </span>г. Уфа, Проспект октября, 46</div>
            <div class="contacts-mobile-address">
                <span class="contacts-mobile__title">Адрес склада

                </span>г. Уфа, ул. Майкопская, 65/26</div>
            <div class="contacts-mobile-phone">
                <span class="contacts-mobile__title">Тел. отдела продаж:</span> 8 (347) 271-54-28
                <br> 8 (937) 363-30-00</div>
            <button class="button contacts-block__btn" onclick="yaCounter49921105.reachGoal('clickOrder'); return true;">Заказать звонок</button>
            <div class="contacts-mobile-mail">
                <span class="contacts-mobile__title">Е-mail</span>urals.karton@gmail.com
            </div>
            <div class="contacts-mobile-map">
            </div>
        </div>
        <div id="map" class="map"></div>
        <div class="contacts-block">
            <div class="contacts-block__address">
                <span class="contacts-block__title">Адрес офиса</span> г. Уфа, Проспект октября, 46</div>
            <div class="contacts-block__address">
                <span class="contacts-block__title">Адрес склада</span> г. Уфа, ул. Майкопская, 65/2
            </div>
            <div class="contacts-block__phone">
                <span class="contacts-block__title">Тел. отдела продаж:</span> 8 (347) 271-54-28
                <br> 8 (937) 363-30-00
                <div class="contacts-block__cta">
                    <button class="button contacts-block__btn" onclick="yaCounter49921105.reachGoal('clickOrder'); return true;">Заказать звонок</button>
                </div>
                <div class="contacts-block__mail">
                    <span class="contacts-block__title">Е-mail</span>urals.karton@gmail.com
                </div>
            </div>
        </div>
    </section>

    <?php 
    include('footer.php');
    ?>

    <?php wp_footer(); ?>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  

</body>

</html>