<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoodLifeTatto</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/css/materialize.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
</head>
<body>
    <div class="menu">
        <ul class="title">
            <li class="logo"><img src="{{url('')}}/images/logo-good-life-tattoo-150x150.png" alt="goodlifetatto logo"></li>
            <li><a href="#">INICIO |</a></li>
            <li><a href="#resena">RESEÑA |</a></li>
            <li><a href="#galeria">GALERÍA |</a></li>
            <li><a href="#contacto">CONTACTO</a></li>
        </ul>
    </div> 
    <div class="head height valign-wrapper">
              
        <h1 class="title yelow large center-align fullw clearfix">GOOD LIFE TATTO</h1>
        
        <h2 class="title whitee medium center-align absolute fullw">ESTUDIO PRIVADO</h2>
    </div>

    <section class="row">
        <div class="col l6">
            <img src="{{url('')}}/images/tatuaje-trais.jpg" class="fullw fullh" alt="">
        </div>
        <div class="col l6">
            <div class="full">
                <h2 class="title yelow medium center-align section scrollspy" id="resena">RESEÑA</h2>
                <p>
                    Cristian Pérez Galaz,&nbsp; artista tatuador con varios años de experiencia, comenzó su vida siempre ligado al dibujo, ganando varios concursos escolares y a nivel de comuna.
                    En su adolescencia, atraído por el anonimato y la rebeldía dedica su tiempo al street art (graffiti y stencil), ahí conoce entre sus contactos el mundo del tatuaje. Con estudios técnicos de diseño e ilustración comienza a tatuar en forma esporádica a amigos y conocidos, siempre con entrega en su trabajo y mostrando ganas de aprender y crecer como tatuador.
                    Es en el 2014 cuando volcó su creatividad al arte del tatuaje, pasando por estudios comerciales y&nbsp; captando clientes a través de un trabajo responsable, higiénico y bien realizado.
                    Hoy atiende en su estudio privado, con horas previamente agendadas a personas que busquen un tatuaje artístico de alta calidad.
                </p>
            </div>
        </div>
        <div class="col s12">
        <h2 id="galeria" class="title yelow medium center-align section scrollspy" style="margin-top:30px;">GALERÍA</h2>
        <div class="container">
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/pecho.jpg" class="galeria fullw materialboxed"></div>
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/hanamichi.jpg" class="galeria fullw materialboxed"></div>
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/hombro.jpg" class="galeria fullw materialboxed"></div>
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/brazo.jpg" class="galeria fullw materialboxed"></div>
            
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/pecho2.jpg" class="galeria fullw materialboxed"></div>
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/hombro2.jpg" class="galeria fullw materialboxed"></div>
            <div class="col l3 s6 hover07 bottom"><img src="{{url('')}}/galeria/brazo2.jpg" class="galeria fullw materialboxed"></div>
        </div>
    </div>
        <div class="col s12">
            <h2 class="title yelow medium center-align bottom section scrollspy" id="contacto">CONTACTO</h2>
            <div class="col l3">
                <div class="col s12">
                    <img src="{{url('')}}/images/telefono.png" class="center-block" alt="">
                    <p class="center-align">+56 9 51944918</p>
                </div>
                <div class="col s12">
                    <img src="{{url('')}}/images/email.png" class="center-block" alt="">
                    <p class="center-align">contacto@goodlifetatto.cl</p>
                </div>
                <div class="col s12">
                    <img src="{{url('')}}/images/message.png" class="center-block" alt="">
                    <p class="center-align">/cristian.pereztattooist</p>
                </div>
            </div>
            <div class="col l9">
                <form>
                    <input type="email" id="email" placeholder="Ingresa tu nombre">
                
                    <input type="text" id="password" placeholder="Ingresa tu email">
                
                    <textarea name="mensaje" id="mensaje"  placeholder="Escribe el mensaje" style="height: 300px;"></textarea>
                <div class="center">          
                    <button type="submit" class="btn center">Enviar <i class="material-icons right">send</i></button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <script src="{{url('/')}}/js/jquery-2.1.3.min.js"></script>
    <script src="{{url('/')}}/js/materialize.min.js"></script>
    <script src="{{url('/')}}/js/vue.js"></script>
    <script>
        $(document).ready(function(){
            $('.scrollspy').scrollSpy();
            $(window).scroll(()=>{
                scroll = $(window).scrollTop();
                if(scroll>100){
                    $('.menu ul').css({'background':'black','font-size':'1vw'});
                    $('.menu ul li img').css({'width':'75'})
                }else{
                    $('.menu ul').css({'background':'','font-size':''});
                    $('.menu ul li img').css({'width':''})
                }
            })
        });
    </script>
</body>
</html>