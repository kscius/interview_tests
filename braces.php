<?php

/**
 * valdiate if al the braces are balanced in string variable $values = ['{[}]','{[}]}}'];
 * @param array $values
 * retunr YES OR NO array of strings
*/
function braces($values) {
    $Closed = [];
    
    foreach($values as $braces){
        $Nest       = [];
        $IsBalanced = 'YES';
        
        for($Index = 0; $Index < strlen($braces);$Index++){
            $Brace = $braces[$Index];
            
            if($Brace == '{' || $Brace == '[' || $Brace == '('){
                $Nest[] = $Brace;
            }
            else{
                if(count($Nest) === 0){
                    $IsBalanced = 'NO';
                    break;
                }
                
                $Top = array_pop($Nest);
                
                if($Brace == '}' && $Top != '{'){
                    $IsBalanced = 'NO';
                    break;
                }
                
                if($Brace == ']' && $Top != '['){
                    $IsBalanced = 'NO';
                    break;
                }
                
                if($Brace == ')' && $Top != '('){
                    $IsBalanced = 'NO';
                    break;
                }
            }
        }
        
        if(count($Nest) > 0){
            $IsBalanced = 'NO';
        }
        
        $Closed[] = $IsBalanced;
    }

    foreach($Closed as $index => $value){
        echo '<br>Braces <strong>['.$values[$index].']</strong> are balanced? <strong>'.$value.'</strong>';
    }
    
    return $Closed;
}

echo '<pre>';

braces([
    '{[()}]',
    '[{()()}({[]})]({}[({})])((((((()[])){}))[]{{{({({({{{{{{}}}}}})})})}}}))[][][]{',
    '[{()()}({[]})]({}[({})])((((((()[])){}))[]{{{({({({{{{{{}}}}}})})})}}}))[][][]]',
    '[{()([)}({[]})]({}[({})])((((((()[])){}))[]{{{({({({{{{{{}}}}}})})})}}}))[][][]',
    '{}[]()',
    '{[}]',
    ')',
    '}',
    ']',
    '[()]',
    '[{}]',
    '{][}'
]);