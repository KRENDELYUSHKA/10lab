<?php
if(isset($_POST["go"]))
{
	class urav
	{
		public $x;
		public $a;
		public $b;
		public $c;

		function __construct($x, $a, $b, $c)
		{
		$this->x = x;
		$this->a = a;
		$this->b = b;
		$this->c = c;
		}

		function glhf()
		{
			if($this->x <= 3)
			{
				echo $this->x * $this->x - 3 * $this->x + 9 + "<br>";
			}
			else
			{
				echo $this->x * $this->x * $this->x + 6 + "<br>";
			}
		}
		function ggwp()
		{
			echo $this->a * $this->b * $this->c + "<br>";
		}
	}
	$x = $_POST["x"];
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];
	$y = new urav($x, $a, $b, $c);
	$y->glhf();
	$y->ggwp();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="x">
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="text" name="c">
        <input type="submit" name="go">
    </form>
</body>

</html>