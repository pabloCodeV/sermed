<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="images/lhspy.png">
  <title>Planes SERMED</title>
</head>
<body id="body">
  <!-- header / nav -->
<header>
  <div class="show-hamburguer-btn">
    <a style="align-self: center;" href="http://hospitalsiriolibanes.com.py/"><img src="images/logohslpy.png" alt=""></a>
    <div class="hamburguer-btn" onclick="btnShow()">
      <img id="open"  src="images/hbtn.png" alt="">
      <img id="close" class="open" src="images/cbtn.png" alt="" >
    </div>
  </div>
  <nav id="navh" class="nav not-show">
    <ul>
      <li><a href="http://hospitalsiriolibanes.com.py/">Menu</a></li>
      <li id="btn-contacto-asesor"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta"">Contactar con un asesor</a></li>
      <li id="btn-planes-sermed"><a href="#planes">Planes SERMED</a></li>
    </ul>
  </nav>
</header>

<!-- banner -->
<section class="bannersermed">
  <img src="images/bannersermedpy.jpg" alt="">
</section>

<!-- formulario -->
<section class="prin-sec" id="formulario">
  <h1 class="banner">Quiero asociarme</h1>
  <p class="sub-text">Completá el formulario y seleccioná el medio para ser contactado por nuestros asesores.</br>
    Hace Click aquí y <a href="#planes">Encontra tu plan ideal</a>
    <!-- <div class="btn-plan" ></div> -->
  </p>
  <div class="sect-form-and-data">
    <form id='form'>
      <div class='inp-camp'>
        <input type="text" placeholder="Nombre completo" id="nombre" class="inp-text">
        <input type="text" placeholder="Email" id="correo" class="inp-text">
        <input type="text" placeholder="Telefono" id="telefono" class="inp-text">
        <input type="text" placeholder="localidad" id="localidad" class="inp-text">
      </div>
      <div class="wc">
      </br> 
        <label>Como quiere ser contactado?</label>
        <div>
          </br> 
          <input type="radio" name="contacto" id="contacto" value="WhatsApp">
          <label>WhatsApp</label>
        </div>
        </br> 
        <div>
          <input type="radio" name="contacto" id="contacto" value="Telefono">
          <label>Telefono</label>
        </div>
      </div>
      </br>
      <div>
       <textarea id="txtarea" name="mensaje"></textarea>
      </div>
      <div id="respuesta"></div>
      <button type="button" class="btn-submit" onclick="enviar()">Enviar</button>
    </form>
    <!-- <div  class="sect-div">
      <div>
        <h2>CONTACTENOS TELEFONICAMENTE</h2>
        <p>(+595 21) 498 - 695</p>
        <h2>TURNOS Y CONSULTAS POR WHATSAPP</h2>
        <p>+54 9 11 5893 - 4003</p>
        <h2>NUMERO PARA ASOCIARSE</h2>
        <p>+595 97622 - 3966</p>
      </div>
    </div> -->
  </div>
  
</section>

<section  class="section-plan">
  <div>
    <h1 id="planes">Elegí tu Plan</h1>
    <p class="text-planes">Con beneficios del Hospital Sirio Libanés de Paraguay</p>
  </div>
  <!-- Cuadro de planes -->
  <div class="planes-show">
    <div class="gradiant">

    <h2 id="pnip" onClick="pnip_show()">Plan Nacional SUPERIOR CENTRAL Individual</h2>
      <div id="pnip-show" class="disabled">
        <h2 class="beneficios">Beneficios a partir de:</h2>
        <div class="margin-properties">
          <h2 class="properties">48 Horas</h2>
            <ul>
              <li><img class="vineta" src="css/th.png" alt="">Consultas – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Análisis Laboratoriales Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Servicio de Urgencias</li>
            </ul>
        </div>
        <div class="margin-properties">
          <h2 class="properties">90 Días</h2>
            <ul>
              <li><img class="vineta" src="css/th.png" alt="">Internaciones clínicas</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios Laboratoriales Especializados </li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Especializados</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios Ecograficos</li>
              <li><img class="vineta" src="css/th.png" alt="">Tomografía Computarizada </li>
              <li><img class="vineta" src="css/th.png" alt="">Unidad de terapia intensiva (U.T.I)</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos y Tratamiento Especializados</li>
              <li><img class="vineta" src="css/th.png" alt="">Cobertura en accidente de tránsito</li>
            </ul>
        </div>
        <div class="margin-properties">
          <h2 class="properties">150 Días</h2>
            <ul>
              <li><img class="vineta" src="css/th.png" alt="">Cirugía mayor</li>
            </ul>
        </div>
        <div class="margin-properties">
          <h2 class="properties">180 Días</h2>
            <ul>
              <li><img class="vineta" src="css/th.png" alt="">Servicios Odontológicos 24/Año.</li>
            </ul>
        </div>
        <button type="button" class="saber-mas" onclick="plan1show()">Quiero saber mas sobre este plan</button>
      <div class="infwpp"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta">Tambien podes contactarnos por WhatsApp</a></div>      
    </div>

