<h1>
    <?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2017/10/20
     * Time: 12:31
     */
   /* $x=5;  //ȫ��������
    function myTest(){
        $y=10;
        echo '<p>�����ڲ��ı�����</p>';
        echo "����x�ǣ� $x";
        echo "<br>";
        echo "����y�ǣ�$y";
    }
    myTest();

    echo "<p>���Ժ�����ı���:</p>";
    echo "����x��: $x";
    echo "<br>";
    echo "����y�ǣ�$y";*/
   /*$x=5;
   $y=10;
   function myTest(){
       global $x,$y;
       $y=$x+$y;
   }
    myTest();
   echo "$y";  //15
    */
   /* $x=5;
    $y=10;
    function myTest(){
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    }
    myTest();
    echo "$y";  //15
   */
   function myTest(){
       static $x=0;
       echo "$x <br>";
       $x++;
   }
   myTest();
   myTest();
   myTest();
    echo "<h2>PHP is fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This", " string", " was", " made", " with multiple parameters.";
    print "<h2>PHP is fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    $txt1="Learn PHP";
    $txt2="W3School.com.cn";
    $cars=array("Volvo","BMW","SAAB");

    print $txt1;
    print "<br>";
    print "Study PHP at $txt2";
    print "My car is a {$cars[1]}";
   ?>
</h1>
