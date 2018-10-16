#!/usr/bin/php
<?PHP
while (1)
{
    print ("Enter A Number : ");
    $i = fgets(STDIN);
    $num = trim($i);
    if (feof(STDIN))
        break ;
    if (is_numeric($num))
    {
        if ($num % 2 == 0)
            print ("the num $num is even\n");
        else
            print ("the num $num is odd\n");
    }
    else
        echo ("$num not a number\n");
}
echo ("\n");
?>
