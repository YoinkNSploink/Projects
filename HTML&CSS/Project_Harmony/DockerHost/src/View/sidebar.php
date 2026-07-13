<?php if($side->num_rows > 0):?>
    <?php while($side_row = $side->fetch_assoc()):?>

        <li class="bigbox-horizontal bg-color-Lblack box-rounded Tmargin-0p1 border-trans">
            <button class="btn btn-primary p-1" onclick="stopMessages(); OpenConvo(<?php echo $side_row['Conversation_ID']?>, <?php echo $side_row['User_ID']?>, 'Content');"><?php echo $side_row['Nickname']?></button>
        </li>
        

    <?php endwhile;?>    
<?php endif;?>  