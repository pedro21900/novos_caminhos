<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('Prova');
 
/*
*
*/
PHPClassSession('Q1', __LINE__);
        function calcSeculo($year)
        {
    
            if ($year%100==0)
            {
            $resultado=  intval($year /=100);
                
            }
            else
            {
            $resultado=   intval($year /=100)+1;
            }
        
            echo "<p>$resultado</p>";
    
    };
    calcSeculo(1975);

PHPClassSession('Q2', __LINE__);

    function checkPalindrome($inputString)
    {

        if ($inputString === strrev($inputString)) {
            echo"<p class='trigger accept'>true</p>";
        } else {
            echo"<p class='trigger error'>false</p>";
        }
    }
    checkPalindrome("aabaa");

PHPClassSession('Q3', __LINE__);

    $vetor = [1, 2, -5, 37, 10];

        function adjacentElementsProduct($inputArray)
        {

            $tamanho = count($inputArray);
            $produto = [];

            for ($i = 0; $i < $tamanho - 1; $i++) {

                $produto[$i] = $inputArray[$i] * $inputArray[$i + 1];
            }
            var_dump($produto);
            $resultado=max($produto);
        echo "<p>O resultado é: $resultado </p>";
        
        }

        adjacentElementsProduct($vetor);

PHPClassSession('Q4', __LINE__);

    function makeArrayConsecutive2($statues)
    {
        $full = range(min($statues), max($statues));
        $diff = array_diff($full, $statues);
        $statues1= count($diff);
        echo "<p>Faltam $statues1 estatuas para completar a coleção , e os valores que faltam são {".implode(",",$diff)."} </p>";
    }
    $statues = [6, 2, 3, 8];
    makeArrayConsecutive2($statues);

PHPClassSession('Q5', __LINE__);

    $sequence = [1, 2, 3,1];    
    function almostIncreasingSequence($sequence)
    {
    
    $tamanho = count($sequence);
    $deletado=0;
    $count=0;
        for ($i = 0; $i < $tamanho-1; $i++) {
            if ($sequence[$i]<$sequence[$i+1])
            {
                 $verifica[$i]=true;
            }
            else
            {
             $deletado=$sequence[$i+1];
                $verifica[$i]=false;
            }
        }
    $tamanho = count( $verifica);
        for ($i = 0; $i < $tamanho-1; $i++) {

            if($verifica[$i]!==false && $count==0)
            {
                 echo "<p class='trigger error'>Foi removido o valor : $deletado da sequencia</>";
                $sequence[$i+1]=null;
                $count++;
            }
            else
            {
                if($verifica[$i]==true){}
                else{
                    
                    echo "<p class='trigger error'>Não há nenhum elemento neste array que possa ser removido para obter uma sequência estritamente crescente.</>";
                }           
                }
        }
    } 
    almostIncreasingSequence($sequence);
        
PHPClassSession('Q6', __LINE__);
    function tamanhoString($str)
    {    
        
        return strlen($str);
    }

    function allLongestStrings($inputArray)
    {

        $strLengths = array_map("tamanhoString", $inputArray);
        $keys = array_keys($strLengths, max($strLengths));
        $allLongestStrings = array_values(array_intersect_key($inputArray, array_flip($keys)));

        var_dump($allLongestStrings);
    }
    $inputArray = ["aba", "aa", "ad", "vcd", "aba"];
    allLongestStrings($inputArray);

PHPClassSession('Q7', __LINE__);

    function commonCharacterCount($s1, $s2)
    {

        $s1 = str_split($s1);
        $s2 = str_split($s2);
        $c = 0;

        foreach ($s1 as $key => $letter) {
            
            $key2 = array_search($letter, $s2);

            if ($key2 !== false) {
                
            unset($s2[$key2]);
            
                $c++;
            }
        }

        echo "<p>$c</p>";
    }

    $s1 = "aabcc";
    $s2 = "adcaa";
    commonCharacterCount($s1,$s2);
PHPClassSession('Q8', __LINE__);


    function isLucky($n)
    {
        
        $booleano= array_sum(str_split(substr($n, 0, (strlen($n) / 2))))
            == array_sum(str_split(substr($n, (strlen($n) / 2))));
        var_dump($booleano);
        }
    $n = "2552";
    isLucky($n);

PHPClassSession('Q9', __LINE__);

function sortByHeight($a)
{
    //Keys das arvores
    $keys = array_keys($a, -1);
    //Eliminação das arvores
    $sort_me = array_diff($a, [-1]);
    //reordenação das pessoas
    asort($sort_me);
    //indexando array
    $sorted = array_values($sort_me);
    
    foreach ($keys as $key) {
        
        array_splice($sorted, $key, 0, -1);
    }
    var_dump($sorted);
}
$a = [-1, 150, 190, 170, -1, -1, 160, 180];
sortByHeight($a);

PHPClassSession('Q10', __LINE__);

$inputString = "foo(bar)baz(blim)";
// a saída deve ser "foorabbazmilb"

function reverseInParentheses($inputString)
{
    $inversions = substr_count($inputString, '(') + 1;
    while ($inversions) {
        $inversions--;
        $open = strrpos($inputString, '(');
        var_dump($open);
        $close = (strpos($inputString, ')', $open)) - $open + 1;
        var_dump($close);
        $invert = str_replace(['(', ')'], '', strrev(substr($inputString, $open, $close)));
        var_dump($invert);
        $inputString = substr_replace($inputString, $invert, $open, $close);
    var_dump($inputString);
    }
   var_dump($inputString);
}
reverseInParentheses($inputString);