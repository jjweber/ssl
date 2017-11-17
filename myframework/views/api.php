<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>


        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Authors</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <?php

            //var_dump($data);
                foreach ($data as $item) {
                    echo "<tr>";
                    if ($item["volumeInfo"]["title"]) {
                        echo "<td>".$item["volumeInfo"]["title"]."</td>";
                    } else {
                        echo "<td>No Title Provided</td>";
                    }
                    echo "<td>";
                    if ($item["volumeInfo"]["authors"]) {
                        foreach ($item["volumeInfo"]["authors"] as $authors) {

                            if ($authors > 1) {
                                echo $authors . ",";
                            } else {
                                echo $authors;
                            }

                        }
                    } else {
                        echo "No Author Provided";
                    }
                    echo "</td>";
                    if ($item["volumeInfo"]["description"]) {
                        echo "<td>".$item["volumeInfo"]["description"]."</td>";
                    } else {
                        echo "<td>No Description Provided</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </table>

    </div>


</div><!--  /.container  -->