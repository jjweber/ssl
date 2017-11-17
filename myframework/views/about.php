<?php ob_start();  ?>

<script>
    // then echo it into the js/html stream
    // and assign to a js variable
    data = <?php echo json_encode($data); ?>;

</script>


<div class="container" style="margin-bottom: 2rem">

    <div class="starter-template" style="background: #FFF; margin: 6rem auto 14.5rem auto; padding: 2rem">
        <h1>Fruit List</h1>
        <!--<p class="btn btn-success"><a href="/about/showAddForm">Add New</a></p>-->
        <p class="btn btn-success" data-toggle="modal" data-target="#addFruitModal"><a >Add New</a></p>

        <table class="table">
        <?php
            foreach ($data as $fruit) {
                echo "<br><tr>";
                echo "<td><h3 style='float: left'>".$fruit["name"]."</h3></td>";
                echo "<td><button type=\"button\" id='editBtns' class=\"btn btn-primary modalShow\" data-toggle=\"modal\" data-edit_id=\"".$fruit['id']." \" href='#edit?id=".$fruit["id"]."' data-target=\"#edit\" style='margin-right: 1rem'>Edit</button>";

                echo "<a href='/about/deleteAction?name=".$fruit["name"]."' role='button' class=\"btn btn-danger\">Delete</a><br></td>";
                echo "</tr>";
            }

        ?>
        </table>
    </div>


    <?php
    if(isset($_POST['ok'])){
        echo $_POST['f_id'];
        echo $_POST['f_name'];
    }
    ?>

</div><!-- /.container  -->


<!-- Modal Starts Here -->
<div class="modal fade" id="addFruitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add A Fruit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">

                    <div class="starter-template">

                        <h1>Add A Fruit</h1>

                        <form action="/about/addAction" method="POST">

                            <input type="text" name="name" placeholder="Bananas ?" />

                            <input type="submit" />


                        </form>

                    </div>



                </div><!-- ./container -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Starts Here -->


<div class="modal hide fade edit" id="edit<?php $fruit["id"]  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">&times;
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Fruit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="starter-template">
                            <h1>Edit Fruit</h1>

                            <form action="/about/updateAction" method="POST">
                                <input type="text" name="id" id="id" value="" />
                                <input type="text" name="name" id="name" value="" />

                                <input type="submit" />
                            </form>

                        </div>

                    </div><!-- ./container -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </div>
</div>
