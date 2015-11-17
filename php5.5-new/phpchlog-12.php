<?php
    $hash = password_hash("dhananjay", PASSWORD_DEFAULT);
    echo $hash . PHP_EOL;
    
    var_dump(password_get_info($hash));
?>
<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$10$qxQuAsyPc8i8ZSXAAHvH9eMBHKa4Jto90jj/slgpRkmaLckAjuG1G';

if (password_verify('dhananjay', $hash)) {
    echo 'Password is valid!' . PHP_EOL;
} else {
    echo 'Invalid password.' . PHP_EOL;
}
?>