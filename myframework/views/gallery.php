<div id="mainBody" class="container">


<!-- Jumbotron Starts Here -->
<div class="jumbotron">
        <h1>Gallery</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
<!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Open Modal &raquo;
        </button>
        </p>
    </div>


<!-- Body Carousel Starts Here -->
<div id="bodyCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#bodyCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#bodyCarousel" data-slide-to="1"></li>
            <li data-target="#bodyCarousel" data-slide-to="2"></li>
            <li data-target="#bodyCarousel" data-slide-to="3"></li>
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
        <a class="carousel-control-prev" href="#bodyCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bodyCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div> <!-- /container end -->


<!-- Modal Starts Here -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Popover in a modal</h5>
                <p>This <a href="#" role="button" class="btn btn-secondary popover-test" data-toggle="popover" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
                <hr>
                <h5>Tooltips in a modal</h5>
                <p><a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>                                              
        </div>
    </div>
</div>