<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch ($oprator) {
            case '+':
                return $this->a + $this->b;
            break;

            case '-':
                return $this->a - $this->b;
            break;

            case '*':
                return $this->a * $this->b;
            break;

            case '/':
                return $this->a / $this->b;
            break;

            default:
                return "Sorry No command found";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if (isset($_POST['submit'])) {
    $result = $cal->getresult($_POST['n1'], $_POST['n2'], $_POST['op']);
}