<div class="margin-across-propertis"></div>

    <h2 id="pnfp" onClick="pnfp_show()">Plan Nacional SUPERIOR CENTRAL Familiar</h2>
      <div id="pnfp-show" class="disabled">
      <h2 class="beneficios">Beneficios a partir de:</h2>
        <div class="margin-properties">
            <h2 class="properties">48 Horas</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Consultas</li>
                <li><img class="vineta" src="css/th.png" alt="">Análisis Laboratoriales Simples</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Simples</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos Simples</li>
                <li><img class="vineta" src="css/th.png" alt="">Ecografías</li>
                <li><img class="vineta" src="css/th.png" alt="">Servicios en Urgencias</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">90 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Internaciones clínicas</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Laboratoriales Especializados </li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Ecograficos</li>
                <li><img class="vineta" src="css/th.png" alt="">Tomografía Computarizada </li>
                <li><img class="vineta" src="css/th.png" alt="">Unidad de terapia intensiva (U.T.I)</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos y Tratamiento Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">Cobertura en accidente de tránsito</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">150 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Cirugía Médica</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">180 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Resonancias Magnéticas 2/Año</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">300 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Parto normal y/o cesárea</li>
              </ul>
          </div>
          <button type="button" class="saber-mas" onclick="plan2show()">Quiero saber mas sobre este plan</button>
        <div class="infwpp"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta"">Tambien podes contactarnos por WhatsApp</a></div>
      </div>

<div class="margin-across-propertis"></div>

    <h2 id="pniv" onClick="pniv_show()">Plan Nacional Individual VIP</h2>
      <div id="pniv-show" class="disabled">
        <div class="margin-properties">
        <h2 class="properties">48 Horas</h2>
            <ul>
              <li><img class="vineta" src="css/th.png" alt="">Consultas – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Análisis Laboratoriales Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Medicamentos en Urgencias</li>
            </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">30 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Laboratoriales Especializados – Sin Límites</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">Tomografía Computarizada – 2 TAC Multislice  - 2 TAC de Punción</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos y Tratamiento Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">30 Sesiones de Fisioterapias</li>
                <li><img class="vineta" src="css/th.png" alt="">Ecografías - Sin límite</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">60 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">45 días de Internaciones Clínicas al Año</li>
                <li><img class="vineta" src="css/th.png" alt="">Cobertura en accidente de tránsito</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">90 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">20 Días de Internación en UTI</li>
                <li><img class="vineta" src="css/th.png" alt="">Cirugía Media</li>
                <li><img class="vineta" src="css/th.png" alt="">Resonancias Magnéticas 2/Año</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">150 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Cirugía mayor</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">180 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Servicios Odontológicos 24 / Año.</li>
                <li><img class="vineta" src="css/th.png" alt="">Servicio de sepelio</li>
              </ul>
          </div>
          <button type="button" class="saber-mas" onclick="plan3show()">Quiero saber mas sobre este plan</button>
        <div class="infwpp"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta"">Tambien podes contactarnos por WhatsApp</a></div>
      </div>

