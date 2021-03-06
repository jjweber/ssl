<div id="mainBody" class="container">

<!-- Jumbotron Starts Here -->
<div class="pagedescription">
    <h1>Contact</h1>
    <p>Please enter your contact information and what we can help you with.</p>
</div>


<?

    function create_image($cap)

    {
        unlink("./assets/images/image1.png");

        global $image;

        $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

        $background_color = imagecolorallocate($image, 255, 255, 255);

        $text_color = imagecolorallocate($image, 0, 255, 255);

        $line_color = imagecolorallocate($image, 64, 64, 64);

        $pixel_color = imagecolorallocate($image, 0, 0, 255);

        imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

        for ($i = 0; $i < 3; $i++) {

            imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

        }

        for ($i = 0; $i < 1000; $i++) {

            imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

        }

        $text_color = imagecolorallocate($image, 0, 0, 0);

        ImageString($image, 22, 30, 22, $cap, $text_color);

        /************************************/
        $_SESSION["captcha_code"] = $cap;

        /*************************************/

        imagepng($image, "./assets/images/image1.png");

    }

    create_image($data["cap"]);

    echo "<img src='/assets/images/image1.png'>";

?>


<!-- Form Starts Here -->
<form id="contactForm" action="/controller/contactRecv" method="POST" novalidate>
    <div id="captchaField">
        <label for="captcha">Enter Captcha <small style="color: yellow">*required</small></label>
        <input name="captcha" type="captcha" id="captcha"  placeholder="Enter code above" required>
        <div class="invalid-feedback" style="color: yellow">
        * Please provide the code you see in the image above.
        </div>
    </div>

    <div class="form-group" id="namefieldDiv">
        <label for="namefield">Name <small style="color: yellow">*required</small></label>
        <input name="namefield" type="text" class="form-control" id="namefield" placeholder="Name" required>
        <div class="invalid-feedback" style="color: yellow">
        * Please provide a name.
      </div>
    </div>

    <div class="form-group" id="emailDiv">
        <label for="email">Email address <small style="color: yellow">*required</small></label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
        <div class="invalid-feedback" style="color: yellow">
        * Please provide a valid email.
      </div>
    </div>

    <div class="form-group" id="phoneDiv">
        <label for="phone">Phone Number</label>
        <input name="phone" type="number" class="form-control" id="phone" placeholder="Enter phone#">
    </div>

    <div class="form-check" id="checkboxDiv">
        <label class="form-check-label">
            <input name="canCall[]" type="checkbox" class="form-check-input" id="checkbox" value="yes">
            I authorize you to contact me at this number.
        </label>
    </div>

    <div class="form-group" id="formSelectDiv">
        <label for="formSelect">Type of Phone Number</label>
        <select name="formSelect" class="form-control" id="formSelect" require>
            <option>Home</option>
            <option>Work</option>
            <option>Cell</option>
        </select>
    </div>

    <div class="form-group" id="textfieldDiv">
        <label for="exampleFormControlTextarea1">Textarea</label>
        <textarea name="textfield" class="form-control" id="textfield" rows="3"></textarea>
    </div>

    <div class="form-check" id="radio1Div">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="radio" id="radio1" value="Mornings" checked>
            Best time to reach me is mornings.
        </label>
    </div>
    <div class="form-check" id="radio2Div">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="radio" id="radio2" value="Afternoon">
            Best time to reach me is afternoons.
        </label>
    </div>

    <button id="ajaxBtn" type="submit" class="btn btn-primary">Submit</button>
    <!--<input type="button" class="btn btn-primary" value="Ajax Submit">-->
</form>



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