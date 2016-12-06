<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Compare Prolitico</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-typeahead.js"></script>
  <script type="text/javascript" src="jquery-ui-1.12.0.custom/jquery-ui.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.12.0.custom/jquery-ui.css"/>
  <link rel="stylesheet" href="prot_estilo.css"/>
<link rel="stylesheet" href="estilo.css"/>



</head>

<body>






<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Compare</a>

    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">Sobre</a></li>
        <img src="imgs\logo-top.png" style="  width: 150px;   height: 32px; margin-top: 8px;">
      </ul>
      
    </div>


  </div>
</div>

<div class="wide">
    
</div>

<br>

<div class="row">
<div class="col-xs-2"></div>
 <div class="col-xs-8">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Nome ou Partido Politico" style="border-radius: 50px 50px;">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" style="border-radius: 8px 8px;"> <a href="proto2.php">Buscar</a></button>
      </span>
    </div><!-- /input-group -->
    <br>
    <!-- Single button -->



<div class="col-xs-2"></div>

    <div class="col-xs-2">
 <select class="form-control" placeholder="Username" style="border-radius: 10px 10px;"> 
  <option>partido</option>
  <option>PSDB</option>
  <option>PSOL</option>
  <option>PC do B</option>
  <option>PT</option>
</select>

</div>

    <div class="col-xs-2">
 <select class="form-control" placeholder="Username" style="border-radius: 10px 10px;"> 
  <option>Cargo</option>
  <option>Prefeito</option>
  <option>Vereador</option>
  <option>Presidente</option>
  <option>Senador</option>
  <option>Deputado Est</option>
  <option>Deputado Fed</option>
</select>

</div>

    <div class="col-xs-2">
 <select class="form-control" placeholder="Username" style="border-radius: 10px 10px;"> 
  <option>Estado</option>
  <option>SP</option>
  <option>RJ</option>
  <option>MG</option>
  <option>BA</option>
</select>

</div>

    <div class="col-xs-2">
 <select class="form-control" placeholder="Username" style="border-radius: 10px 10px;"> 
  <option>cidade</option>
  <option>São Paulo</option>
  <option>Osasco</option>
  <option>Santo Andre</option>
  <option>São Caetano</option>
</select>

</div>



<div class="col-xs-2"></div>

<br>
<br><br>


<div class="col-xs-3">
  
</div>


<div class="col-xs-3">
  <button type="button" class="btn btn-danger btn-block btn" disabled="true">Selecionar</button>
</div>

<div class="col-xs-3">
  <button type="button" class="btn btn-danger btn-block btn" disabled="true">Selecionar</button>
</div>

<div class="col-xs-3"></div>





  </div><!-- /.col-lg-6 -->
  <div class="col-xs-2"></div>




</div>

<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-10">


<div class="col-xs-6">
<div class="col-xs-12">
  <div class="pagina">

      <div class="linha"> 
        <div class="tileXLargo" style="background-color: #ddd">
          <img src="imgs/elyse.png" width="100" height="100" 
          style="border-radius: 50%; border: 3px solid #ffffff; position: relative; top: 50px; left: 10px">
        </div>
      </div>
      <div class="tileXLargo abc" style="text-align: right;">
       
        <p style="border: 1px solid #9b9a9a; font-size: 30px;"></p>
        <p>
          <img src="imgs/img-score-vazio.png" style="position: relative; top: 5px; left: 0px">
        </p>
        <p style="border: 1px solid #9b9a9a; font-size: 30px;"></p>
        <p>
          <img src="imgs/btn-ficha-completa.png" width="80" height="80" style="position: relative; top: -20px; left: 0px">
        </p>
         <p>
          <div style="margin-left: 130px;">Partido<br>---</div>
          <div style="margin-left: 228px;">Comparações</div>
        </p>
      </div>
      <div class="nome" style="color: black;">          </div>


      <div class="linha"> 
        <div class="tile verde">
          <img src="imgs/img-verba.png"/>
          <span>XXX</span>
        </div>
        <div class="tile chumbo">
          <img src="imgs/img-votos-recebidos.png" />
          <span>XXX</span>
        </div>
        <div class="tile chumbo">
          <img src="imgs/img-presenca.png"/>
          <span>XXX</span>
        </div>
        <div class="tile chumbo">
          <img src="imgs/img-ficha-limpa.png"/>
          <span>XXX</span>
        </div>
      </div>


      <div class="linha">
        <div class="tile tileLargo laranja">
          <div class="tileMin laranjaEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>    
            <p>OCORRENCIAS</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">em aberto</p>
        </div>

        <div class="tile tileLargo ciano ">
          <div class="tileMin cianoEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>
            <p>COMO VOTOU</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Projetos Votados</p>
        </div>
      </div>       


      <div class="linha">
        <div class="tile tileLargo vermelho">
          <div class="tileMin vermelhoEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>    
            <p>VERBAS</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Utilizados</p>
        </div>

        <div class="tile tileLargo roxo">
          <div class="tileMin roxoEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>
          <p>CAMPANHA POLITCA</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Atingido</p>
        </div>
      </div>       

      <div class="linha">
        <div class="tile tileLargo chumbo">
          <div class="tileMin preto">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>    
            <p>REELEIÇÃO</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Votos Recebidos</p>
        </div>
        <div class="tile tileLargo amarelo ">
          <div class="tileMin amareloEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>
            <p>PROJETOS</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt"> aprovados</p>
        </div>
      </div>   
          

  </div><!-- Pagina-->
