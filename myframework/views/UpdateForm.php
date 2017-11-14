<?php




$currentName = $_GET['name'];

echo $currentName;





?>


<div class="container">

    <div class="starter-template">

        <h1>Add A Fruit</h1>

        <form action="/about/addAction" method="POST">


            <?php


            $currentName = $_GET['name'];

            echo "<input type=\"text\" name=\"name\" value='".$currentName."' />"

            ?>

            <input type="submit" />


        </form>

    </div>



</div><!-- ./container -->