<div class="margin-across-propertis"></div>    

    <h2 id="pnfv" onClick="pnfv_show()">Plan Nacional Familiar VIP</h2>
      <div id="pnfv-show" class="disabled">
        <div class="margin-properties">
          <h2 class="properties">48 Horas</h2>
            <ul>
              <li><img class="vineta" src="css/th.png" alt="">Consultas – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Análisis Laboratoriales Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos Simples – Sin Límites</li>
              <li><img class="vineta" src="css/th.png" alt="">Servicios en Urgencias</li>
              <li><img class="vineta" src="css/th.png" alt="">Servicio de Ambulancia</li>
              <li><img class="vineta" src="css/th.png" alt="">Medicamentos en Urgencias</li>
              <li><img class="vineta" src="css/th.png" alt="">Servicio por Arancel Preferencial</li>
            </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">30 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Laboratoriales Especializados – Sin Límites</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">Tomografía Computarizada – 2 TAC Multislice  - 2 TAC de Punción</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos y Tratamiento Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">30 Sesiones de Fisioterapias</li>
                <li><img class="vineta" src="css/th.png" alt="">Ecografías</li>
                <li><img class="vineta" src="css/th.png" alt="">Ecografía Morfológica 2 x año</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">60 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">45 días de Internaciones Clínicas al Año</li>
                <li><img class="vineta" src="css/th.png" alt="">Cobertura en accidente de tránsito</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">90 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">20 Días de Internación en UTI</li>
                <li><img class="vineta" src="css/th.png" alt="">Cirugía Media</li>
                <li><img class="vineta" src="css/th.png" alt="">Resonancias Magnéticas 2/Año</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">150 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Cirugía mayor</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">180 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Servicios Odontológicos 24 / Año.</li>
                <li><img class="vineta" src="css/th.png" alt="">Servicio de sepelio</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">300 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Parto normal y/o cesárea</li>
              </ul>
          </div>
          <button type="button" class="saber-mas" onclick="plan4show()">Quiero saber mas sobre este plan</button>
        <div class="infwpp"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta"">Tambien podes contactarnos por WhatsApp</a></div>
      </div>
      <div class="margin-across-propertis"></div>

    <h2 id="pnp" onClick="pnp_show()">Plan Nacional PREMIUM</h2>
      <div id="pnp-show" class="disabled">
      <h2 class="beneficios">Beneficios a partir de:</h2>
        <div class="margin-properties">
            <h2 class="properties">48 Horas</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Consultas</li>
                <li><img class="vineta" src="css/th.png" alt="">Análisis Laboratoriales Simples</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Simples</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos Simples</li>
                <li><img class="vineta" src="css/th.png" alt="">Ecografías</li>
                <li><img class="vineta" src="css/th.png" alt="">Servicios en Urgencias</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">90 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Internaciones clínicas</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Laboratoriales Especializados </li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Radiológicos Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios Ecograficos</li>
                <li><img class="vineta" src="css/th.png" alt="">Tomografía Computarizada </li>
                <li><img class="vineta" src="css/th.png" alt="">Unidad de terapia intensiva (U.T.I)</li>
                <li><img class="vineta" src="css/th.png" alt="">Estudios para Diagnósticos y Tratamiento Especializados</li>
                <li><img class="vineta" src="css/th.png" alt="">Cobertura en accidente de tránsito</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">150 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Cirugía Médica</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">180 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Resonancias Magnéticas 2/Año</li>
              </ul>
          </div>
          <div class="margin-properties">
            <h2 class="properties">300 Días</h2>
              <ul>
                <li><img class="vineta" src="css/th.png" alt="">Parto normal y/o cesárea</li>
              </ul>
          </div>
          <button type="button" class="saber-mas" onclick="plan5show()">Quiero saber mas sobre este plan</button>
        <div class="infwpp"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta"">Tambien podes contactarnos por WhatsApp</a></div>
      </div>


    </div>
  </div>
</section>

<footer class="fbg">
  <div class="fd">
    <div>
     <ul>
       <li><a href="#planes">Planes</a></li>
       <li><a href="#formulario">Asociarse</a></li>
       <li><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=5959922900206&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta">Administracion</a></li>
     </ul>
    </div>
    <div>
     <ul>
       <li><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta">WhatsApp</a></li>
       <li><a href="https://www.facebook.com/hospitalsiriolibanespy/">Facebook</a></li>
       <li><a href="https://www.instagram.com/hospitalsiriolibanes_py/">Instagram</a></li>
     </ul>
    </div>
    <div class="fdfix">
      <h2>Administración</h2>
     <ul>
        <img id="cl" src="images/cl.png" alt="">
       <li id="clcorreo"><a href="mailto:secretaria-asuncion@hospitalsiriolibanes.org">secretaria-asuncion@
        hospitalsiriolibanes.org</a></li>
     </ul>
    </div>
    <div class="fdfix">
      <h2>Contactar con un asesor</h2>
     <ul>
        <img id="lw" src="images/wl.png" alt="">
       <li id="lwpp"><a href="https://api.whatsapp.com/send?phone=34123456789https://api.whatsapp.com/send?phone=595976223966&text=Bienvenido%20al%20Hospital%20Sirio%20Liban%C3%A9s,%20escribanos%20su%20consulta">(+595) 976223966</a></li>
     </ul>
    </div>
  </div>
  <p class="copy">© Copyright 2023 Hopital Sirio Libanés - Todos los derechos reservados</p>
 
</footer>

