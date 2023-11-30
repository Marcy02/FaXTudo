<?php
    include_once 'autenticacao.php';
    
    session_destroy();
    
    header("Location: /index.php");