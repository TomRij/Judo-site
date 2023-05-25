<?php

$uri = $_SERVER["REQUEST_URI"];

require_once "Model/conversationModel.php";

if($uri == "/chat"){
    $users = selectAllusers($dbh);
    require_once "Templates/Conversation/conversation.php";
    
}elseif (str_starts_with($uri, "/conversation")) {
    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        $conversation = selectConversation($dbh, $userId);
        if ($conversation != null) {
            // récupérer messages
            require_once "Templates/Conversation/conversation.php";
        } else {
            createConversation($dbh);
            $conversationId = $dbh->lastInsertId();
            createConversationUtilisateur($dbh, $userId, $conversationId);
            require_once "Templates/Conversation/conversation.php";
        }
    }
}