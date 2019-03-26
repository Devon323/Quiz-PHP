<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel='stylesheet' type='text/css' href=quizzy.css>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    
    <?php
$answers = ["PHP: Hypertext Preprocessor",
            "Javascipt",
			"$",
			"strpos()",
			"GET displays the form values entered in the URL of the address bar where as POST does not.",
			"Returns all the keys of an array",
			"in_array()",
			"trim",
			"YES",
			"define",
			"Search for character within a string",
			"headers_list()",
			"Print can take multiple parameters where as echo cannot",
			"null",
			"&&&",
			"Superglobals",
			"if Statement",
			"Scripting",
			"Body",
			"Open-Source",
];
$score = 0;
foreach($_POST as $v){
	switch ($v) {
	case $answers [0]: $score++;
	   break;
	case $answers [1]: $score++;
	   break;
	case $answers [3]: $score++;
	    break;
	case $answers [4]: $score++;
	    break;
    case $answers [5]: $score++;
	    break;
    case $answers [6]: $score++;
	    break;
    case $answers [7]: $score++;
	    break;
    case $answers [9]: $score++;
	    break;
	case $answers [10]: $score++;
	    break;
	case $answers [11]: $score++;
	    break;
	case $answers [12]: $score++;
	    break;
	case $answers [13]: $score++;
	    break;
	case $answers [14]: $score++;
	    break;
	case $answers [15]: $score++;
	    break;
	case $answers [16]: $score++;
	    break;
	case $answers [17]: $score++;
	    break;
	case $answers [18]: $score++;
	    break;
	case $answers [19]: $score++;
	    break;

   }

}

if (isset($_POST['q1'])){
	echo"<h2>". "Your Total Score is ". $score." out of ". count($answers)."</h2>"."<br>";
	 if ( $score < 10){
	 	echo "<h2>"." Below Average Try Harder!"."</h2>";
	 }else if ($score >= 10 && $score < 15){
         echo "<h2>"."Average score"."</h2>";
     }else if ($score >= 15){
         echo "<h2>"."Congratulations! You scored above Average."."</h2>";
     }else{
         "";
     }
}

?>


<h1>Quiz Challenge</h1>
    <p>You will get 1 point for each correct answer. Your score and total score will always be displayed.</p>

<form action=<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?> method = "post">
    <?php
    $questions = [
        [
            "What does PHP stand for?",
            "The PHP syntax is most similar to",
            "All variables in PHP start with which symbol?",
			"Which of the following function is used to locate a string within a string?",
			"What is the difference between GET and POST method?",
			"What is array_keys() used for?",
			"Which of the following function checks if a specified value exists in an array?",
			"Which function is used to Strip whitespace (or other characters) from the beginning and end of a string?",
			"Can echo in php accept more than 1 parameter?",
			"Which of the following is used to declare a constant",
			"What is the strpos() function used for?",
			" ____________ function in PHP Returns a list of response headers sent (or ready to send)",
			"What is the difference between echo and print?",
			"A value that has no defined value is expressed in PHP with the following keyword",
			"Which of the following is NOT a valid PHP comparison operator?",
			"What are the built-in variables that are always available in all scopes?",
			"What is the name of the statement type that continues to execute code so long as a condition remains TRUE?",
			"PHP is a useful and powerful ____ language that can be implemented easily into HTML. This also means that it is not compiled, but instead processed as necessary.",
			"Which section of an HTML document houses PHP scripts?",
			"The PHP source code is both available to everyone, and can be edited or modified by anyone. This practice or type of language is called _____.",
        ],
        [
            "q1", "q2 ","q3","q4","q5",
			"q6","q7","q8","q9","q10",
			"q11","q12","q13","q14",
			"q15","q16","q17","q18","q19","q20"
        ],
        [
            ["Preprocessed Hypertext Page","Hypertext Markup Language", "PHP: Hypertext Preprocessor", "Hypertext Transfer Protocol"],
            
			["Javascipt","VBScript", "Dagrin", "Pearl& C"],
            
			["%", "$","#", "!"],
			
			["search() ", "locate()"," strpos()","None of the above"],
			
			["GET displays the form values entered in the URL of the address bar where as POST does not.",
			 " POST displays the form values entered in the URL of the address bar where as GET does not."],
			 
			["Compares array keys, and returns the matches	",
			
			"Checks if the specified key exists in the array",
			"Returns all the keys of an array",
			"Both b and c above"],
			
			["extract()","in_array()","key()","krsort()"],
			
			["trim_str","strip_str","strip","trim"],
			
			["YES","NO","MAYBE","NOT SURE"],
			
			["const","constant","define","#pragma"],
			
			["Find the last character of a string	",
			"Both b and c",
			"Search for character within a string",
			"Locate position of a string’s first character"],
			
			["header()","headers_list()","header_sent()","header_send()	"],
			
			["They both behave the same.",
			"Print can take multiple parameters where as echo cannot",
			"Echo can take multiple parameters where as print can",
			"Print is a function where as echo is not."],
			
			["undef","null","None","There is no such concept in PHP"],
			
			["!=",">=","&&&","==="],
			["Superglobals","Baseline","Predefined Commands","Constant"],
			["While Statement","Else Statement","If Statement","For Statement"],
			["Scripting","Coding","Design","Evolving"],
			["Meta","Head","Title","Body"],
			["Open-Source","Free","Premium","Accessible"],
			
        ],
    ];
 
    for($i =0; $i < count($questions[0]); ++$i){
        echo "\n"."<h4>". $questions [0][$i]. "</h4>";
        for($z = 0; $z < count($questions[2][0]); ++$z){
            echo "\n <input type = \"radio\" class = \"btn-btn\" name = \"". $questions[1][$i]."\"
            value=\"" . $questions[2][$i][$z]. "\"> ". $questions [2][$i][$z]. "<br>";
        }
		
		echo "<br>";
		
	}
		
    ?>
    <button id="mybutton" type="submit" value="SUBMIT TO GET SCORE ">Submit</button>
    </form>
	
	

</body>
</html>