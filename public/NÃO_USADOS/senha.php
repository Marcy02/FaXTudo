<?php

// temporário: apenas para gerar o hash da senha
$a = password_hash('1234', PASSWORD_DEFAULT);
echo password_hash('1234', PASSWORD_DEFAULT);
?> <br> <?php
echo "a = " . $a;