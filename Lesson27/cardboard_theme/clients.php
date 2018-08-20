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
    <section class="clients" id="clients">
        <div class="container">
            <h2 class="section-title">Наши клиенты</h2>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/voshod.png" alt="Восход">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/sterh.png" alt="Стерх">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/sneg.png" alt="Серебрянный снег">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/avdon.png" alt="Авдон">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/broiler.png" alt="Турбаслинский Бройлеры">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/bash_ice.png" alt="Башкирское мороженное">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/allat.png" alt="Аллат">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/alter.png" alt="Альтернатива">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/indushkin.png" alt="Индюшкин">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/salavat.png" alt="Салаватстекло ">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/fermer.png" alt="Молочный фермер">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 client">
                    <div class="client-block">
                        <img class="client-block__img" src="<?php echo get_template_directory_uri(); ?>/img/clients/megi.png" alt="Меги">
                    </div>
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