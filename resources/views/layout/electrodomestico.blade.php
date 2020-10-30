<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page - Electrodomesticos</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="  sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </head>
<body id="page-top">
        <!-- barrita de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand font-weight-bold text-white js-scroll-trigger" href="#page-top">ELECTRODOMESTICOS</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <button type="button" class="btn btn-info">
                        <li class="nav-item"><a class="nav-link font-weight-bold js-scroll-trigger" href="/">Inicio </a></li></buttom>
                        <button type="button" class="btn btn-success">
                        <li class="nav-item"><a class="nav-link font-weight-bold js-scroll-trigger" href="/electronica">ELECTRONICA</a></li></buttom>
                        <button type="button" class="btn btn-warning">
                        <li class="nav-item"><a class="nav-link font-weight-bold js-scroll-trigger" href="/ropa">ROPA</a></li></buttom>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">.</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                    <h2><p class="text-white-75 font-weight-bold mt-0">Linea Blanca Y Electrodomésticos</p></h2>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- Acerca de? (info de la persona)-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="row justify-content-center">                  
                    <div class="col-lg-8 text-center">
                      <img src="{{asset ('images/lavadora.jpg')}}" alt="" width="150">
                      <img src="{{asset ('images/combo.jpg')}}" alt="" width="150">
                      <img src="{{asset ('images/refri.jpg')}}" alt="" width="150">

                        <h3><table><tr> Cajero</tr></table></h3>
                        <table  class="table table-striped table-sm">

                            <tr>
                                <td  ALIGN=CENTER > <h4>Producto </h4> </td>
                                <td  ALIGN=CENTER > <h4>Precio </h4></td>
                                <td  ALIGN=CENTER > <h4>Cantidad a comprar </h4></td>
                            </tr>
                            <tr>
                                <td  ALIGN=CENTER >Lavadora Automática de Carga Superior 19 Kg Blanca</td>
                                <td  ALIGN=CENTER >$8,139.00</td>
                                <td  ALIGN=CENTER>
                                    <input id="p1" type="number" name="p1"min="0" max="100" value="0">
                                </td>
                            </tr>
                            <tr>
                                <td  ALIGN=CENTER >Combo Refrigerador + Lavadora + Microondas Winia PLATA</td>
                                <td  ALIGN=CENTER >$21,372.00</td>
                                <td  ALIGN=CENTER>
                                    <input id="p2" type="number" name="p1"min="0" max="50" value="0">
                                </td>
                            </tr>
                            <tr>
                                <td  ALIGN=CENTER >Refrigerador 14 Pies Mabe Con Despachador Silver</td>
                                <td  ALIGN=CENTER >$8,990.00</td>
                                <td  ALIGN=CENTER>
                                    <input id="p3" type="number" name="p1"min="0" max="100" value="0">
                                </td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-success">
                        <p><a type="submit" class="button nav-link text-white js-scroll-trigger" onclick="login()">
                        Total de la compra de productos</a></p></button>
                        <script>
                        //en este apartado optenemos los datos selecionados y se hacen dos operaciones la multiplicacion y la suma de estos para obtener el total
                            function login(){
                                var p1 = document.getElementById('p1').value;
                                var t1 = p1 * 8139;
                                var p2 = document.getElementById('p2').value;
                                var t2 = p2 * 21372;
                                var p3 = document.getElementById('p3').value;
                                var t3 = p3 * 8990;
                                var total = t1 + t2 + t3 ;
                                    //en esta parte se generara como una alerta al darle al boton Total
                                    alert("Total de la compra de productos: " +total);
                                }
                        </script>

                        <!--div class="bg-info clearfix">
                          <button type="button" class="btn btn-secondary float-left">Apellido Paterno</button>
                          <button type="button" class="btn btn-secondary float-right">Apellido Materno</button>
                        </div-->
                    </div>
                </div>
            </div>
        </section>
        <br>
        <!-- mi contacto tanto mni numero de telefono como mi correo institucional-->
        <section class="page-section bg-dark text-white" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contactos!</h2>
                        <p class="text-muted mb-5"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <p class="text-white-75 mb-4">Numero Telefonico</p>
                        <div>(961) 109 09 03</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <p class="text-white-75 mb-4">Correo</p>
                        <a class="d-block" href="mailto:contact@yourwebsite.com">serfave9725@hotmail.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- En este caso agrege mi sello -->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Flores Velasco Sergio Fabian</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>