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
    <section class="products" id="products">
        <div class="container">
            <h2 class="section-title wow fadeInUp">Наша продукция</h2>
            <!-- /.section-title -->
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/products/img01.png" alt="#">
                        <div class="products-block__title">Гофрокороб 4-х клапанный
                        </div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button button-o products-block__button">Подробнее</button>
                            <button class="button products-block__popup" onclick="yaCounter49921105.reachGoal('clickOrder'); return true;">Получить расчет</button>
                        </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block -->
                </div>
                <!-- /.col-6 -->
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/products/img02.png" alt="#">
                        <div class="products-block__title">Гофролоток
                        </div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button button-o products-block__button">Подробнее</button>
                            <button class="button products-block__popup" onclick="yaCounter49921105.reachGoal('clickOrder'); return true;">Получить расчет</button>
                        </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block -->
                </div>
                <!-- /.col-6 -->
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/products/img03.png" alt="#">
                        <div class="products-block__title">Гофрокороб самосборный (сложная высечка)
                        </div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button button-o products-block__button">Подробнее</button>
                            <button class="button products-block__popup" onclick="yaCounter49921105.reachGoal('clickOrder'); return true;">Получить расчет</button>
                        </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block -->
                </div>
                <!-- /.col-6 -->
                <div class="col-12 col-lg-6">
                    <div class="products-block">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/products/img04.png" alt="#">
                        <div class="products-block__title">Листовой гофрокартон</div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button button-o products-block__button">Подробнее</button>
                            <button class="button products-block__popup" onclick="yaCounter49921105.reachGoal('clickOrder'); return true;">Получить расчет</button>
                        </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block -->
                </div>
                <!-- /.col-6 -->
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.products -->

   
    
    

    <?php 
    include('footer.php');
    ?>

    <?php wp_footer(); ?>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  

</body>

</html>