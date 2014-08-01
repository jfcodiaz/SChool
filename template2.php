<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-color: #101417;
                color:azure;
                font-family: "Gotham Narrow SSm",sans-serif,Arial;
                margin: 0;
                padding: 0;
            }
            .headerTop{
                background-color: #000000;
            }
            
            .main{
                margin : 2em 10em;
                background-color : white;
            }
            .menu1{
                background-color : red;
                float: left;
            }
            .content{
                width : 80%;
                background-color: blue;
            }
           
        </style>
        <link href="base.css" rel="stylesheet" type="text/css"/>
        <!--[if gte IE 9]>
            <style type="text/css">
            .gradient {
               filter: none;
            }
        </style>
      <![endif]-->
    </head>
    <body>
        <header class="header">
            <h1 class="logo">
                <a href="#">DevTics.com.mX</a>
            </h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
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
                    <li><a href="#"> Acerca de</a></li>
                    <li><a href="#">Cotacto</a></li>
                </ul>
            </nav>
            <div class="clean"></div>
        </header>
        <section class="main">
            <nav class="menu1">
                <ul>
                    <li><a href="#"> Acerca de mi</a></li>
                    <li><a href="#">Educación</a></li>
                    <li><a href="#">Empresas</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Técnologias</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <section class="content">
                Contenido Aqui
            </section>
            <div class="clean"></div>
        </section>
    </body>
</html>