@include("publico.views.shared.navigation")
 
<link href="{{'css/app.css'}}" rel="stylesheet" type="text/css"> 
  <!-- Services -->
    <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Galeria de fotos</h2>
          <h3 class="section-subheading text-muted">Confira abaixo algumas de nossas fotos dos nossas ações sociais.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="card-deck">

          <div class="card mb-4">
            <!--  img-fluid dentro da class da imagem para ficar responsivo-->
              <img class="card-img-top" height="270px" src="assoc/capa_galeria/cestabasica.jpeg" alt="Card image cap">
              <div class="card-body">
                  <h4 class="card-title">Entrega de cestas básicas</h4>
                  <a href="#" class="card-text"><small class="text-muted">Clique aqui.</small></a>
              </div>
          </div>

          <div class="card mb-4">
            <img class="card-img-top" height="270px" src="assoc/capa_galeria/copaguilhermelogo.jpeg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Copa Guilherme Beneficente</h4>
                <a href="#" class="card-text"><small class="text-muted">Clique aqui.</small></a>
            </div>
        </div>

         <div class="card mb-4">
              <img class="card-img-top" height="270px" src="assoc/capa_galeria/material.jpeg" alt="Card image cap">
              <div class="card-body">
                  <h4 class="card-title">Entrega de materiais escolares</h4>
                  <a href="#" class="card-text"><small class="text-muted">Clique aqui.</small></a>
              </div>
          </div>

      </div>
    </div>
    <a href="{{ url('galeria') }}">
    <div class="mx-auto text-center" >
      <button type="button" class="btn btn-success" >ver mais</button>
      </div>
    </a>
  </section>
  <script src="{{mix('js/app.js')}}"></script>