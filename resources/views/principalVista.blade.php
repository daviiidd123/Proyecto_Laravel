<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <script src="https://kit.fontawesome.com/9b85c27681.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<style>
    *{
    margin: 0 3px;
    padding: 0;
    box-sizing: border-box;
}
body{
    height: 230vh;
    width: 100%;
}
.todo{
    display: grid;
    grid-template-rows: 20% 60% 20%;
    max-width: 100%;
    height: 100%;
    
}
.todo .cabeza{
    max-width: 100%;
    height: auto;
    display: grid;
    grid-template-columns: 30% 70%;
    padding: 90px 20px
}
.todo .pie{
    display: grid;
    grid-template-rows: 70% 30%;
    position: relative;
}
.todo .pie .autor{
    font-size: 2.2em;
    position: relative;
}.todo .pie .contactos{
    display: grid;
    grid-template-columns: 33% 30% 37%;
    position: relative;
    justify-content: center;
    align-items: center;
}
.todo .pie .contactos .redes{
    list-style: none;
    display: flex;
    text-align: center;
    position: relative;
    left: 0px;
}
.todo .pie .contactos .telefonos li{
    list-style: none;
}
.todo .pie .contactos .info li{
    list-style: none;
}
.todo .pie .contactos .redes li{
    list-style: none;
    margin: 10px;
    border-radius: 50px;
    transition: transform 0.5s ease;
}
.todo .pie .contactos .redes li a{
    width: 2.7vw;
    display: block;
    color: #fff;
    padding: 10px 0;
}
.todo .pie .contactos .redes li:nth-child(1){
    background: #1877f2;
}
.todo .pie .contactos .redes li:nth-child(2){
    background: #25D366;
}
.todo .pie .contactos .redes li:nth-child(3){
    background: #f32c1a;
}
.todo .pie .contactos .redes li:hover{
    transform: translateY(0.6em);
    box-shadow: 0 0.9vw 0.6vw rgba(0, 0, 0, .5);
    scale: 1.2;
}
.todo .cabeza .logo{
    padding: 5px 0;
    font-size: 1.6em;
}
.todo .cabeza .opciones .lis{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    list-style: none;
    padding: 30px 0;
    font-size: 27px;
}
.todo .cabeza .opciones .lis a{
    text-decoration: none;
    color: #000;
    transition: transform 0.8s ease;
}
.todo .cabeza .opciones .lis a:hover{
    color: red;
    transform: translateY(20px,50%) scale(1.2);
}

.todo .cabeza .opciones .opcio li{
    list-style: none;
}
.todo .bannel img{
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
}
.todo .cuerpo{
    position: relative;
    display: grid;
    grid-template-rows: 36% 32% 32%;
}
.todo .cuerpo img{
    height: 100%;
    width: 100%;
}
.todo .cuerpo .cont img{
    height: 55%;
    width: 95%;
}
.todo .cuerpo .cont{
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    padding: 15px;
    box-sizing: border-box;
}

.todo .cuerpo .titulo{
    margin-top: 4em ;
    padding: 10px;
}
</style>
<body>

    <div class="todo">
        
        <div class="cabeza">
            <div class="logo"><h1><b>MI PÁGINA</b></h1></div>
            <div class="opciones">
                <ul class="lis">
                    <li>Inicio</li>
                    <li><a href="INDEX6.HTML">Galeria</a></li>
                    <li><a href="#pie">Contactos</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Registrarme</a></li>
                </ul>
            </div>
        </div>
        <div class="cuerpo">
            <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsg_H-RiObOIrQQTj0snte1w-BP4-vkY56aw&s" alt=""></div>
            <div class="cont">
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRQLQbsc4JDJMEaZ_Wp1oUSHd1uz2kXmWHfQ&s" alt=""></div>
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOBNL9YRV3HWkfSDeRapQgtSA9Udmbr8zKSg&s" alt=""></div>
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPjkDK01GjCBFdhNogHR-vgWRzpIgV_Ox6gw&s" alt=""></div>
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVw3uheXyaVV13-N79XUFyXGd2Dvcoflj0oQ&s" alt=""></div>
            </div>
            <div class="cont">
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmIVOqsYK3t8HxkQ_WjwPoP2cwJiV1xDyWIw&s" alt=""></div>
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvlCXtwUEAF8dirDL6hWMcympC9uzA7Tpwm9mESud4lRjKcT1Yd2DE3iZUtgLkkOu4ThQ&usqp=CAU" alt=""></div>
                <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDqEvLAJ6b8SZOC8PGkdFQfu1CzCx1JfPQEl_iw7-PeUIWcv_eTHFPBlj74Scc1bkezk8&usqp=CAU" alt=""></div>
                <div><img src="https://i.pinimg.com/1200x/50/07/ed/5007edd4af49dc476e6dc43b5863aac5.jpg" alt=""></div>
            </div>
            
        </div>
        <div class="pie" id="pie">
            <div class="contactos">
                <div> 
                    <h2>Contactos</h2>
                    <ul class="telefonos">
                        <li>Telefonó: 912518987</li>
                        <li>Correo: carmaschaupin@gmail.com</li>
                    </ul>  
                </div>
                <div>
                    <h2>Redes sociales</h2>
                    <ul class="redes">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href=""><i class="fa-regular fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div>
                    <h2>Información legal</h2>
                    <ul class="info">
                        <li>Política de privacidad</li>
                        <li>Terminós y condiciones</li>
                    </ul>
                </div>
            </div>
            <div class="autor">
                <center>© 2024 David Armas Ch. Todos los derechos reservados.</center>
            </div>
        </div>
    </div>
</body>
</html>