<script>
document.getElementById('txtarea').innerHTML = "Hola. Quiero asociarme."
  function pnip_show(){
    if(document.getElementById('pnip-show').classList.value == "disabled"){
      document.getElementById('pnip').style.background = "#1C8AF8";
      document.getElementById('pnip').style.color = "white";      
      document.getElementById('pnip-show').classList.remove('disabled')
            // colores
            document.getElementById('pnfp').style.background = null;
            document.getElementById('pnfp').style.color = null; 

            document.getElementById('pnp').style.background = null;
            document.getElementById('pnp').style.color = null;

            document.getElementById('pnfv').style.background = null;
            document.getElementById('pnfv').style.color = null; 

            document.getElementById('pniv').style.background = null;
            document.getElementById('pniv').style.color = null; 
            //fin colores
    }else{
      document.getElementById('pnip-show').classList.add('disabled')
      document.getElementById('pnip').style.background = null;
      document.getElementById('pnip').style.color = null; 
    }
      document.getElementById('pnfp-show').classList.add('disabled')
      document.getElementById('pniv-show').classList.add('disabled')
      document.getElementById('pnfv-show').classList.add('disabled')
      document.getElementById('pnp-show').classList.add('disabled')
  }
  function pnfp_show(){
    document.getElementById('pnip-show').classList.add('disabled')
    if(document.getElementById('pnfp-show').classList.value == "disabled"){
      document.getElementById('pnfp').style.background = "#1C8AF8";
      document.getElementById('pnfp').style.color = "white";      
      document.getElementById('pnfp-show').classList.remove('disabled')
            // colores
            document.getElementById('pnip').style.background = null;
            document.getElementById('pnip').style.color = null; 

            document.getElementById('pnp').style.background = null;
            document.getElementById('pnp').style.color = null;

            document.getElementById('pnfv').style.background = null;
            document.getElementById('pnfv').style.color = null; 

            document.getElementById('pniv').style.background = null;
            document.getElementById('pniv').style.color = null; 
            //fin colores

    }else{
      document.getElementById('pnfp').style.background = null;
      document.getElementById('pnfp').style.color = null; 
      document.getElementById('pnfp-show').classList.add('disabled')
    }
      document.getElementById('pniv-show').classList.add('disabled')
      document.getElementById('pnfv-show').classList.add('disabled')
      document.getElementById('pnp-show').classList.add('disabled')
  }
  function pniv_show(){
    document.getElementById('pnip-show').classList.add('disabled')
    document.getElementById('pnfp-show').classList.add('disabled')
    if(document.getElementById('pniv-show').classList.value == "disabled"){
      document.getElementById('pniv').style.background = "#1C8AF8";
      document.getElementById('pniv').style.color = "white";  
      document.getElementById('pniv-show').classList.remove('disabled')
            // colores
            document.getElementById('pnip').style.background = null;
            document.getElementById('pnip').style.color = null; 

            document.getElementById('pnp').style.background = null;
            document.getElementById('pnp').style.color = null;

            document.getElementById('pnfv').style.background = null;
            document.getElementById('pnfv').style.color = null; 

            document.getElementById('pnfp').style.background = null;
            document.getElementById('pnfp').style.color = null; 
            //fin colores
    }else{
      document.getElementById('pniv').style.background = null;
      document.getElementById('pniv').style.color = null; 
      document.getElementById('pniv-show').classList.add('disabled')
    }
    document.getElementById('pnfv-show').classList.add('disabled')
    document.getElementById('pnp-show').classList.add('disabled')
  }
  function pnfv_show(){
    document.getElementById('pnip-show').classList.add('disabled')
    document.getElementById('pnfp-show').classList.add('disabled')
    document.getElementById('pniv-show').classList.add('disabled')
    document.getElementById('pnp-show').classList.add('disabled')
    if(document.getElementById('pnfv-show').classList.value == "disabled"){
      document.getElementById('pnfv').style.background = "#1C8AF8";
      document.getElementById('pnfv').style.color = "white";  
      document.getElementById('pnfv-show').classList.remove('disabled')
      // colores
      document.getElementById('pnip').style.background = null;
      document.getElementById('pnip').style.color = null; 

      document.getElementById('pniv').style.background = null;
      document.getElementById('pniv').style.color = null;

      document.getElementById('pnfp').style.background = null;
      document.getElementById('pnfp').style.color = null; 

      document.getElementById('pnp').style.background = null;
      document.getElementById('pnp').style.color = null; 
      //fin colores
    }else{
      document.getElementById('pnfv-show').classList.add('disabled')
      document.getElementById('pnfv').style.background = null;
      document.getElementById('pnfv').style.color = null; 
    }
  }

  function pnp_show(){
    document.getElementById('pnip-show').classList.add('disabled')
    document.getElementById('pnfp-show').classList.add('disabled')
    document.getElementById('pniv-show').classList.add('disabled')
    document.getElementById('pnfv-show').classList.add('disabled')
    if(document.getElementById('pnp-show').classList.value == "disabled"){
      document.getElementById('pnp').style.background = "#1C8AF8";
      document.getElementById('pnp').style.color = "white";  
      document.getElementById('pnp-show').classList.remove('disabled')
            // colores
            document.getElementById('pnip').style.background = null;
            document.getElementById('pnip').style.color = null; 

            document.getElementById('pniv').style.background = null;
            document.getElementById('pniv').style.color = null;

            document.getElementById('pnfv').style.background = null;
            document.getElementById('pnfv').style.color = null; 

            document.getElementById('pnfp').style.background = null;
            document.getElementById('pnfp').style.color = null; 
            //fin colores
    }else{
      document.getElementById('pnp-show').classList.add('disabled')
      document.getElementById('pnp').style.background = null;
      document.getElementById('pnp').style.color = null; 
    }
  }


  function enviar(){

  const prod="http://hospitalsiriolibanes.com.py/sermed/api/formulario/";

  var nombre = document.getElementById("nombre").value
  var correo = document.getElementById("correo").value
  var telefono = document.getElementById("telefono").value
  var localidad = document.getElementById("localidad").value
  var contacto = document.querySelector('input[name=contacto]:checked').value
  var mensaje = document.getElementById("txtarea").value
  const requestOptions = {
   
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      nombre:nombre,
      correo:correo,
      telefono:telefono,
      localidad:localidad,
      contacto:contacto,
      mensaje:mensaje,
    })
  };
