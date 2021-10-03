
<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8" />
    <meta http-equiv="Content-Language" content="pt-br">
    <!--SEO-->
    <title> EXCEL-PHP </title>
   

<!-- biblioteca de icones bootstrap glyphon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


   
   
  </head>
  <body style=" background-image: linear-gradient(to right top, #00fa9a, #294863, #d3d3d3);  margin: 0px;">
    
  
    
    <section id="topo" class="fleft100 parallax">
      <header class="col-12 header-home" style="margin-bottom:80px;padding: 0px;">
        <nav class="navbar navbar-expand-md navbar-light" style="background:linear-gradient(to right top, #00fa9a, ##120a8f, #d3d3d3); padding-left: 150px; padding-right: 150px;">
          <a class="navbar-brand logo" href="" style="padding: 0px;"><img src="images/ARENA1.png" alt="<? echo $marcacurta; ?>" style="max-width: 162px; background: #ffffff; border-radius: 25px; margin-top: 20px;" /></a>

          
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-right navbar-top" ">
             
              <li class="md1">
                  <a   href="main.php">
                    Atendimento
                  </a>
              </li>
              
              <li class="md1">
              <a  href="dados.php" >dados</a>
            </li>
            
            <li class="md1">
              <a  href="user.php" >Usuários</a>
            </li>
            
            <li class="md1">
                  <a href="destroir.php">
                    SAIR
                  </a>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
    <div style="background: #ffffff; height: 100%;font-family: 'Rubik', sans-serif;font-weight: 200; line-height: 25px; font-size: 18px; color: #555;display: inline-table;
width: 100%;">
      <div class="container" style="height: 100%!important;">
        <section id="section5" class="sd-section">
          <div class="row">
            <div class="col-12 col-md-12">
                <div class="userlog"> 
                </div>
              <div class="textMiddle">
                <br><br><hr></hr>
                <h3 class="sd-title " >Importação de dados</h3>
                <p><hr></hr></p>
                <div  >
                    <h3> Upload Excel </h3>
                    <form method="POST" Action="processa.php" enctype="multipart/form-data" >
                    <label> Arquivo </label>
                    <input type="file" name="arquivo" >
                    <input type="submit" value="enviar" >
                    </form>
                </div>    
               
                  
                  <br>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div style="clear: both;"></div>
    </div>
    <footer style="text-align: center; width: 100%;background: #22313d;max-height: 100%;margin-bottom: -5px;">
      <span class="copy mt100">
   
        <span class="fleft100" style="
          font-family: 'Rubik', sans-serif;color: #ffffff; background: transparent; margin-top: 0px !important;">
            <a href="https://www.facebook.com/jmsoftpb" style="color: #ffffff;" > J.M. Tecnologia </a> © 2021 - Todos os direitos reservados</span><br>
        
      </span>
      <div style="clear: both;"></div>
    </footer>



    
    
   
   
  </body>
</html>
