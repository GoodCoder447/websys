<?php 
	function factorial($number) { 

	    if ($number < 2) { 
	        return 1; 
	    } else { 
	        return ($number * factorial($number-1)); 
	    } 
	}

  abstract class Operation {
    protected $operand_1;
    protected $operand_2;
    public function __construct($o1, $o2) {
      // Make sure we're working with numbers...
      if (!is_numeric($o1)) {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
      $this->operand_2 = $o2;
    }
    public abstract function operate();
    public abstract function getEquation(); 
  }

  class Addition extends Operation {
    public function operate() {
    	if(!is_numeric($this->operand_2)) {
        throw new Exception('Non-numeric operand.');
    	}
      return $this->operand_1 + $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }


// Part 1 - Add subclasses for Subtraction, Multiplication and Division here
  class Subtraction extends Operation {
    public function operate() {
    	if(!is_numeric($this->operand_2)) {
    	  throw new Exception('Non-numeric operand.');
    	}
      return $this->operand_1 - $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }
  class Multiplication extends Operation {
    public function operate() {
      if(!is_numeric($this->operand_2)) {
        throw new Exception('Non-numeric operand.');
    	}
      return $this->operand_1 * $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }
  class Division extends Operation {
    public function operate() {
    	if ($this->operand_2 == 0 || !is_numeric($this->operand_2)) {
    		return 'NaN';
    	}
      return $this->operand_1 / $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Cube extends Operation {
    public function operate() {
      return $this->operand_1 * $this->operand_1 * $this->operand_1;
    }
    public function getEquation() {
      return $this->operand_1 . '^3 = ' . $this->operate();
    }
  }

  class Factorial extends Operation {
    public function operate() {
      return factorial($this->operand_1);
    }
    public function getEquation() {
      return $this->operand_1 . '!' . ' = ' . $this->operate();
    }
  }


// End Part 1




// Some debugs - un comment them to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";




// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Part 2 - Instantiate an object for each operation based on the values returned on the form
//          For example, check to make sure that $_POST is set and then check its value and 
//          instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs

  try {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
     }
    if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
      $op = new Subtraction($o1, $o2);
    }
    if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
      $op = new Multiplication($o1, $o2);
    }
    if (isset($_POST['div']) && $_POST['div'] == 'Divide') {
      $op = new Division($o1, $o2);
  	}
  	if (isset($_POST['cube']) && $_POST['cube'] == 'Cube') {
      $op = new Cube($o1, $o2);
  	}
  	if (isset($_POST['fact']) && $_POST['fact'] == 'Factorial') {
      $op = new Factorial($o1, $o2);
  	}
  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>Lab 7</title>
<style>
body {
	text-align: center;
	background-color: #ffffe6;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<h1>
	Coolest Calculator in the World
	</h1>
  <pre id="result">
  <?php 
    if (isset($op)) {
      try {
        echo $op->getEquation();
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }
      
    foreach($err as $error) {
        echo $error . "\n";
    } 
  ?>
  </pre>
  <br/>
  <form method="post" action="lab6start.php">
    <input type="text" name="op1" id="name" value="" />
    <input type="text" name="op2" id="name" value="" />
    <br/>
    <br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <input class="ui-button ui-widget ui-corner-all" type="submit" name="add" value="Add"/>  
    <input class="ui-button ui-widget ui-corner-all" type="submit" name="sub" value="Subtract" />  
    <input class="ui-button ui-widget ui-corner-all" type="submit" name="mult" value="Multiply" />  
    <input class="ui-button ui-widget ui-corner-all" type="submit" name="div" value="Divide" />  
    <br/>
    <input class="ui-button ui-widget ui-corner-all" type="submit" name="cube" value="Cube" />  
    <input class="ui-button ui-widget ui-corner-all" type="submit" name="fact" value="Factorial" />  
  </form>

  <br/>
  <h4>
  	Rules:
  </h4>
  <p>
  	- Both factorial and cube only rely on the first entry
  </p>
  <p>
  	- You cannot divide by 0.
  </p>
  <p>
  	- Entries must be numeric characters, less there be an exception.
  </p>
</body>
</html>

