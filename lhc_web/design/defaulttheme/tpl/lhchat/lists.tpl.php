<h1><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists','Choose what type of list you want to see');?></h1>

<ul class="circle">
    <li><a href="<?php echo erLhcoreClassDesign::baseurl('chat/pendingchats')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists','Pending chats');?></a></li>
    <li><a href="<?php echo erLhcoreClassDesign::baseurl('chat/activechats')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists','Active chats');?></a></li>
    <li><a href="<?php echo erLhcoreClassDesign::baseurl('chat/closedchats')?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists','Closed chats');?></a></li>    
</ul>
