<?php

use Model\postModel;

function homePage()
{
?>

    <body class='container'>

        <h1 class='center'>Home</h1>
        <div>
            <?php
            $model = new postModel();
            $results = $model->getPosts();
            if ($results == null) {
            ?>
                <p>Không có dữ liệu</p>
                <?php
            } else {
                foreach ($results as $records) {
                ?>
                    <h3><?php echo $records['title'] ?></h3>
                    <p><?php echo $records['content'] ?></p>
            <?php
                }
            }
            ?>
        </div>

    </body>
<?php
}
