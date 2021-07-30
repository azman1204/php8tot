<?php 
// kita prefer alternative teknik dlm kes if..else yg melibatkan HTML yg panjang
// ini bertujuan utk senang lihat mula dan tamat if..else
$show = true;
if ($show) : ?>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
<?php else : ?>
    <h1>Hi</h1>
    <h1>Hi</h1>
    <h1>Hi</h1>
<?php endif; ?>

<?php if ($show) { ?>
    <p>Hello World</p>
    <p>Hello World</p>
    <p>Hello World</p>
<?php } else { ?>
    <h1>Hi</h1>
    <h1>Hi</h1>
    <h1>Hi</h1>
<?php } ?>