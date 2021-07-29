<?php
// jika print string yg pendek, guna echo OR print
echo "
abc
def
";

// heredoc biasa dipakai jika print HTML yg panjang
$foo = 'bar';
echo <<<EOT
Hello $foo
Goodbye!
EOT;
?>

<?php 
echo <<<EOT
<h1 class="btn">Hello World</h1>
<h1>Hello World</h1>
<p>Hello World</p1>
EOT;
?>