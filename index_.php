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
            .logo{
                padding : 0px 10em;
            }
            .logo h1 {
                float: left;
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
            .clean{
                clear: both;
            }
        </style>
    </head>
    <body>
        <header class="headerTop">
            
            <h1 class="logo">
                <a href="#">Www.DevTics.com.mX</a>
            </h1>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Acerca de mi</a></li>
                </ul>
            </nav>
        </header>
        <section class="main">
            <nav class="menu1">
                <ul>
                    <li><a href="#">Acerca de mi</a></li>
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