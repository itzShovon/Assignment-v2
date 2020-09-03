<?php
namespace App\Plagiarism;
/*******************************************************************************
* Author: Riccardo Castagna MBA, web developer - Palermo (ITALY)               *
* This class is useful to compare two different texts in the hypothesis that   *
* the two source texts have a good spelling and a correct punctuation. It      *
* finds similar sentences and returns the percentages, these percentages are   *
* the measures of how much the sentences are similar with each others.         *
* Possible applications and uses could be in the field of journalism, for      *
* example, to find the similar articles, in the cases of plagiarism, for       *
* investigations of various kinds when it is necessary to analyze and compare  *
* texts with each other.                                                       *
*                                                                              *
* In a text every sententence should end with a kind of end punctuaction.      *
* The kinds of end puntuaction, AT THE END of a sentence are five and could    *
* be: "." or ";" or "..." or "!" or "?", only these denotes the end of a       *
* sentence.                                                                    *
* So it need to develop something that find every end puntuaction, isolate     *
* all sentences and than compare each other, all                               *
* sentences, one at a time, contained in the text 1, with all sentences        *
* contained in the text 2. Right ... ? Ok, good, let go on !                   *
*******************************************************************************/
class MatchChecker{
    private static function formatText($scrtxt, $symbol){
        $punctuation = array( '.' , ';' , '!' , '?','...' );
        $sym         = array($symbol,$symbol,$symbol,$symbol,$symbol);
        // $txt         = str_replace($punctuation,$sym,$scrtxt);
        // Custom implementation of N-Gram algorithm only by dividing into chunk
        $txt = chunk_split($scrtxt, 4, 'x_#_z');
        // dd($txt);
        return $txt;
    }

    private static function strafter($string, $substring) {
        $pos = strpos($string, $substring);
        if ($pos === false)
            return $string;
        else
            return(substr($string, $pos+strlen($substring)));
    }

    private static function sentences_num($sourceText, $symbol){
        // $q = count($symbol);
        $q = count((array)$symbol);
        $x = 0;
        $n = 0;
        do {
            $n += substr_count($sourceText, $symbol[$x]);
            $x++;
        } while($x <= ($q-1));
        return $n;
    }

    /*******************************************************************************
     * The function formatText($scrtxt) replace all end puntuaction with a         *
     * unique given symbol.                                                        *
     * The function sentences_num($sourceText) count the number of symbols.        *
     * Kwowing the number of the symbols given by the                              *
     * function sentences_num($sourceText),                                        *
     * the next step will be to extract all sentences beetween the symbols         *
     * and put all the sentences into an array.                                    *
    *******************************************************************************/

    /*******************************************************************************
     * function isolate find the end of every sentence where I have insert a       *
     * $symbol and than build an array with all sentences isolated                 *
    *******************************************************************************/
    private static function isolate($srcTxt, $symbol, $numofsymbols){
        $g = 0;
        $strarray[0] = $srcTxt;
        $y = 1;
        do {
            $srcTxt = MatchChecker::strafter($srcTxt,$symbol);
            $z = ($y-1);
            $strarray[$y] = $srcTxt;
            if($strarray[$y]===$strarray[$z])
                break;
            $g = $y;
            $y++;
        }while($y <= $numofsymbols);
        $f = 0;
        do {
            if ($f < $numofsymbols){
                $f_1 = ($f + 1);
            } else {
                $f_1 = $numofsymbols;
            }
            $ab = str_replace(str_replace($symbol, "", $strarray[$f_1]), "", str_replace($symbol, "", $strarray[$f]));
            $strarray_1[$f]= $ab;
            $f++;
        }while($f <= $g);
        $strarray_1[$g]=$strarray[$g];
        return $strarray_1;
    }

    /*******************************************************************************
     * the function correlationText($text_1,$text_2), thank to the magic php       *
     * function similar_text : http://php.net/manual/en/function.similar-text.php  *
     * inside this function, that saved me to process some stat algorithm, return  *
     * the percentage of how much two texts are similar with each other            *
    *******************************************************************************/

