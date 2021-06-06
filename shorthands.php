<?php

$loggedIn = true;
$array = [3, 5, 2, 9];
############### Shorthand with ternirary operator

/* if ($loggedIn) {
echo "your are logged in";
} else {
echo "you are not logged in";
}

echo ($loggedIn) ? "your are logged in" : "you are not logged in ";

$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;

$age = 20;
$score = 5;

echo "Your score is: " . ($score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average"));
 */

?>

<?php
######################### Shorthand if and else
;?>

<!-- <div>
      <?php if ($loggedIn) {?>
            <h1>Welcome User</h1>
      <?php } else {?>
            <h1>Wecome Guest</h1>
      <?php }?>
</div> -->

<!-- <div>
         <?php if ($loggedIn): ?>
               <h1>Welcome User</h1>
         <?php else: ?>
               <h1>Welcome Guest</h1>
         <?php endif;?>
</div> -->

<?php
######################### Shorthand Loop
;?>

<!--  <div>
         <?php foreach ($array as $item): ?>
            <ul>
                  <li>
                        <?php echo ($item); ?>
                  </li>
            </ul>
         <?php endforeach;?>
</div> -->


 <div>
      <?php for ($i = 0; $i < 10; $i++): ?>
      <li><?php echo $i; ?></li>
      <?php endfor;?>
</div>