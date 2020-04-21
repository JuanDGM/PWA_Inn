<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Inicio</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="library/css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="manifest" href="/manifest.json">
        <meta rel="theme-color" content="yellow">
    </head>
    <body>
        <div class="marcoApp">
            <header class="header"></header>
            <article>
                <div class="marcoSaludo" id="marcoSaludoId">
                    <h1 class="animated bounce" style="width:100%;">BIENVENID@</h1>
                    <p style="width: 100%;">Buscamos innovaciones que cambien el mundo!</p>
                </div>
                <!--Menus Princial-->
                <div class="marcoMenuInicio" id="marcoMenuInicioId">
                <div class="card animated slideInLeft delay-0.5s" style="width: 18rem;height: 350px;">
                    <img src="img/Ideas.jpg" class="card-img-top" alt="..." style="height: 150px;">
                    <div class="card-body">
                      <p class="card-text"><strong>Banco de retos de Innovación</strong></p>
                      <p class="card-text">Atrevete, reta los que existe. <br/>Gana por las mejores ideas.</p>
                      <button class="btn btn-primary" type="button" onclick="ingresaIncubadoraIdeas();">Entrar</button>
                    </div>
                    
                </div>
                <div class="card animated zoomInUp delay-0.5s" style="width: 18rem;height: 350px;">
                    <img src="img/Soluciones.jpg" class="card-img-top" alt="..." style="height: 150px;">
                    <div class="card-body">
                      <p class="card-text"><strong>Proyectos de alto impacto.</strong></p>
                      <p class="card-text">Reta tu mente <br/>Consigue los mejores equipos</p>
                      <button class="btn btn-primary" type="button">Entrar</button>
                    </div>
                </div>
                <div class="card animated slideInRight delay-0.5s" style="width: 18rem;height: 350px;">
                    <img src="img/Inversion.jpg" class="card-img-top" alt="..." style="height: 150px;">
                    <div class="card-body">
                      <p class="card-text"><strong>Invierte en proyectos de innovación</strong></p>
                      <p class="card-text">Financia los mejores proyectos</p>
                      <button class="btn btn-primary" type="button">Entrar</button>
                    </div>
                </div>
                
                </div>
                <!--2. Marco Inbucadora de ideas-->
                <div class="marcoMenuInicio" id="marcoIncubadoraIdeasId" style="background: yellow;display: none;height: 130px;">
                    <form>
                    <div class="form-group">
                        <label>La idea</label>
                        <input type="text" class="form-control" id="laIdeaId">
                        <small id="emailHelp" class="form-text text-muted">Registra la oportunidad de alto impacto</small>
                        <button type="button" class="btn btn-primary btn-sm btn-block">Idear</button>
                    </div>
                    </form>
                    
                </div>
                <div id="bancoIdeas" style="display: none;width: 100%;height: 300px;background: #f4f4f4;padding: 2%;">
                    <div><strong>BANCO DE IDEAS</strong></div>
                </div>
                
            </article>
            <footer></footer>
        </div>
        <script src="js/app2.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       
    </body>
</html>
