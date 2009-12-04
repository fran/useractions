<!--<span name="useractions_block_actions_autenticado.tpl.php en theme/garalandf"></span>-->
<?php
  /**
  * Variables in this template:
  * $items:
  *         $items['links']:  Array with all the links to render in the block
  *         $items['info']: User information
  *              $items['name']: Link to the user profile
  *              $items['image']: User's image
  **/
  
?>
<!--User block -->
<div>
  <?php echo $items['info']['name'];?>
  <img src="<?php echo $items['info']['image'];?>"/>
</div>

<!--Actions block -->
<div>
    <ul>
    <?php foreach($items['links'] as $link){?>
        <li><?php print($link); ?></li>
    <?php }?>
    </ul>
</div>

