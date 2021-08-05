//Transform this : "<option value='xx'>XXX</option>" to this : "'XXX'=>'xx',"
//Might be useful for large choice menus as Language or Country choice you can find on Web.



<?php
error_reporting(0);
$file = fopen("languages.txt", "r+"); // file to read from 
$filed = fopen("languagesdone.txt","r+"); // file to write to
$countries = array();
$shorts =array();

if($file){
    while(($line =fgets($file))!==false){
      
        if (preg_match('/(?<=>)(.*?)(?=<)/', $line, $countries)) {
                   
        }
        
        if (preg_match('/\'([a-z]){2}\'/', $line, $shorts)) {
                         
        }
        $string="'".$countries[0]."'"."=>"."$shorts[0]".",";
        
       
        fwrite($filed,$string.PHP_EOL);
}

}
php?>