    public static function correlationText($text_1,$text_2){
        $ln_1 = strlen($text_1);
        $ln_2 = strlen($text_2);
        if ($ln_1 >= $ln_2){
            similar_text($text_2, $text_1, $percent);
        }else{
            similar_text($text_1, $text_2, $percent);
        }
        return $percent;
    }

    /*******************************************************************************
     * cleanText is an optional function, remove specialchars and convert the text *
     * into lower case. When you set this option to be TRUE the similitude         *
     * percentange became a bit higher. The more homogeneous the two texts are,    *
     * the better the analysis will be and, therefore, the result.                 *
     * For better analysis is good to set this option to TRUE.                     *
    *******************************************************************************/
    public static function cleanText($text){
        $string =  preg_replace('/[^a-z]+/i', ' ', mb_strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','_', $text), 'UTF-8'));
        return $string;
    }

    /*******************************************************************************
     * The function processText exec the functions and retun the array with all    *
     * sentences ready to be compared                                              *
    *******************************************************************************/
    public static function processText($scrtxt){
        $text = MatchChecker::formatText($scrtxt, 'x_#_z');
        $num  = MatchChecker::sentences_num($text,'x_#_z');
        $txt = MatchChecker::strafter($text,'[#_start]');
        $arr = MatchChecker::isolate($txt, 'x_#_z', $num);
        return $arr;
    }

    // N-Gram Algorithm implementation
    public static function nGrams($word, $n = 3){
        $len = strlen($word);
        $ngram = array();

        for($i = 0; $i + $n <= $len; $i++){
            $string = "";
            for($j = 0; $j < $n; $j++){
                $string .= $word[$j + $i];
            }
            $ngram[$i] = $string;
        }
            return $ngram;
    }

    /*******************************************************************************
     * the function compareText($scrtxt_1, $scrtxt_2, $level, $specialchars=false) *
     * this function has four param:                                               *
     * 1) param 1 is a source text to compare                                      *
     * 2) param 2 is the sencond source text to compare                            *
     * 3) param 3 is an integer from 0 to 100; if it is set to 0 it will return all*
     * sentences with all percentages of similarity. if it is set to 100 it will   *
     * return only the sentences that are exactly the same. A good set up could be *
     * around 60 and it will return all sentences whose similarity is greater than *
     * 60 %.                                                                       *
     * 4) param 4 default is set to false, if it set to true it will convert the   *
     * two text in lowercase and will remove all special charset                   *
    *******************************************************************************/

    public static function compareText($scrtxt_1, $scrtxt_2, $level = 60, $specialchars = false ){
        $response = [];

        $arr_1 = MatchChecker::processText($scrtxt_1);
        $arr_2 = MatchChecker::processText($scrtxt_2);

        // $arr_1 = MatchChecker::nGrams($scrtxt_1);
        // $arr_2 = MatchChecker::nGrams($scrtxt_2);

        foreach ($arr_1 as $key_1 => $value_1){
            $nr1 = $key_1;
            if ($specialchars==true){
                $val_1 = MatchChecker::cleanText($value_1);
            }else{
                $val_1 = $value_1;
            }
            foreach ($arr_2 as $key_2 => $value_2){
                $nr2 = $key_2;
                if ($specialchars==true){
                    $val_2 = MatchChecker::cleanText($value_2);
                } else{
                    $val_2 = $value_2;
                }
                $index = MatchChecker::correlationText($val_1,$val_2);

                if ($index >= $level){
                    // $q = number_format($index, 2, ',', '.').'%';
                    $q = number_format($index);
                    $temp = [
                        "similarity" => $q,
                        "string_1" => $val_1,
                        "string_2" => $val_2,
                    ];

                    array_push($response, $temp);
                }
            }
        }
        return $response;
    }
}
