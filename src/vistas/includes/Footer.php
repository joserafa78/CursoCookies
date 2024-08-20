<?php

declare(strict_types=1);
//_____________NOMBRE DE ESPACIO____________________
namespace App\vistas\includes;
//_____________________________________


class  Footer
{


    //METODOS<
    public function __construct()
    {

        if (!isset($_SESSION['mostrar'])) { //Chekea que Variable Este Definida
            $_SESSION['mostrar'] = "todo";  //Sino la Crea.
        }

?>
        </div> <!--Cierre  de Caja main-containeer -->
        <!-- Inicia codigo footer -->
        <!-- https://www.youtube.com/watch?v=xLAfkWoonSQ&ab_channel=CodingHelp -->
        <footer class="footer">
            <ul class="social-icon">
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </a>
                </li>
            </ul>
            <ul class="menu">
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Inicio </a>
                </li>
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Equipo </a>
                </li>
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Contacto </a>
                </li>
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Video </a>
                </li>
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Sobre Nosotros </a>
                </li>
            </ul>
            <p class="text">@josera78</p>
            <p class="text">@2024 | Todos los derechos reservados</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


        </body>

        </html>

<?php
    }
};
?>