<!DOCTYPE html>
<html>
    <body>
        <h1>
            BÀI TẬP THỰC HÀNH TRÊN LỚP
        </h1>
    </body>

<?php echo "Câu 1: ";
echo "Linh iu Mạnh";
?>
<br/>
<?php echo "Câu 2: ";
echo strlen("Linh iu Manh");
?>
<br/>
<?php echo "Câu 3: ";
$x = 10;
echo pow($x,3);
?>
</br>
<?php echo "Câu 4: ";
echo strrev("Hello world");
?>
<br/>

<h1>BÀI TẬP</h1>
<?php echo "Câu 1: ";
function length($string) {
    $length = strlen($string);
    return $length;
}

$string = "MẠNH IU LINH";
$length = length($string);
echo $length;
?>

<br/>
<?php echo "Câu 2: ";
$string = "Duong Thuy Linh";
$wordcount = str_word_count($string);

echo "Chuỗi: '" . $string . "'<br>";
echo "Số từ trong chuỗi: " . $wordcount;
?>
<br/>
<?php echo "Câu 3: ";
echo strrev("Duong Thuy Linh");
?>
<br/>
<?php echo "Câu 4: ";
function searchSubstring($x, $y)
{
    $position = strpos($x, $y);
    return $position;
}

$inputString = "Duong Thuy Linh";
$searchString ="Linh";
$result = searchSubstring($inputString, $searchString);

echo "Chuỗi ban đầu: " . $inputString . "<br>";
echo "Chuỗi cần tìm: " . $searchString . "<br>";

if ($result === false) {
    echo "Không tìm thấy chuỗi con.";
} else {
    echo "Vị trí của chuỗi con: " . $result;
}
?>
<br/>
<?php echo "Câu 5: ";
//Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo str_replace("Linh", "Chi", "Dương Thùy Linh");
?>
<br/>

<?php echo "Câu 6: ";
//Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function startsWith($inputString, $searchString) {
    $length = strlen($searchString);
    return substr($inputString, 0, $length) === $searchString;
}

// Kiểm tra chuỗi "Hello, world!" có bắt đầu bằng "Hello" hay không
$inputString = "Hello, Duong Thuy Linh!";
$searchString = "Hello";

if (startsWith($inputString, $searchString)) {
    echo "Chuỗi bắt đầu bằng chuỗi con.";
} else {
    echo "Chuỗi không bắt đầu bằng chuỗi con.";
}
?>
<br/>
<?php echo "Câu 7: ";
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
function convertToUppercase($string)
{
    $uppercaseString = strtoupper($string);
    return $uppercaseString;
}

$inputString = "duong thuy linh";
$convertedString = convertToUppercase($inputString);

echo "Chuỗi ban đầu: " . $inputString . "<br>";
echo "Chuỗi chữ hoa: " . $convertedString;
?>
<br/>
<?php echo "Câu 8: ";
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function convertToLowercase($string)
{
    $lowercaseString = strtolower($string);
    return $lowercaseString;
}

$inputString = "DUONG THUY LINH";
$convertedString = convertToLowercase($inputString);

echo "Chuỗi ban đầu: " . $inputString . "<br>";
echo "Chuỗi chữ thường: " . $convertedString;
?>
<br/>
<?php echo "Câu 9: ";
//Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo ucwords("duong thuy linh");
?>
<br/>
<?php echo "Câu 10: ";
//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
$x = "   Duong Thuy Linh   ";
$y = trim ($x);
echo $y;
?>
<br/>
<?php echo "Câu 11: ";
//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
$x = "Duong Thuy Linh";
$y = ltrim($x, "D");
echo $y;
?>
<br/>
<?php echo "Câu 12: ";
//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
$x = "Duong Thuy Linh";
$y = rtrim($x,$x[-1]);
echo $y;
?>
<br/>
<?php echo "Câu 13: ";
//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$x = "Duong,Thuy,Linh";
$dau = ",";
$y = explode($dau, $x);
print_r($y);
?>
<br/>
<?php echo "Câu 14: ";
//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$x = array("Duong", "Thuy", "Linh");
$dau = ",";
$y = implode($dau, $x);
print_r($y);
?>
<br/>
<?php echo "Câu 15: ";
//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
$x = ' Thuy Linh ';
$y = ' Duong ';
$newstring = $y . $x;
echo $newstring;
?>
<br/>
<?php echo "Câu 16: ";
$x = "Duong Thuy Linh";
$y = "Linh";
$endstring = substr($x, -strlen($y)) === $y;

echo "Chuỗi ban đầu: '" . $x . "'<br>";
echo "Chuỗi con muốn kiểm tra: '" . $y . "'<br>";
echo "Kết quả kiểm tra: " . ($endstring ? "Có" : "Không");
?>


<?php
//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceNonAlphanumeric($str) {
    $pattern = '/[^a-zA-Z0-9]+/';
    $replacement = '_';
    $result = preg_replace($pattern, $replacement, $str);
    return $result;
}

$string = 'Hello!123 World!';
$replacedString = replaceNonAlphanumeric($string);
echo $replacedString; // Output: Hello_123_World_
?>
</html>