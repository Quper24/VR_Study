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
    
    <section class="production" id="production">
        <div class="container">
            <div class="row">
                <div class="col-7 d-none d-md-block">
                    <div class="production-slider_top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/production/img1.jpg" alt="Производство">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/production/img2.jpg" alt="Производство">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/production/img3.jpg" alt="Производство">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/production/img4.jpg" alt="Производство">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/production/img5.jpg" alt="Производство">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/production/img6.jpg" alt="Производство">
                    </div>
                    <div class="production-slider_bottom">
                        <div class="production-slider_bottom_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/production/img1.jpg" alt="Производство">
                        </div>
                        <div class="production-slider_bottom_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/production/img2.jpg" alt="Производство">
                        </div>
                        <div class="production-slider_bottom_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/production/img3.jpg" alt="Производство">
                        </div>
                        <div class="production-slider_bottom_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/production/img4.jpg" alt="Производство">
                        </div>
                        <div class="production-slider_bottom_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/production/img5.jpg" alt="Производство">
                        </div>
                        <div class="production-slider_bottom_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/production/img6.jpg" alt="Производство">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="production-text">
                        <h2 class="production-text__title">Производство</h2>
                        <div class="production-text__descr">Современное оборудование позволяет произ- водить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика. Досконально прорабатываем конструкции коро- бов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции. Возможно нанесение цветной флексопечати на поверхность коробов.
                        </div>
                    </div>
                    <div class="col-12 d-block d-md-none">
                        <div class="production-slider_mobile">
                            <img class="production-slider_mobile__img" src="<?php echo get_template_directory_uri(); ?>/img/production/img1.jpg" alt="Производство">
                            <img class="production-slider_mobile__img" src="<?php echo get_template_directory_uri(); ?>/img/production/img2.jpg" alt="Производство">
                            <img class="production-slider_mobile__img" src="<?php echo get_template_directory_uri(); ?>/img/production/img3.jpg" alt="Производство">
                            <img class="production-slider_mobile__img" src="<?php echo get_template_directory_uri(); ?>/img/production/img4.jpg" alt="Производство">
                            <img class="production-slider_mobile__img" src="<?php echo get_template_directory_uri(); ?>/img/production/img5.jpg" alt="Производство">
                            <img class="production-slider_mobile__img" src="<?php echo get_template_directory_uri(); ?>/img/production/img6.jpg" alt="Производство">
                        </div>
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