</div>  <!-- class="col-sm-12"-->
</div> <!-- class="col-sm-6"-->

<div class="col-md-6">
<div class="col-sm-12">

  <div class="pagina">

      <div class="linha"> 
        <div class="tileXLargo" style="background-color: #ddd">
          <img src="imgs/elyse.png" width="100" height="100" 
          style="border-radius: 50%; border: 3px solid #ffffff; position: relative; top: 50px; left: 10px">
        </div>
      </div>
      <div class="tileXLargo abc" style="text-align: right;">
       
        <p style="border: 1px solid #9b9a9a; font-size: 30px;"></p>
        <p>
          <img src="imgs/img-score-vazio.png" style="position: relative; top: 5px; left: 0px">
        </p>
        <p style="border: 1px solid #9b9a9a; font-size: 30px;"></p>
        <p>
          <img src="imgs/btn-ficha-completa.png" width="80" height="80" style="position: relative; top: -20px; left: 0px">
        </p>
         <p>
          <div style="margin-left: 130px;">Partido<br>---</div>
          <div style="margin-left: 228px;">Comparações</div>
        </p>
      </div>
      <div class="nome" style="color: black;">          </div>


      <div class="linha"> 
        <div class="tile verde">
          <img src="imgs/img-verba.png"/>
          <span>XXX</span>
        </div>
        <div class="tile chumbo">
          <img src="imgs/img-votos-recebidos.png" />
          <span>XXX</span>
        </div>
        <div class="tile chumbo">
          <img src="imgs/img-presenca.png"/>
          <span>XXX</span>
        </div>
        <div class="tile chumbo">
          <img src="imgs/img-ficha-limpa.png"/>
          <span>XXX</span>
        </div>
      </div>


      <div class="linha">
        <div class="tile tileLargo laranja">
          <div class="tileMin laranjaEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>    
            <p>OCORRENCIAS</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">em aberto</p>
        </div>

        <div class="tile tileLargo ciano ">
          <div class="tileMin cianoEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>
            <p>COMO VOTOU</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Projetos Votados</p>
        </div>
      </div>       


      <div class="linha">
        <div class="tile tileLargo vermelho">
          <div class="tileMin vermelhoEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>    
            <p>VERBAS</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Utilizados</p>
        </div>

        <div class="tile tileLargo roxo">
          <div class="tileMin roxoEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>
          <p>CAMPANHA POLITCA</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Atingido</p>
        </div>
      </div>       

      <div class="linha">
        <div class="tile tileLargo chumbo">
          <div class="tileMin preto">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>    
            <p>REELEIÇÃO</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt">Votos Recebidos</p>
        </div>
        <div class="tile tileLargo amarelo ">
          <div class="tileMin amareloEsc">
            <div class="qdr">
              <i class="qdr glyphicon glyphicon-play-circle"></i>
            </div>
            <p>PROJETOS</p>
          </div>
          <p id="pnum">-- </p><p id="ptxt"> aprovados</p>
        </div>
      </div>   
          

  </div><!-- Pagina-->
  <br><br><br><br><br><br>
</div>  <!-- class="col-sm-12"-->
</div> <!-- class="col-sm-6"-->

</div>
<div class="col-md-1"></div>


       <div class=" tile footer footer1">
         <p style="font-size: 25px;">
         Saiba mais sobre a lei estadual que garante acesso a informação de dados públicos &nbsp &nbsp &nbsp
         <button type="button" class="btn btn-default btn">Saiba Mais!!!</button>
         </p>
       </div>
       <div class=" tile footer footer2">
        
        <div class="col-md-12">

        <div class="col-md-3 tileRodape">
         
          <p style="font-size: 25px;">Impostometro </p><p id="prod">400<br>Bilhões</p>

        </div>

        <div class="col-md-3 tileRodape ">
         
          <p style="font-size: 25px;">Ficha limpa</p><p id="prod">100<br>Candidatos</p>
        </div>

         <div class="col-md-3 tileRodape ">
         
          <p style="font-size: 25px;">Despesas politicas</p>
          
          <p id="prod"  style="position: relative; top: 0px; left: 20px">Ver
          <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          Relatório</p>
          <img src="imgs/Resume_Icon.png" style="position: relative; top: -80px; left: -50px; text-align: left;">
        </div>

        <div class="col-md-3 tileRodape" style=" border-right: thin #2f4f67 solid;">
          
          <p style="font-size: 25px;">Lista da corrupção</p>

           <p id="prod"  style="position: relative; top: 0px; left: 20px">Ver
          <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          Relatório</p>
          <img src="imgs/Resume_Icon.png" style="position: relative; top: -80px; left: -50px; text-align: left;">
        </div>
    </div>
    <div class="col-md-12"  style=" margin-top: 40px; border-bottom: 2px #7db5d8 solid;"></div>

       </div>
       <div class=" tile footer footer3">
       <img src="imgs/twitter_1.png">
       <img src="imgs/facebook.png">
       <img src="imgs/linkdin.png">
       <img src="imgs/google.png">
       <img src="imgs/youtube.png">
       </div>


</body>

</html>