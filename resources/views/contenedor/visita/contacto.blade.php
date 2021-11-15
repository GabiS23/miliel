@extends('principal.visita.layout_visita')

@section('content')
<style>
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
<br><br><br>
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
                                    <p style="color:#000">Atención de lunes a sábado</p>
                                    <p style="color:#000">Regístrate en nuestro formulario para reservar una cita </p>
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