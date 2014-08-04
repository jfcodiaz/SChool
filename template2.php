<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DevTics.com.mx</title>
        <link href="css/base.css" rel="stylesheet" type="text/css"/>
        <!--[if gte IE 9]>
            <style type="text/css">
                .gradient {
                   filter: none;
                }
            </style>
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    </head>
    <body>
        <header class="header">
            <h1 class="logo">
                <a href="#">DevTics.com.mX</a>
            </h1>
            <nav>
                <ul>
                    <li>
                        <a href="#">Home</a>
                        <ul style="display:none">
                            <li><a href="#">Acerca de mi</a></li>
                            <li><a href="#">Educación</a></li>
                            <li><a href="#">Empresas</a></li>
                            <li><a href="#">Proyectos</a></li>
                            <li><a href="#">Técnologias</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul style="display:none">
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>Doctrine</li>
                            <li>MySql</li>
                            <li>Java</li>
                            <li>MySql</li>
                        </ul>
                    </li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Cotacto</a></li>
                </ul>
            </nav>
            <div class="clean"></div>
        </header>
        <section class="main">            
            <section class="content">
                <?php for ($i = 0; $i < 100; $i++) : ?>
                    <p> Contenido Aqui</p>
                <?php endfor; ?>
                <div class="clean"></div>
            </section>
            <div class="clean"></div>
        </section>
        <div class="menuscroll"> Menu despues del scrooll</div>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/templatefixs.js" type="text/javascript"></script>
    </body>
</html>