fetch(prod, requestOptions)
    .then(response => response.json())
    document.getElementById("respuesta").style = `
        background: #c7e6c7;
        border-radius: 5px;
        width: 574px;
        padding: 1px;
        position: relative;
        top: 10px;
        color: #016701;`
        
        document.getElementById("respuesta").innerHTML = "<p style='font-size: 20px;line-height: 32px;text-align: center;'>Recibimos su mensaje correctamente. </br>En breve nos pondremos en contacto.</p>";
        var nombre = document.getElementById("nombre").value = ''
        var apellido = document.getElementById("correo").value= ''
        var telefono = document.getElementById("telefono").value= ''
        var correo = document.getElementById("localidad").value= ''
        var secundario = document.getElementById("contacto").value= ''
}

function plan1show(){
  document.getElementById('txtarea').value = "Hola. Quiero saber mas sobre el ''Plan Nacional SUPERIOR CENTRAL Individual.''"
  window.scroll({
  top: 400,
  left: 0,
  behavior: 'smooth'
  });
}
function plan2show(){
  document.getElementById('txtarea').value = "Hola. Quiero saber mas sobre el ''Plan Nacional SUPERIOR CENTRAL Familiar.''"
  window.scroll({
  top: 400,
  left: 0,
  behavior: 'smooth'
  });
}
function plan3show(){
  document.getElementById('txtarea').value = "Hola. Quiero saber mas sobre el ''Plan Nacional Individual VIP.''"
  window.scroll({
  top: 400,
  left: 0,
  behavior: 'smooth'
  });
}
function plan4show(){
  document.getElementById('txtarea').value = "Hola. Quiero saber mas sobre el ''Plan Nacional Familiar VIP.''"
  window.scroll({
  top: 400,
  left: 0,
  behavior: 'smooth'
  });
}
function plan5show(){
  document.getElementById('txtarea').value = "Hola. Quiero saber mas sobre el ''Plan Nacional PREMIUM.''"
  window.scroll({
  top: 400,
  left: 0,
  behavior: 'smooth'
  });
}

function btnShow(){
  console.log(document.getElementById('navh').classList[1])
  if(document.getElementById('navh').classList[1] == 'not-show'){
    document.getElementById('navh').classList.remove('not-show')
    document.getElementById('navh').classList.add('nav-show')
    document.getElementById('open').classList.add('open')
    document.getElementById('close').classList.remove('open')
    document.getElementById('body').style.overflow = "hidden"
  }else{
    document.getElementById('navh').classList.add('not-show')
    document.getElementById('navh').classList.remove('nav-show')
    document.getElementById('close').classList.add('open')
    document.getElementById('open').classList.remove('open')
    document.getElementById('body').style.overflow = "visible"
  }
}


</script>
  
</body>
</html>