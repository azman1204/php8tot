<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new \Html\Table();
$table->title = "My table";
$table->numRows = 5;

include 'html.php';
use Util\Table as DTable; // bg alias / nama lain
//$dinner_table = new \Util\Table();
$dinner_table = new DTable();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$table->message();
$dinner_table->message();
?>
</body>
</html>