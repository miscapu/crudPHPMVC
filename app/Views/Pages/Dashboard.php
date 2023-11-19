<?php

include __DIR__.'/../Layout/header.php';
?>


    <!-- Table HTML -->

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        <?php if ( isset( $dataRows ) )
            foreach ( $dataRows as $dataRow ):
        ?>
        <tr>
            <th scope="row"><?= $dataRow[ 'id' ]; ?></th>
            <td><?= $dataRow[ 'name' ]; ?></td>
            <td><?= $dataRow[ 'email' ]; ?></td>
            <td><?= $dataRow[ 'phone' ]; ?></td>
        </tr>
        <?php
            endforeach;
        ?>

        </tbody>
    </table>

    <!-- Table HTML End -->


<?php
include __DIR__.'/../Layout/footer.php';