<?php
include 'htmllib.php';

function is_prime($n): bool{
    for($x=2; $x<$n; $x++){
        if($n % $x == 0){
            return false;
        }
    }
    return true;
}


function Fibonacci($n){

    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1 . ",";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

function pi_aprox(): float|int{
    $theValue = 10000; // the max
    $bottom = 1;
    $pi = 0;
    for ($i = 1; $i < $theValue; $i++) {
        if ($i % 2 == 1) {
            $pi += 4 / $bottom;
        } else {
            $pi -= 4 / $bottom;
        }
        $bottom += 2;
    }
    return $pi;
}

create_doctype();
begin_html();
begin_head();
echo create_element("title", true, ["contents" => "Prva DZ"]);
end_head();

#begin_body(["bgcolor"=>"#123456"]);
begin_body();

echo create_element("h1", true, ["contents" => "Ovo je prva DZ!"]);

#kreiranje tablice
echo create_element("h2", true, ["contents" => "Jedna tablica:"]);
create_table(["border" => "1px solid black"]);
echo create_table_row(["bgcolor" => "yellow", "contents" => ["<th>MONTH</th>", "<th>SAVINGS</th>", "<th>MONEY SAVED</th>"]]);
echo create_table_row(["contents" => [create_table_cell(["contents" => ["January", "$50", "$50"]])]]);
echo create_table_row(["contents" => [create_table_cell(["contents" => ["February", "$80", "$130"]])]]);
end_table();

#kreiranje linka
echo create_element("h3", true, ["contents" => "Jedna poveznica:"]);
echo create_element("a", true, ['href' => "https://www.google.hr/", "contents"=>["Link na google"]]);

#kreiranje slike
echo create_element("h4", true, ["style"=>"color:blue", "contents" => "Jedna slika:"]);
echo create_element("img", false, ["src" => "data:image/jpeg;base64,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",
    "width" => "150", "height" => "100"]);

#kreiranje paragrafa
echo create_element("p", true, ["style"=>"color:green;text-align:center", "contents" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."]);

#ispis prvih 100 prostih brojeva
echo create_element("h5", true, ["style"=>"color:blue", "contents" => "Prvih 100 prostih brojeva:"]);
$i = 1;
$counter = 0;
do{
    if (is_prime($i)){
        echo $i . ", ";
        $counter++;
    }
    $i++;
}while($counter < 100);

#ispis prvih 50 fib brojeva
echo create_element("h6", true, ["style"=>"color:blue", "contents" => "Prvih 50 Fibonacijevih brojeva:"]);
Fibonacci(50);

#ispis aproksimacije broja pi
echo create_element("h3", true, ["style"=>"color:blue", "contents" => "Pi aproksimacija:"]);
echo pi_aprox();

#matricno mnozenje
echo create_element("h3", true, ["contents" => "Matrično množenje:"]);
create_table(["style" => "display: inline-block;", "border" => "1px solid black"]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["1", "2", "3"]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["4", "5", "6"]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["7", "8", "9"]])]]);
end_table();

create_table(["style" => "display: inline-block;"]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["", "", ""]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;text-align:center",
    "contents" => ["", "x", ""]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["", "", ""]])]]);
end_table();

create_table(["style" => "display: inline-block;", "border" => "1px solid black"]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["9", "8", "7"]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["6", "5", "4"]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["3", "2", "1"]])]]);
end_table();

create_table(["style" => "display: inline-block;"]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["", "", ""]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;text-align:center",
    "contents" => ["", "=", ""]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["", "", ""]])]]);
end_table();

create_table(["style" => "display: inline-block;", "border" => "1px solid black"]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["30", "24", "18"]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["84", "69", "54"]])]]);
echo create_table_row(["contents" => [create_table_cell(["style" => "height:20px;width:20px;", "contents" => ["138", "114", "90"]])]]);
end_table();


end_body();
end_html();