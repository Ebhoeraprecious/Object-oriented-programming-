Q2: When they say a code is depreciated explains in details what it means;

When a code or a function is depreciated it means it is no longer recommended for use and may be removed in the future. This can happen because of so many reasons like;

1.New and improved alternatives; a new a better way of achieving the same results has been introduced, making the old code or function obsolete.

2.Security reasons; the code or function ma have security vulnerabilities or weaknesses tat can be exploited, and it use is no longer recommended.

3.Compatibility issues; the code or function may not be compatible with newer versions of software, hardware or platforms, and its use may cause problems. 

When a code is depreciated it may work for a while, but its use is discouraged, and it may be removed or stop working in future.

Q3:<?php
interface action{
public function dosomething();
}
trait impossible{
public function highlyimpossible(){
echo "things are highly impossible in Nigeria";
}
}
trait useless{
public function howuseless(){
echo "some products are useless";
}
}
class exam implements action
{

use impossible , useless;
public function dosomething(){
echo "our exams has started";
}
}

$exam = new exam;
$exam->dosomething();
echo "<br>";
$exam->highlyimpossible();
echo "<br>";
$exam->howuseless();

    ?>































































