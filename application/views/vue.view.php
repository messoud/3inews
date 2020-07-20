<?php
    namespace Inews;
    defined('INEWS') or die('Acces interdit');
    $this->setPageTitle('vue1');
        
    //$this->addStyleSheet('css/background-red.css');
    //$this->addStyleSheet('css/background.css');
    //\F3il\Messages::setMessageRenderer('\Sistr\MessagesHelper::messagesRenderer'); 
?>
<div>
     
    <h2>Vue 1</h2>
    
      [%MESSAGES%]
      
    <p><?php echo __FILE__; ?></p>
    <p><?php echo $this->titre . "</br>"; ?></p>
    <p><?php
        foreach ($this->users as $key) {
            echo $key['nom'] . '<br>';
        }
       
        ?>
    </p>
</div>

