<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tut</title>
</head>

<body>
    <?php

    $pass = "admin";
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    echo $hash;
    // define a constant
    echo "<br><br>";
    define("VAL", 50);
    echo 'val is ' . VAL;
    // variable and . is used as + operator for concatnenation
    echo "<br><hr>";
    $varname = 50;
    print($varname);
    echo "<br><hr>";
    //data types int float string boolean array object  null
    // resource : special var holding reference to external resource
    /*boolean #flag=false/true */
    // $array=[1,2,3,4]; //["arnav","Fruit"]
    $array = array(
        "arnav" => 21,
        "rahul" => 40,
        "prem" => 60,
        "channa" => 90

    );
    var_dump($array, count($array)); //count returns no of objects
    foreach ($array as $key => $val) {
        echo "key is: " . $key . " with value: " . $val . "<br>";
    }
    echo "<br><hr>";
    $var = NULL;
    var_dump($var);
    echo "<br><hr>";
    ?>
    <h3>Class data type</h3>
    <?php
    class student
    {
        public $studname, $roll, $class;
        public function __construct($n = "", $c = "", $r = 0)
        {
            $this->class = $c;
            $this->studname = $n;
            $this->roll = $r;
        }
        public function display()
        {
            echo "<br>" . $this->studname . "<br>";
            echo $this->roll . "<br>";
            echo $this->class . "<br>";
        }
    }

    class test extends student
    {
        public $marks;
        function __construct($n = "", $c = "", $r = 0, $m = 0)
        {
            parent::__construct($n, $c, $r); // Call the parent constructor
            $this->marks = $m;
        }
        /*
        functions in php
        function func_name (arg list)
        {
            body 
            return (if any)
        }
        func_name(params) calling
        */
        public function display()
        {
            echo "<br>" . $this->studname . "<br>";
            echo $this->roll . "<br>";
            echo $this->class . "<br>";
            echo $this->marks . "<br>";
        }
    }

    $obj = new student();
    var_dump($obj);
    $obj->class = "Se4";
    $obj->studname = "Arnav Firke";
    $obj->roll = 40;
    $obj->display();

    $obj2 = new test("arnav", "se40", 59, 60);
    $obj2->display();
    echo "<br>";

    ?>
    <hr>
    <h3>Resource data type</h3>
    <?php
    /*
    file opening types
    r:  read
    r+: read and write
    w:  write (if file exists clears content of file else will create new file)
    w+: write and read (if file exists clears content of file else will create new file)
    a:  append write
    a+: read with append 
    x:  (write)return false and generate error if file exists else php will create file
    x+: read and write and same as x
    fopen(filename,mode)
    fclose(resource hanlder)
    fread(file handle,len in bytes)
    fwrite(file handle,string)
    filesize(file handle) returns file size in bytes
    unlink(filename) delete files or directories
    */
    $file = fopen("test.txt", "r");
    var_dump($file);
    fclose($file);
    echo "<br>";
    ?>
    <hr>
    <h3>String functions</h3>
    <?php
    $var = "This is a example of string";
    echo "length of str: " . strlen($var) . "<br>";
    echo "words in str: " . str_word_count($var) . "<br>";
    echo "strpos(of) of str: " . strpos($var, "of") . "<br>";
    echo "reverse of str: " . strrev($var) . "<br>";
    echo "replacing text of str: " . str_replace("of", '', $var) . "<br>";
    ?>
    <hr>
    <h3>Operators</h3>
    <?php
    /*
    arithmatic:  +,-,*,/,%   +=
    assignment: =
    comaprision:== (equal)check for equal value
                === (identical)checks for equal val and data type 
                != (not equal)checks for not equal val and data type
                > < >= <= 
    incement decrement: ++ -- +=1 -=1
    logical: and &&, or || , not !, 

    */
    $str1 = "arnav";
    $str2 = " firke";
    echo $str1 . $str2 . "<br>"; //concat
    $str1 .= $str2;
    echo $str1;
    ?>
    <hr>
    <h3>Exceptions handling</h3>
    <?php
    $i = 40;
    $j = 0;
    try {
        $v = $i / $j;
    } catch (DivisionByZeroError $ec) {
        echo $ec . "<br>" . $ec->getLine() . "<br>";
        echo $ec->getMessage();
    } finally {
        echo "<br>Code continued";
    }
    ?>
    <hr>
    <h3>Maths operations</h3>
    <?php
    echo abs(-123) . "<br>";
    echo round(1.26356655, 4) . "<br>";
    echo sqrt(100) . "<br>";
    echo sqrt(-100) . "<br>";
    echo rand() . "<br>";
    echo max(1, 2, 3, 5, 6) . "<br>";
    echo min(1, 2, 3, 5, 6) . "<br>";
    ?>
    <hr>
    <h3>Form handling</h3>
    <div class="container">
        <form action="form2.php" method="post">
            <input type="text" name="name" id="">
            <input type="email" name="email" id="">
            <input type="submit" name="" id="">
        </form>
    </div>
    <hr>
    <?php
    echo date("d.m.y") . "<br>";
    echo date("d-m") . "<br>";
    echo date("d/m/y") . "<br>";
    echo date("d///m///y") . "<br>";
    echo date("h:i:s a") . "<br>"; //h:hours s:sec i:min 
    $datestr = strtotime("11:06:20am jan 22 2023");
    echo $datestr . "<br>";
    echo date("d/m/y ::: h:i:s a", $datestr) . "<br>"; //h:hours s:sec i:min 
    ?>
    <hr>
    <h3>file handling</h3>
    <?php
    // require "path to file": generate fatal error and stop script execution if file not found
    // include "path to file"F: generate php warning and continue script execution if file not found
    ?>
    <hr>
    <h3>Cookies</h3>
    <?php
    $cookiename = "username";
    $cookievalue = "username@gmail.com";
    $cookielifetime = time() + 5 * 60; //5 mins
    /*
     30 days *24 hours* 60 min * 60 sec => 30 days
    */
    setcookie($cookiename, $cookievalue, $cookielifetime);
    echo (isset($_COOKIE[$cookiename])) ? $_COOKIE[$cookiename] : "cookie is expired";
    //remving cookie
    setcookie($cookiename, "", time() - 3600);
    ?>
    <hr>
    <h3>session</h3>
    <?php
    //starting sessions
    session_start();
    $_SESSION['username'] = 'ads@asf.asd';
    echo "your username is: " . $_SESSION['username'];
    //closing session
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
    }
    //after user leaves destroy session
    session_destroy();
    ?>
    <hr>
    <h3>emails sending using api</h3>
    <?php
    $reciever = "1stop.test@em.com";
    $emailsubject = "Test email";
    $sender = "asd@em.com";

    $emailheader = "MIME-Version: 1.0" . "\r\n";
    $emailheader .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";

    $emailheader .= "From: " . $sender . "\r\n" .
        "Reply-To: " . $sender . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $Emailmsg = "<html><body><h1>Test email</h1><p>testing</p></body></html>";
    if (mail($reciever, $emailsubject, $Emailmsg, $emailheader)) {
        echo "mail send";
    } else {
        echo "unable to send mail";

    }


    ?>

</body>

</html>