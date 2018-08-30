<?php
include "top.php";
require_once("lib/Restaurants.php");
?>
<article>
    <?php
    echo '<!-- Creating List -->';
    $restaurantList = new RestaurantLists($thisDatabaseWriter);
    echo '<!-- Finished List -->';
    ?>
</article>
<?php

include "footer.php"; ?>

</body>
</html>