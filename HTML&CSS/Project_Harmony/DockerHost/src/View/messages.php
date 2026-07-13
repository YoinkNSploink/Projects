<?php if($messages->num_rows > 0):?>
    <?php while($message = $messages->fetch_assoc()):?>

        <div>
            <div class="p-2 my-1 text-color-white rounded align-self-start">
                <?php echo $message['Nickname']?>
            </div>
            <div class="p-2 my-1 text-color-white rounded align-self-start">
                <?php echo $message['Message_content']?>
            </div>
        </div>
            

        
    <?php endwhile;?>    
    <input id="convo_id" type="hidden" value="<?php echo $ids['Conversation_ID']?>">
    <input id="other_user_id" type="hidden" value="<?php echo $other_user['ID']?>">

<?php endif;?>    







