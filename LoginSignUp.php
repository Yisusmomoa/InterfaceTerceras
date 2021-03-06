<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Login-SignUp.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <title>LogIn</title>
    <style>
      * {
        font-family:sans-serif;
      }
    </style>
</head>
<body>
    <nav id ="EjNav">
        <img src="Media/Identificador.PNG" alt="" width="90" height="72" id="ImgLogo">
        <a href="#">Inicio</a>
        <a href="#">Autores</a>
        <a href="#">Productos</a>
        <a href="#">Carrito</a>   
          <div class="dropdown">
            <button class="dropbtn">Categorias</button>
            <div class="dropdown-content">
              <a href="#">Categ1</a>
              <a href="#">Categ2</a>
              <a href="#">Categ3</a>
            </div>
          </div>

				
        <div id="Busqueda">
          <label for="Buscar">Buscar</label>
          <a href="">Busqueda Avanzada</a>
          <input type="search" name="Busqueda" >
        </div>
        <div id="SeccionCarrito">
            <a href="">Carrito</a>
            <i class="fas fa-cart-arrow-down"></i>
        </div>
        
        <div class="InfoUsuarioNav">
          <p>Usuario</p>
          <img src="Media/default-.jpg" alt="" width="90" height="72">
        </div>
         <!-- con un boolean saber si esta loogeado y saber cual mostrar-->
         <div class="BotonLogin">
          <div class="btn">
              <button>SignUp</button>
              <button>Login</button>
          </div>
      </div>
			</nav>
    <article>
      <div class="SeparadorHeaderYcuerpo">
        <hr>
      </div>
        <main>
            <div class="contenedorTodo">
                <div class="CajaTrasera">
                    <div class="CajaTraseraLogin">
                        <h3>Ya tienes una cuenta?</h3>
                        <p>Inicia sesi??n para entrar a la p??gina</p>
                        <button id="BtnIniciarSesion" >Iniciar Sesi??n </button>
                    </div>
                    <div class="CajaTraseraRegistro">
                        <h3>A??n no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesi??n</p>
                        <button id="BtnRegistrarse">Registrarse</button>
                    </div>
                </div>
                <div class="ContenedorLoginRegistro">
                    <form action="" class="FormularioLogin">
                        <h2>Iniciar sesi??n</h2>
                        <input type="text" name="" id="" placeholder="Correo Electronico">
                        <input type="password" name="" id="" placeholder="Contrase??a">
                        <button>Entrar</button>
                    </form>
    
                    <form action="" class="FormularioRegistro">
                        <h2>Registrarse</h2>
                        <input type="text" name="" id="" placeholder="Nombre Completo">
                        <input type="text" name="" id="" placeholder="Correo Electronico">
                        <input type="text" name="" id="" placeholder="Usuario">
                        <input type="text" name="" id="" placeholder="Contrase??a">
                        <button >Registrarse</button>
                        
                    </form>
                </div>
    
            </div>
    
        </main>

        <br>
        <br>
        <br>
        <br>
        <footer>
            <div class = "container-footer">
              <div class="Row-footer">
    
               <div class= "Footer-1">
                <h1>ABOUT US</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate officiis optio dolore ipsa quaerat. Facilis repellat nesciunt blanditiis. Totam </p>
    
               </div>
    
               <div class= "Footer-2">
                <h1>CONNECT WITH US</h1>
                
                <div class = "Socaial-Row">
                   <a href="#"><i class="fab fa-facebook"></i></a>
                   <label for="">Follow us on Facebook</label>
                </div>
                <div class = "Socaial-Row">
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <label for=>Follow us on Twitter</label>
                </div>
               <div class = "Socaial-Row">
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <label for=>Follow us on Instragram</label>
               </div>
               <div class = "Socaial-Row">
                  <a href="#"><i class="fab fa-pinterest"></i></a>
                  <label for=>Follow us on Pinteres</label>
               </div>
    
               </div>
    
               <div class = Footer-3>
              <h1>CONTACT US</h1>
              <div class="Contact-Row1">
                <a href="#"><i class="fas fa-mobile-alt"></i></a>
                <label>+1-809-395-2064</label>
              </div>
              <div class="Contact-Row1">
                <a href="#"><i class="fas fa-envelope"></i></a>
                <label>MentalBlow@hotmail.com</label>
              </div>
              <div class="Contact-Row1">
                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                <label>HERE</label>
              </div>
               </div>
    
              </div>   
    
            </div>
    
            <div class = "container-botfooter">
              <div class="Copyright">
                <a href=""><i class="far fa-copyright"></i></a>
                <p>MentalBlow.com, Inc. All rights reserved</p>
              </div>
              <div class = "infoFooter">
                <a href="">Terms & Conditions</a> ?? <a href="">Frequently Asked Questions</a> 
              </div>
            </div>
    
        </footer>
    </article>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      <script src="Login-SignUp.js"></script>
</body>
</html>