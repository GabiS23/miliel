@extends('principal.visita.layout_visita')

@section('content')
<style>
.card{
  border: 0px solid !important;
  /* border: 1px solid rgba(0,0,0,.125); */
  padding:5px;
  background-color: rgba(255, 255, 255, 0) !important;
}
input{
    font-family: 'Open Sans', sans-serif !important;
    font-size: 13px !important;
    font-weight: normal !important;
    color:#fff !important;
}
.btn{
    font-weight: bold !important;
}
</style>
<br>
<section class="section fondo_componente" style="padding:0;
  margin:0;background-color:#EC733B">
    <div class="container">
        <!-- <img src="./visita/imagen_empresa/equipo/1Fgrupal.jpg" class=" card-img-top" alt="mente digital" style=""> -->
        <br><br>
        <div class="row" style="padding:0;margin:0;">
            <div class="col-sm-12 col-md-12 col-lg-12"style="padding:0;margin:0;">
                <div class="izquierda">
                    <div class="contenido-iz" style="text-align:center;">
                        <br><br><br>
                        <h1>TIENDA DE CORTINAS  Y CONFECCIÓN A MEDIDA</h1>
                        <p>15 años a tu servicio</p>
                        <p>Decora, transforma y revive!..</p>
                        <br>
                        <a href="" target="_blank"><button type="button" class="btn btn-default boton_personalizado" style="font-family: 'Open Sans', sans-serif;font-size: 13px !important;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" >Ver catálogo</button></a>

                    </div>
                </div>
                
            </div>
            
        </div>
        <br><br>
    </div>
    <div class="slide" >
        <img src="./visita/imagen_empresa/logos/slidePrincipal.jpg" alt="" style="padding:0;
        margin:0;
        
        background-repeat: no-repeat;
        width:100%;">
    </div>
</section>
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <div class="frace">
                    <h2><b style="color:#EB5D1C;">TRANSFORMAMOS TU HOGAR, EN UN MEJOR LUGAR</b></h2>
                    <p style="color:#000;">Con lo último en tendencias, novedades en diseño y telas decoramos todo tipo de ambientes</p>
                    <br>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./visita/imagen_empresa/slide/Imagen1.svg" class="d-block w-100" alt="mentedigital Bolivia">
                        </div>
                        <div class="carousel-item">
                        <img src="./visita/imagen_empresa/slide/Imagen2.svg" class="d-block w-100" alt="mentedigital Bolivia">
                        </div>
                        <div class="carousel-item">
                        <img src="./visita/imagen_empresa/slide/Imagen3.svg" class="d-block w-100" alt="mentedigital Bolivia">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<br><br><br>

<section class="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="servicio-catalogo">
                    <br><br>
                    <h2><b style="color:#EB5D1C;">NUESTROS SERVICIOS</b></h2>
                    <p style="color:#000">Realizamos cotizaciones en linea e instalación a domicilio</p>
                    <br><br>
                    <!-- servicio-catalogo -->
                    
                    <div class="seccion-productos">
            
                        <div class="row">
                           
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/wwxf3o">
                                    <img src="./visita/imagen_empresa/servicios/imagen1.svg" class=" card-img-top" alt="cortinas santa cruz">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/a5joqd">    
                                    <img src="./visita/imagen_empresa/servicios/imagen2.svg" class=" card-img-top" alt="Confeccion de cortinas a medida en santa cruz">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/in4hll">    
                                    <img src="./visita/imagen_empresa/servicios/imagen3.svg" class=" card-img-top" alt="cortinas en santa cruz">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/s93liu">    
                                    <img src="./visita/imagen_empresa/servicios/imagen4.svg" class=" card-img-top" alt="Confeccion de cortinas a medida en santa cruz">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                           
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/exil2y" >
                                    <img src="./visita/imagen_empresa/servicios/imagen5.svg" class=" card-img-top" alt="cortinas santa cruz">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/90hacx">    
                                    <img src="./visita/imagen_empresa/servicios/imagen6.svg" class=" card-img-top" alt="Confeccion de cortinas a medida en santa cruz">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/olj9ns">    
                                    <img src="./visita/imagen_empresa/servicios/imagen7.svg" class=" card-img-top" alt="cortinas en santa cruz">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-3">         
                                <div class="card">
                                    <a href="https://wa.link/cbrjzp">    
                                    <img src="./visita/imagen_empresa/servicios/imagen8.svg" class=" card-img-top" alt="Confeccion de cortinas a medida en santa cruz">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- fin servicio catalogo -->
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Contacto -->
                <div class="seccion-productos">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                                <div class="formulario-contacto">
                                    <h2><b style="color:#EB5D1C;">CONTACTO</b></h2>
                                    <p style="color:#000">Nos encantaría escucharte y saber lo que necesitas</p>
                                    <br>
                                    <img src="./visita/imagen_empresa/logos/logomiliel.png" height=80 class="" alt="logo mente digital">
                                 
                                    <div class="form-contenido thumbnail">
                                        <form action="mailto:miliel.dcc.7@gmail.com" method="post" enctype="text/plain">
                                            <div class="form-group">
                                                <input type="text" name="Nombre" class="form-input form-control" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Correo" class="form-input form-control" placeholder="E-mail">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="Celular" class="form-input form-control" placeholder="Celular">
                                            </div>
                                    
                                            <input type="submit" value="Enviar"  class="btn btn-primary" style="border-radius: 4px;background-color:#EC733B;border-color:#EC733B;padding: 10px 10px 10px 10px;margin: 10px 0px 0px 0px;width:100%">
                                            <input type="reset" value="Reset" class="btn btn-primary" style="border-radius: 4px;background-color:#EC733B;border-color:#EC733B;padding: 10px 10px 10px 10px;margin: 10px 0px 0px 0px;width:100%">
                                        </form>
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">         
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- fin contacto -->
            </div>
        </div>
    </div>
</section>
@stop