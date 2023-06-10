<?php 
require_once('./pages/header.php');
?>

<section id="carousel-home" class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=""></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/slide1.jpg" alt="First slide">
                    <div class="translateY-to-center carousel-caption d-none d-sm-block ">
                        <h5>Slide 1</h5>
                        <p>Texto slide 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slide2.jpg" alt="Second slide">
                    <div class="translateY-to-center carousel-caption d-none d-sm-block ">
                        <h5>Slide 2</h5>
                        <p>Texto slide 2</p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slide3.jpg" alt="Third slide">
                    <div class="translateY-to-center carousel-caption d-none d-sm-block ">
                        <h5>Slide 3</h5>
                        <p>Texto slide 3</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/slide4.jpg" alt="4 slide">
                    <div class="translateY-to-center carousel-caption d-none d-sm-block ">
                        <h5>Slide 4</h5>
                        <p>Texto slide 4</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </section>
    <section id="destaques-home" class="container p-5">
        <div class="container justify-content-center">
            <div class="row align-content-center card-deck gap-5">
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="./img/10919031_645546298933962_2632864448512758701_n.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="./img/17522949_642815005903805_1477916256193767556_n.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="./img/19060164_675944452590860_6091572141545334283_n.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="history-home" class="container d-flex flex-column gap-5 p-5">
        <div class="row justify-content-center">
            <div class="card d-flex flex-row p-0">
                <img class="card-img-top " style="width: 50%;" src="./img/unnamed-file.jpg" alt="Card image cap">
                <div class="card-body m-sm-5 col-3">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card d-flex flex-row-reverse p-0">
                <img class="card-img-top " style="width: 50%;" src="./img/shutterstock_1107673826-1024x768.jpg" alt="Card image cap">
                <div class="card-body m-sm-5 col-3">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                </div>
            </div>
        </div>
    </section>
    <section id="accordion-home" class="container p-5">
        <h1 class="text-center m-5">Dúvidas Frequentes sobre o MDF</h1>
        <div id="accordion ">
            <div class="card rounded-0 rounded-top ">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Posso Limpar com água o MDF?
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse rounded-0" aria-labelledby="headingOne" data-bs-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card rounded-0 border-top-0 border-bottom-0 ">
              <div class="card-header " id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Quanto tempo dura o MDF
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card rounded-0 mt-0 rounded-bottom ">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Vocês entregam na minha residência?
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
    </section>

<?php
require_once('./src/footer.php');
?>