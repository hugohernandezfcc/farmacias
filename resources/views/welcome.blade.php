<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aeromexico</title>
      <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('css/modal.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('css/modallenguaje.css') }}" rel="stylesheet" type="text/css" />
      <script>
        function porencima(x) {
          x.style.color = "rgb(233, 27, 47)";
        }

        function alquitar(x) {
          x.style.color = "rgb(0, 124, 194)";
        }

        function porencima2(x) {
          x.style.background = "rgb(233, 27, 47)";
        }

        function alquitar2(x) {
          x.style.background = "rgb(0, 124, 194)";
        }
        function alquitar3(x) {
          x.style.background = "rgb(0, 73, 144)";
        }
      </script>



    </head>
    <body class="antialiased">
        <div id="openModal" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">X</a>
          </div>
          <a class="ultimasnoticiasmodal">Últimas noticias</a>
          <a class="textCovModal">COVID-19 Recomendaciones</a>
          <img class="imgModal1" src="Images/Picture-27 1.png">
          <img class="imgModal2" src="Images/Picture-27 2.png">
          <a class="text1Mod">Las restricciones de entrada para viajes no esenciales a los Estados Unidos. Leer más</a>
          <a class="textBigModal">Nueva ruta de temporada BCN</a>
          <a class="text2Mod">Las restricciones de entrada para viajes no esenciales a los Estados Unidos. Leer más</a>
          <svg class="recmodal"></svg>
          <a class="textm" href="" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver las noticias anteriores</a>
        </div>



  <div id="openModal2" class="modalDialog2">
    <div>
      <a href="#close" title="Close" class="close2">X</a>
      <a class="texidioma">IDIOMA</a>
      <img class="flagMex" src="Images/MEX.svg">
      <a class="espModal">México
        Español</a>
      <img class="flagUsa" src="Images/USA.svg">
      <a class="engModal">United States
        English</a>
      <img src="Images/Checked.svg" class="iconCheck">
    </div>
  </div>

  <header class="tabheader">
    <img class="logo" src="Images/Logo.svg">
    <svg class="iconnotification" onclick="window.location.href='#openModal'" width="15" height="16" viewBox="0 0 15 16"
      fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M7.55593 2.89469C7.55593 2.89268 7.55594 2.89068 7.55594 2.88867C7.55594 2.8866 7.55593 2.88453 7.55593 2.88246C7.55593 2.88453 7.55593 2.8866 7.55593 2.88867C7.55593 2.89068 7.55593 2.89268 7.55593 2.89469ZM7.55594 0.888672C7.55593 0.888672 7.55593 0.888672 7.55593 0.888672C4.97866 0.888672 2.8893 2.97791 2.8893 5.5553V7.41394C2.8893 7.46112 2.88856 7.5082 2.88709 7.55518C2.88649 7.55513 2.88588 7.55506 2.88528 7.55499C2.88394 7.55484 2.8826 7.55469 2.88125 7.55469C2.86077 8.21199 2.69868 8.85106 2.41093 9.4274C2.15734 9.92984 1.80785 10.3859 1.37432 10.7693C1.35371 10.7873 1.33291 10.805 1.31192 10.8226C1.28188 10.8479 1.25331 10.8743 1.22624 10.9019C1.07081 11.0586 0.964141 11.255 0.916716 11.4681C0.899319 11.5461 0.889926 11.6263 0.888971 11.7075C0.887978 11.7898 0.895633 11.8733 0.912469 11.9567C0.912961 11.9591 0.91346 11.9615 0.913967 11.964C0.915948 11.9736 0.918052 11.9831 0.920278 11.9925C0.923458 12.0061 0.926885 12.0197 0.93056 12.0333C1.07192 12.5553 1.58791 12.8887 2.12929 12.8887H2.1326H12.9793H12.9826C13.524 12.8887 14.0399 12.5553 14.1813 12.0333C14.1849 12.0202 14.1882 12.007 14.1913 11.9938C14.1936 11.9839 14.1958 11.974 14.1979 11.964C14.1984 11.9615 14.1989 11.9591 14.1994 11.9567C14.2164 11.8725 14.224 11.7884 14.2229 11.7054C14.2186 11.4026 14.0974 11.1154 13.8856 10.9019C13.8586 10.8743 13.83 10.8479 13.7999 10.8226C13.779 10.805 13.7582 10.7873 13.7375 10.7693C13.304 10.3859 12.9545 9.9298 12.7009 9.42734C12.4132 8.85102 12.2511 8.21197 12.2306 7.55469C12.2287 7.55469 12.2267 7.55501 12.2248 7.55518C12.2233 7.50821 12.2226 7.46112 12.2226 7.41394V5.5553C12.2226 2.97791 10.1332 0.888672 7.55594 0.888672ZM7.55595 15.5553C8.76334 15.5553 9.77335 14.6946 10.0053 13.5553H5.1066C5.33866 14.6946 6.34867 15.5553 7.55595 15.5553Z"
        fill="white" />
    </svg>
    <a class="textleng1"></a>
    <img class="iconBandera" src="Images/MEX.svg">



    <div class="tabcontent">Noticias Experiencia GAM Biblioteca de Políticas</div>

    <div>
      <img class="iconSearch" src="Images/search.svg">
      <a class="textleng1" onclick="window.location.href='#openModal2'">Español</a>
      <a class="textSearchButton">Busca un Articulo</a>
      <input type="search" class="ButtonSearch">
    </div>

    <div>
      <input type="button" value="Iniciar Sesión" class="Login">
    </div>
  </header>


  <a class="textExceptionPolicies">Exception Policies</a>
  <div class="rectanguloIzquierdo"></div>

  <img src="Images/Escudo.svg" class="iconEscudo">
  <p class="textBlueRecIzquierdo">Exception Policy Finder</p>
  <p class="textBlueSmall">Need help determing which exception policy applies to a ticket? Go to the tool</p>
  <div>
    <svg class="rectanglegreen"></svg>
    <img src="Images/EllipseGreen.svg" class="iconGreenrectangle">
    <a class="textGreenrectangle">24</a>
    <a class="textRecGreenActivo">Activo</a>
    <a class="textWatheverEventsgreen">weather/events</a>

    <svg class="rectanblue"></svg>
    <img src="Images/EllipseBlue.svg" class="iconBluerectangle">
    <a class="textBluerectangle">3</a>
    <a class="textEmitidosBlue">Emitidos</a>
    <a class="textWatheverEventsBlue">weather/events</a>

    <img src="Images/!.svg" class="iconRed2">
    <a class="texttyphoon">Typhoon Haishen - Bulletin 1</a>
    <img src="Images/!2.svg" class="iconRed3">
    <a class="textCoronavirus">Coronavirus Situation - All...</a>
    <a href="" class="textvermasRec" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver más</a>
    <a href="" class="textvermasRec2" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver más</a>
    <a href="" class="textAllViewExceptionPolicies" onmouseover="porencima(this)" onmouseout="alquitar(this)">View all
      exception policies</a>

    <a class="textLomasBuscado">LO MÁS BUSCADO</a>
    <img src="Images/Corazon.svg" class="iconCorazon">
    <a class="textMedidadCovid">Medidas COVID-19</a>
    <a class="textMedidasCovidExtend">Learn more how the Delta CareStandard focuses on creating a safer and cleaner
      experience at every point during.</a>
    <a href="" class="textVerPreguntasFrecuentes" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver
      preguntas frecuentes</a>
    <img src="Images/Maleta.svg" class="iconMaleta">
    <a class="textAboutAeromexico">About Aeromexico</a>
    <a class="textAboutAeromexicoExtence">Learn more how the Delta CareStandard focuses on creating a safer and cleaner
      experience at every point during.</a>
    <a href="" class="textVerPreguntasFrecuentesAeromexico" onmouseover="porencima(this)"
      onmouseout="alquitar(this)">Ver preguntas frecuentes</a>


    <svg class="RectanguloBluePortada"></svg>
    <img src="Images/aeromexicocama.png" class="imgPortada">
    <svg class="rectimaggrad"></svg>
    <button id="n1" class="PrimaryButton" onmouseover="porencima2(this)" onmouseout="alquitar2(this)">PRIMARY
      BUTTON</button>
    <a class="titleblueportada">Nuestras últimas noticias</a>
    <a class="BigTittle">Trade Site Agencias</a>
    <a class="textPortada">Nuevo portal para la consulta de información de clientes B2B, acceso a toda la información
      que necesitas.</a>
  </div>

  <a class="featurednews">Featured News</a>
  <svg class="rectanguloimg2">
    <img src="Images/Picture-276.png" class="imagen2">
    <a class="Titletravwel1">Travel well</a>
    <a class="text1rec">Huracán “Laura” Rutas afectadas: Houston...</a>
    <a class="text1recm">Fecha de emisión del boleto: 26 agosto 2020 Viaje afectado: del 26 al 17 agosto 2020</a>
    <a href="" class="linkrec1" onmouseover="porencima(this)" onmouseout="alquitar(this)">Leer más</a>
    <a class="omxla24">Código IT: OMXLA24</a>
  </svg>

  <a href="" class="linkallnews" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver todas las noticias</a>
  <a href="" class="linkallnews2" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver todas las noticias</a>

  <svg class="rectanguloimg3">
    <img src="Images/Picture-277.png" class="imagen3">
    <a class="TitleProdServs">Products & Services</a>
    <a class="text2rec">Aeroméxico debutará con una nueva experiencia en..</a>
    <a class="text2recm">Learn more about the clean and consistent experience that travelers can ...</a>
    <a href="" class="linkrec2" onmouseover="porencima(this)" onmouseout="alquitar(this)">Leer más</a>
    <a class="omxla82">Código IT: OMXLA 82109C</a>
  </svg>

  <a class="TitleGAM">Experiencia GAM</a>
  <svg class="rectanguloimg4">
    <img src="Images/Picture-278.png" class="imagen4">
    <a class="Titletravwel2">Travel well</a>
    <a class="text3rec">Introducción a un nuevo estandar de atención</a>
    <a class="text3recm">Learn more about the clean and consistent experience that travelers can ...</a>
    <a href="" class="linkvideo1" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver video</a>
  </svg>

  <svg class="rectanguloimg5">
    <img src="Images/Picture-279.png" class="imagen5">
    <a class="travwel3">Travel well</a>
    <a class="text4rec">Introducing a new Standard of Care</a>
    <a class="text4recm">Learn more about the clean and consistent experience that travelers can ...</a>
    <a href="" class="linkrec3" onmouseover="porencima(this)" onmouseout="alquitar(this)">Leer más</a>
  </svg>
  <a class="bibliotecapoliticas">Biblioteca de Políticas</a>
  <a href="" class="LinkAllPolitics" onmouseover="porencima(this)" onmouseout="alquitar(this)">Ver todas las
    politicas</a>


  <div class="reccovid1">
    <img src="Images/IconPDF.svg" class="iconPDF1">
  </div>
  <a class="cambiosvol1">Cambios voluntarios e involuntarios COVID-19</a>
  <a href="" class="down1" onmouseover="porencima(this)" onmouseout="alquitar(this)">Descargar</a>


  <div class="reccovid2">
    <img src="Images/IconPDF.svg" class="iconPDF2">
  </div>
  <a class="cambiosvol2">Cambios voluntarios e involuntarios COVID-19</a>
  <a href="" class="down2" onmouseover="porencima(this)" onmouseout="alquitar(this)">Descargar</a>


  <div class="reccovid3">
    <img src="Images/IconPDF.svg" class="iconPDF3">
  </div>
  <a class="cambiosvol3">Cambios voluntarios e involuntarios COVID-19</a>
  <a href="" class="down3" onmouseover="porencima(this)" onmouseout="alquitar(this)">Descargar</a>

</body>

<footer class="footer">

  <button class="buttonChat" onmouseover="porencima2(this)" onmouseout="alquitar3(this)">CHAT EN VIVO</button>
  <img src="Images/CHATVIVO.svg" class="iconChat">
  <img src="Images/WALogo2.svg" class="iconWhatsBig">
  <a class="TextBigFooter">Llámanos (55) 5133 4000 o escríbenos por WhatsApp</a>
  <a class="Text2Footer">Costo de llamada local Ver números de contacto para otros países</a>
  <a class="textvuelo">¿Tienes un vuelo?</a>
  <a class="textContact">Contacto Aerobot</a>
  <img src="Images/WhatsApp.svg" class="iconWhats">
  <img src="Images/facebook-messenger 1.svg" class="iconFbMessenger">
  <a class="textSiguenos">Siguenos en</a>
  <img src="Images/FB.svg" class="iconFB">
  <img src="Images/Twitter.svg" class="iconTwitter">
  <img src="Images/Insta.svg" class="iconInstagram">
  <img src="Images/LinkeIn.svg" class="iconLinkedIn">
  <img src="Images/Youtube.svg" class="iconYoutube">

  <img src="Images/Facturacion.svg" class="iconFac">
  <a class="textFactura">Facturación</a>

  <img src="Images/ReglasEqui.svg" class="iconReglasEquipaje">
  <a class="textReglasEquipaje">Reglas de equipaje</a>

  <img src="Images/iconFam.svg" class="iconInfPasajeros">
  <a class="textInfPasajeros">Información de pasajeros</a>

  <img src="Images/SerEspeciales.svg" class="iconSerEspeciales">
  <a class="textServEspeciales">Servicios especiales</a>

  <img src="Images/IconReembolsos.svg" class="iconReembolsos">
  <a class="textReembolsos">Reembolsos</a>

  <a class="textSobreAeromexico">Sobre Aeroméxico</a>
  <a class="textInversionistas">Inversionistas</a>
  <a class="textAlianzaCom">Alianzas comerciales</a>
  <a class="textCompliance">Compliance</a>
  <a class="textCarrerasAero">Carreras Aeronáuticas</a>
  <a class="textBolsaTrabajo">Bolsa de trabajo</a>

  <a class="textDetuInteres">De tu interés</a>
  <a class="textUltiNoticias">Últimas noticias</a>
  <a class="textVuelaConNosotros">Vuela con nosotros</a>
  <a class="textNuetraFlota">Nuestra flota</a>
  <a class="textTiendasViaje">Tiendas de viaje</a>
  <a class="textViajesGrupo">Viajes en grupo</a>
  <a class="textContacto">Contacto</a>
  <a class="textServicioCliente">Servicio al cliente</a>
  <a class="textDenunciasCorp">Denuncias corporativas</a>
  <a class="textGranPlan">Gran Plan</a>
  <a class="textClubPremier">Club Premier</a>
  <a class="textAerobot">Aerobot</a>




  <a class="copyright">© 2019 Aeroméxico. Todos los derechos reservados l Legal l Aviso de privacidad l Sitio
    accesible</a>
  <img src="{{ asset('Images/PCI1.svg') }}" class="PCI">
  <a class="textCertificadopor">Certificados por</a>
  <a class="Textaceptamos">Aceptamos</a>
  <a class="textTarjetasCredito">Tarjetas de crédito y débito</a>

  <img class="iconVisa"   src="{{ asset('Images/Visa.svg') }}">
  <img class="iconMaster" src="{{ asset('Images/Master.svg') }}">
  <img class="iconblue"   src="{{ asset('Images/iconBlue.svg') }}"> 
  <img class="iconRed"    src="{{ asset('Images/IconRed.svg') }}">

  <a class="TextPagoElectronico">Pago electrónico</a>
  <img class="iconVisa2" src="{{ asset('Images/VisaIcon.svg') }}">
  <img class="iconPaypal" src="{{ asset('Images/paypal.svg') }}">
  <img class="iconMaster2" src="{{ asset('Images/Masterpass_logo_2016.svg') }}">

  <a class="textOtros">Otros</a>
  <img class="iconUATP" src="{{ asset('Images/UATP.svg') }}">
  <img class="iconBilletes" src="{{ asset('Images/Group67.svg') }}">
  <img class="iconAvion" src="{{ asset('Images/Group601.svg') }}">
  <a class=""></a>
  <a class=""></a>


</footer>

</html>
