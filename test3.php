<?php 

class NumericInput{
	private string $value = "";
	public function add (string $param)
	{
		if (is_numeric($param)) {
			$this->value .= $param;
		}
	}
	public function getValue()
	{
		echo $this->value;
	}
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0.5');
echo $input->getValue();