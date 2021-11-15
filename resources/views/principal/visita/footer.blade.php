<style>
    .footer {
        width: 100%;
        padding: 0px 0px;
        background-color: #EC733B;
        color: #fff;
        font-family: 'Open Sans', sans-serif !important;
    font-size: 13px !important;
    font-weight: normal !important;
    
    }

    .container_footer {
        display: flex;
        /*separar en columnas */
        flex-wrap: wrap;
        /*se pongan una debajo de otra*/
        justify-content: space-between;
        /*espacio completo*/
        /* max-width: 1250px; */
        margin: auto;
        margin-top: 5px;
        /*espacio de arriba*/
    }

    .logo_footer {
        position: static !important;
        width: 100%;
        text-align: center;
        /* margin-top:0px; */
    }

    .box_footer1 {
        display: flex;
        /*para que los elementos se pongan uno ensima de otro*/
        flex-direction: column;
        padding: 50px 20px 20px 20px;
    }
    .box_footer {
        widht:190px;
        display: flex;
        /*para que los elementos se pongan uno ensima de otro*/
        flex-direction: column;
        padding: 20px 20px 20px 20px;
    }

    .box_footer .logo img {
        width: 150px;
        
    }

    .box_footer .terms {
        max-width: 350px;
        margin-top: 20px;

        color: #ffffff;
        /* font-size: px; */
    }

    i.fas {
        display: inline-block;
        border-radius: 60px;

        box-shadow: 0px 0px 2px #fff;
        padding: 0.1em 0.2em;
    }

    .box_footer a:hover {
        color: rgb(231, 231, 231);
    }

    .box_footer a .fa {
        font-size: 25px;
        display: inline;
    }

    .box_copyright {
        max-width: 1200px;
        margin: auto;
        text-align: center;
        padding: 0px 10px;
        font-size: 12px;
    }
    *, ::after, ::before {
    box-sizing: border-left;
    }
    .box_copyright p {
        margin-top: 0px;
        margin-bottom: 20px;
        color: #7a7a7a !important;
        font-size: 10px;
    }

    .box_copyright hr {
        border: none;
    }


    .img-footer {
        height: 50px;
        padding: 2px;
    }

    .inline {
        align-items: inline;
    }
    @media only screen and (max-width: 595px) {
        .logo_footer {
        position: static !important;
        width: 100%;
        text-align: left;
        /* margin-top:0px; */
        }
    }
    .icono-socia1{
        color: #fff;
        text-decoration:none;
    }
    
</style>

<div class="footer">
    <div class="container">
    <div class="container_footer">
        <div class=" box_footer1 logo_footer">
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                    <img src="./visita/imagen_empresa/logos/logoB.svg" alt="..." height="60" class="imgzoom p-mr-2 ng-star-inserted">
                    
                    </div>
                </div>
               
            </div>

        </div>
        <div class="box_footer">
            <h3>SOBRE NOSOTROS</h3>
            <p>
                Durante los 15 años
                <br>
                a tu servicio, aprendimos
                <br>
                diferentes formas de  
                <br>
                perfeccionar la costura.
                
            </p>
        </div>
        <div class="box_footer">
            <h3>NUESTRAS REDES SOCIALES </h3>
            <div class="inline">
            <a href="https://www.facebook.com/cortinasmiliel" class="icono-socia1"><i class="icono-social1 fab fa-facebook-square"></i>&nbsp;&nbsp; Cortinas Miliel</a><br>
            <a href="https://www.instagram.com/cortinasmiliel/" class="icono-socia1"><i class="icono-social1 fab fa-instagram"></i>&nbsp;&nbsp; Cortinas Miliel</a><br>
            <a href="https://www.tiktok.com/search?q=cortinasmiliel&t=1636950255203" class="icono-socia1"><i class="icono-social1 fab fa-tiktok"></i>&nbsp;&nbsp; Cortinas Miliel</a><br>
            <a href="https://api.whatsapp.com/send?phone=+59178494047" class="icono-socia1"><i class="icono-social1 fab fa-whatsapp"></i>&nbsp;&nbsp; +591 76505765</a><br>
            <a href="mailto:miliel.dcc.7@gmail.com" class="icono-socia1"><i class="icono-social1 far fa-envelope"></i>&nbsp;&nbsp; miliel.dcc.7@gmail.com</a>
          </div>
        </div>
        <div class="box_footer">
            <h3>VISÍTANOS</h3>
            <h4>Dirección</h4>
            <p>La RAMADA calle saipuru <br>
             Santa Cruz de la Sierra, Bolivia 
            <br> AV Cañoto frente a la parada de paititi</p>
            
        </div>
    </div>
    <div class="box_copyright">
        <hr>
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        
                        &copy;
                        CORTINAS MILIEL
                        <script>document.write(new Date().getFullYear());</script>
                        <!-- Madakmusic - Cochabamba-Bolivia<a href="#" style="color: #fff;"></a> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <br><br>
    </div>
    </div>
</div>
