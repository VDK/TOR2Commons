<?php

require_once 'vendor/autoload.php';

$token = '';

$tor = new \Zelenin\Tor ( $token );

// $result = $tor->getToken( $email = '', $password = '' );

// $result = $tor->getStatus();

// $result = $tor->getUserInfo();

// $result = $tor->getPreferences();

// $result = $tor->getFriendList();

// $result = $tor->getTagList();

// $result = $tor->getStreamPreferencesList();

// $result = $tor->updateStreamPreferencesList();

// $result = $tor->renameFolder( 'user/-/label/web2', 'user/-/label/web' );
// $result = $tor->renameFolder( 'web', 'web2' );

// $result = $tor->removeFolder( 'soft' );

// $result = $tor->getUnreadCount();

// $result = $tor->getSubscriptionsList();

// $result = $tor->getSubscriptionsOpml();

// $result = $tor->addSubscription( 'http://torbamusic.com/feed' );

// $result = $tor->updateSubscription( 'feed/5206161c205f3168ff003fd3', $t = 'Test', $a = 'music', $r = false );
// $result = $tor->updateSubscription( '5206161c205f3168ff003fd3', $t = 'Test2', $a = 'music', $r = true );

// $result = $tor->removeSubscription( 'feed/52060e5bc70bc2a0e7003881' );

// $result = $tor->getItemIds( 'user/-/state/com.google/reading-list' );

// $result = $tor->getItemContents( '52010ef8a201de161300dff3' );
// $result = $tor->getItemContents( '52010ef8a201de161300dff3', 'atom' );

// $result = $tor->getStreamContents( 'web' );
// $result = $tor->getStreamContents( 'web', 'atom' );

// $result = $tor->markAllAsRead( 'user/-/state/com.google/reading-list' );

// $result = $tor->updateItems( '52010ef8a201de161300dff3', false, true );

// print_r( $result );