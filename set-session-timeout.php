<?php

// Configure o timeout para 10 segundos
$timeout = 10;

ini_set( "session.gc_maxlifetime", $timeout );
ini_set( "session.cookie_lifetime", $timeout );

// Depois de setar, inicia a sessão
session_start();

// Necessário zerar o cookie
$sessionName = session_name();
if( isset( $_COOKIE[ $sessionName ] ) ) {
	setcookie( $sessionName, $_COOKIE[ $sessionName ], time() + $timeout, '/' );
}
