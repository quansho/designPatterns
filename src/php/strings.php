<?php

//print 'I have gone to the store.'; echo '</br>';
//print 'I\'ve gone to the store.'; echo '</br>';
//print 'Would you pay $1.75 for 8 ounces of tap water?'; echo '</br>';
//print 'In double-quoted strings, newline is represented by \n'; echo '</br>';

//----------\n Новая строка (ASCII 10)
//----------\r Возврат курсора (ASCII 13)
//----------\t Табуляция (ASCII 9)
//----------\\ Обратная косая черта
//----------\$ Знак доллара
//----------\” Кавычка
//----------\0 — \777 Восьмеричное значение
//----------\x0 — \xFF Шестнадцатеричное значение

//echo "I've gone to the store."; echo '</br>';
//echo "The sauce cost \$10.25."; echo '</br>';
//$cost = '$10.25';
//echo "The sauce cost $cost."; echo '</br>';
//echo "The sauce cost \$\061\060.\x32\x35.";echo '</br>';
//



//print <<< END
//It's funny when signs say things like:
//Original "Root" Beer
//"Free" Gift
//Shoes cleaned while "you" wait
//or have other misquoted words.
//END;

//print <<< PARSLEY
//It's easy to grow fresh:
//Parsley
//Chives
//on your windowsill
//PARSLEY;


//print <<< DOGS
//If you like pets, yell out:
//DOGS AND CATS ARE GREAT!
//DOGS;

//$variableBle = 'hi there';
//if ($variableBle > 0) {
//    $url = '/deal.php';
//    $text = 'Deal More Cards';
//} else {
//    $url = '/new-game.php';
//    $text = 'Start a New Game';
//}
//print <<< HTML
//There are <b>$variableBle</b> left.
//<p>
//<a href="$url">$text</a>
//HTML;

//$divClass = 'divClass';
//$ulClass = 'ulClass';
//$listItem = 'listItemClass';
//$html = <<< END
//<div class="$divClass">
//<ul class="$ulClass">
//<li>
//END
//    . $listItem . '</li></div>';
//print $html;

//$js = <<<'__JS__'
//<script>
//$.ajax({
//'url': '/api/getStock',
//'data': {
//'ticker': 'LNKD'
//},
//'success': function( data ) {
//$( "#stock-price" ).html( "<strong>$" + data + "</strong>" );
//}
//});
//</script>
//__JS__;
//print $js;


//$neighbor = 'Hilda';
//print $neighbor[3];

//$email = "driver@mail.ru";
//var_dump(strpos($email, '@')); //Функция strpos()
// возвращает индекс первой позиции в строке, в которой была найдена заданная подстрока.
//Если найти подстроку не удалось, strpos() возвра-
//щает false.
//Чтобы отличить возвращае-
//мое значение 0 от false, следует использовать оператор тождественности (===)
//
//или нетождественности (!==) вместо обычных операторов равенства (==)
//if (strpos($email, '@') === false) {
//    print 'There was no @ in the e-mail address!';
//}


//$substring = substr("HELLOWORLD!",0,10);
//print_r($substring);
//print substr('watch out for that tree',6,5);
//print substr('watch out for that tree',17);
//print substr('watch out for that tree',-6);


