<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>izyacademy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagenes/logoizy.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="imagenes/Logo izyacademy transparente2022.png" alt="Logo izyacademy">
        </div>

        <nav class="nav-links">
            <ul>
                <li class="inicio"><a href="#">Inicio</a></li>
                <li class="rutas"><a href="#" class="fall">Rutas De Formación</a>
                    <ul>
                       <li><a href="#">Científico de Datos</a></li> <hr>
                        <li><a href="http://localhost/prueba/curso.php">Ruta de Formación en .NET</a></li> <hr>
                        <li><a href="#">Ruta de Formación en Automatización</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
            <div class="botones">
                <div id="login-button" class="btn-inicio">
                    <button><a href=""><i class="fa-solid fa-user" id="user"></i></a>Inicio de Sesión</button>
                </div>
                <div class="btn-buscar">
                    <button><i class="fa-solid fa-magnifying-glass" id="glass"></i></button>
                </div>
            </div>


        <div class="texto">
            <h1>Continua tu formación con IzyAcademy</h1>

            <p class="texto1">
                Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos, apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.
            </p>
         </div>
    </header>


    <div class="novedades">
        <h1>Novedades</h1>

        <article class="art1">
            <img src="imagenes/bienvenido.jpg" alt="">
            <h2>Bienvenidos a IzyAcademy</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nemo. Ea minima exercitationem sit ducimus, sed laboriosam eos. Id vel, provident qui nemo placeat veniam illum!</p>
        </article>

        <article class="art2">
            <img src="imagenes/comunidad.jpg" alt="">
            <h2>Generación de comunidad</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nemo. Ea minima exercitationem sit ducimus, sed laboriosam eos. Id vel, provident qui nemo placeat veniam illum!</p>
        </article>

        <article class="art3">
            <img src="imagenes/transferencia.jpg" alt="">
            <h2>Transferencia de conocimiento</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nemo. Ea minima exercitationem sit ducimus, sed laboriosam eos. Id vel, provident qui nemo placeat veniam illum!</p>
        </article>

        <article class="art4">
            <img src="imagenes/insignia.jpeg" alt="">
            <h2>Certificaciones e insignias</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nemo. Ea minima exercitationem sit ducimus, sed laboriosam eos. Id vel, provident qui nemo placeat veniam illum!</p>
        </article>

        <article class="art5">
            <img src="imagenes/conocimiento.jpeg" alt="">
            <h2>Apropiación del conocimiento</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, nemo. Ea minima exercitationem sit ducimus, sed laboriosam eos. Id vel, provident qui nemo placeat veniam illum!</p>
        </article>
    </div>

    <div class="aliados">
        <h2>Aliados</h2>
        <p>Nuestros entrenamientos, procesos formativos y certificaciones cuentan con el respaldo de empresas que confían en nosotros.</p>
        <img src="imagenes/Certiprof.jpg" alt="Logo Certiprof">
        <img src="imagenes/arcitura.png" alt="Logo  Arcitura">
        <img src="imagenes/formarte.png" alt="Logo Formarte">
        <img src="imagenes/credly.jpg" alt="Logo Credly">
        <img src="imagenes/digitalschool.png" alt=" Logo Digital School">
        <img src="imagenes/scrumstudy.jpg" alt="Logo SCRUMtudy">
        <img src="imagenes/intersoftware.jpg" alt="Logo intersoftware">
        <img src="imagenes/brightest.png" alt="Logo brightest">
        <img src="imagenes/sena.png" alt="Logo SENA">
    </div>

    <div class="registrate">
        <img src="imagenes/recepcionista.jpeg" alt="">
        <form action="" autocomplete="off">
            <h3>Regístrate</h3>
            <div class="inputs">
                    
                <label for="nombres" class="grey">Nombre</label>
                <input id="nombres" name="nombres" type="text"  pattern="[a-zA-ZÀ-ÿ\s]+" title="Por favor ingresa solo letras"  required> 
    
    
                <label for="apellidos" class="grey">Apellidos</label> 
                <input id="apellidos" name="apellidos" type="text"  pattern="[a-zA-ZÀ-ÿ\s]+" title="Por favor ingresa solo letras" required>

                <label for="correo" class="grey">Correo electrónico</label>
                <input id="correo" name="correo" type="email"  required>

                <label for="contraseña" class="grey">Contraseña</label>
                <input id="contraseña" name="contraseña" type="password"  required>

                <label for="confirmacion" class="grey">Confirmar contraseña</label>
                <input id="confirmacion" name="confirmacion" type="password"  required>

                <div class="checks">
                    <input type="checkbox" name="" id="" class="check1"> 
                    
                    <p class="grey">Acepto <a href="">términos y condiciones</a></p>

                    <input type="checkbox" name="" id="" class="check2"> 
                    
                    <p class="grey">Acepto <a href="">Política de tratamiento de datos</a></p> 
                </div>

                <input type="submit" value="Registrarse" class="btn-registro" name="registrar"> 
            </div>
        </form>
    </div>
    
    <footer>

        <div class="space">
            
        </div>

        <div class="contacto" >
            <h3>Contáctanos</h3>
            <p><a href="comercial@qvision.us">E-mail : comercial@qvision.us</a></p>
            <p><a href="300 255 02 65">WhatsApp +300 255 02 65</a></p>
            <p class="blue-color">Comunícate con nosotros</p>
        </div>

        <div class="categoria" >
            <h3>Categoría de Cursos</h3>
            <a href=""><p>Desarrollo</p></a>
            <a href=""><p>Metodología de Pruebas</p></a>
            <a href=""><p>Pruebas Funcionales</p></a>
            <a href=""><p>Pruebas No Funcionales</p></a>
            <a href=""><p>DevOps</p></a>
            <a href=""><p>Cloud</p></a>
            <a href=""><p>Automatización</p></a>
            

        </div>

        <div class="certificaciones" >
            <h3>Certificaciones</h3>
            <a href=""><p>Scrum Master</p></a>
            <a href=""><p>Scrum Product Owner</p></a>
            <a href=""><p>Scrum Developer</p></a>
            <a href=""><p>Agile Coach</p></a>
            <a href=""><p>Design Thinking</p></a>
            <a href=""><p>Kanban</p></a>
            <a href=""><p>OKR</p></a>
            <a href=""><p>DevOps</p></a>
                 
        </div>

        <div class="vision" >
            <h3>Q-Vision Technologies</h3>

            <a href=""><p>Desarrollo de Software</p></a>
            <a href=""><p>Aseguramiento de Calidad</p></a>
            <a href=""><p>Automatización de Procesos con RPA</p></a>
            <a href=""><p>Talento TI</p></a>
            <a href=""><p>Gestión Inteligente de Datos</p></a>
            
        </div>

        <div class="soporte" >
            <h3>Soporte</h3>

            <p class="blue-color">Si tienes inconvenientes o dudas, contáctanos al correo</p>
            <p><a href="izyacademy@qvision.us">izyacademy@qvision.us</a></p>

        </div>

        <div class="imagen">
            <img src="imagenes/izy_negativo.png" alt="">
        </div>

        <div class="terminos" >


            <a href="">Términos y Condiciones -</a>
            <a href="">Política Tratamiento de Datos</a>
        </div>

        <div class="redes" >
            <a href="https://www.facebook.com/izyacademy" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="https://twitter.com/izy_academy" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>

            <a href="https://www.instagram.com/izy_academy/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/izy-academy" target="_blank">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>

        <div class="copy">
            Copyright &copy;  2024 IzyAcademy Marca Registrada By Qvision Technologies.
        </div>
    </footer>
</body>

</html>