<div id="mainBody" class="container">

<!-- Jumbotron 1 Starts Here -->
    <div class="jumbotron">
        <h1>Greetings Page</h1>
        <p>


<!-- PHP Code Starts Here -->
            <?php


            
                class helloClass{
                    public function greeting() {
                        
                        $uname = $_SESSION[ 'uname' ];
                        echo "Hello $uname from the Body!";
                    }
                }

                $sayHelloClass = new helloClass();
                $sayHelloClass->greeting();

            ?>
<!-- PHP Code Ends Here -->


        </p>
        <p>           
<!-- Button trigger carouselModal -->
        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#carouselModal">
            View Images &raquo;
        </button>
        </p>
    </div>

<!-- Progress Bar Starts Here -->
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
    </div>

<!-- Popover Starts Here -->
    <button id="popover" type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content.">Click to toggle popover</button>



</div> <!-- /container end -->


<!-- Modal Starts Here -->
<div class="modal fade" id="carouselModal" tabindex="-1" role="dialog" aria-labelledby="carouselModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carouselModalLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

 <!-- Carousel Starts Here -->          
            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#modalCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#modalCarousel" data-slide-to="1"></li>
                    <li data-target="#modalCarousel" data-slide-to="2"></li>
                    <li data-target="#modalCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/images/city-lights.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/images/italy-sceen.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/images/ocean-view.jpeg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/images/sunset-over-mountains.jpeg" alt="Forth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#modalCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#modalCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
 <!-- Carousel Ends Here -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>