<?php 
echo '============== TASK 1 =============';
//echo "the class TextInput that contains:";
class TextInput{

    protected $inputString = '';
    public function add($text)
    {
        $this->inputString = $this->inputString.''.$text;
    }

    Public function getValue() 
    {
        return $this->inputString;
    }
}

//echo ' the class NumericInput that:<br>';

//Inherits from TextInput.
class NumericInput extends TextInput {
    protected $inputString = '';
    // Overrides the add method so that each non-numeric text is ignored.
    public function add($text)
    {
        if(is_numeric($text)==true){
            $this->inputString = $this->inputString.''.$text;
            return $this->inputString;
        }
    }
}

$input = new NumericInput();
$input->add(1);
$input->add('a');
$input->add(0);
echo 'OUTPUT : '.$input->getValue();

?>
