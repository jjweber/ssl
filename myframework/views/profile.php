<div id="mainBody" class="container">
    <div class="row panel">
        <div class="col-md-12 col-xs-12" id="profileData">
            <div class="col-md-6 col-xs-6" id="profileLeft">
                <div class="col-lg-6 col-md-12 col-xs-12" id="profileImgDiv">
                    <img src="/assets/images/image-placeholder.jpeg" id="profileImg" class="img-thumbnail picture hidden-xs" id="profileImg" /><br>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12" id="profileBtnsDiv">

                    <form action="/profile/update" method="POST" enctype="multipart/form-data" >
                        <label class="btn btn-default btn-file" id="profileFileBtn">Browse
                            <input type="file" name="img" style="display: none">
                        </label>
                        <input type="submit" value="Update" class="btn btn-primary" id="profileUpdateBtn">
                    </form>
                    
                </div>
            </div>
            <div class="col-md-6 col-xs-6" id="profileRight">
                <div class="header">
                    <h1><?php $uname = $_SESSION[ 'uname' ]; echo $uname; ?></h1>
                    <h4>Web Developer</h4>
                    <span><?php $umessage = $_SESSION[ 'umessage' ]; echo $umessage; ?></span><br>
                </div>
            </div>
        </div>
    </div>

</div> <!-- /container end -->