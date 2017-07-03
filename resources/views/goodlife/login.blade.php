<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/')}}/css/materialize.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/login.css">
    <!--Sweet Alert Style -->
    <link href="{{url('/')}}/css/sweetalert.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey lighten-3">
    <div class="row flex-padre" id="app">
        <div class="col l4 m6 center-align" style="margin:5% auto;">
            <div class="card-panel z-depth-5">
                <img src="{{url('/')}}/images/logo-good-life-tattoo-150x150.png" alt="logo-tattoo" class="center-align">                
                <form class="login-form">
                    <div class="input-field col s12">
                        <i class="material-icons mdi-social-person-outline prefix">person_outline</i>
                        <input type="email" name="email" placeholder="Ingrese su email" v-model="email">
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons mdi-social-person-outline prefix">lock_outline</i>
                        <input type="password" name="password" placeholder="Ingrese su password" v-model="password">
                    </div>
                    <input type="button" type="submit" value="ingresar" class="btn" v-on:click="ingresar">
                </form>
            </div>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>   
    <script src="{{url('/')}}/js/vue.js"></script>
    <script src="{{url('/')}}/js/sweetalert.min.js"></script>
    <script src="{{url('/')}}/js/login.js"></script>
</body>
</html>