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
    <section class="main" id="company">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <div class="main-img animate hidden-mobile hidden-laptop">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-img.png" alt="Коробки">
                    </div>
                </div>
                <!-- /.col-5 -->
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="main-text">
                        <h1 class="main-text__title"><?php the_field('main-title'); ?></h1>
                        <!-- /.main-text__title -->
                        <div class="main-text__subtitle">с доставкой по всей России</div>
                        <!-- /.main-text_subtitle -->
                        <div class="main-text__form">
                            <div class="form-title">
                                Получите индивидуальное предложение на производство и поставку гофропродукции
                                <br>
                                <span class="form-title__important">Образцы упаковки бесплатно!</span>
                            </div>
                            <!-- /.form-title -->
                            <form action="mailer/smart.php" method="POST" class="form" onsubmit="yaCounter49921105.reachGoal('formSubmit');">
                                <input class="form__input" name="phone" type="tel" placeholder="Введите номер телефона">
                                <button type="submit" class="button button_big">Оставить заявку!</button>
                            </form>
                            <small class="form-small">*Минимальный заказ 500шт</small>
                        </div>
                        <!-- /.main-text_form -->
                    </div>
                    <!-- /.main-text -->
                </div>
                <!-- /.col-7 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.main -->
    
     <?php 
    include('overlay.php');
    ?>
    <?php 
    include('footer.php');
    ?>

    <?php wp_footer(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  

</body>

</html>