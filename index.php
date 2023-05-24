<!DOCTYPE html>
<html>
    <body>
        <h1>
            BÀI TẬP THỰC HÀNH TRÊN LỚP
        </h1>
    </body>

<?php echo "Câu 1: ";
echo "Hello world";
?>
<br/>
<?php echo "Câu 2: ";
echo strlen("Hello world");
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
//Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function length($string) {
    $length = strlen($string);
    return $length;
}

$string = "Duong Thuy Linh";
$length = length($string);
echo $length;
?>

<br/>
<?php echo "Câu 2: ";
//Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function wordcount($string){
$wordcount = str_word_count($string);
return $wordcount;
}
$string = "Duong Thuy Linh";
$wordcount =wordcount($string);
echo $wordcount;
?>
<br/>
<?php echo "Câu 3: ";
//Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function reverseString($string) {
    return strrev($string);
}
$string = "Duong Thuy Linh";
$reverseString = reverseString($string);
echo $reverseString;
?>
<br/>
<?php echo "Câu 4: ";
//Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function searchSubstring($inputString, $searchString)
{
    $position = strpos($inputString, $searchString);
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
function replaceString($originalString, $searchString, $replaceString) {
    return str_replace($searchString, $replaceString, $originalString);
}
$originalString = "Duong Thuy Linh";
$searchString = "Linh";
$replaceString = "Chi";

$newString = replaceString($originalString, $searchString, $replaceString);
echo $newString;

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
function convertToTitleCase($string) {
    return ucwords($string);
}

$inputString = "duong thuy linh";
$titleCaseString = convertToTitleCase($inputString);
echo $titleCaseString;

?>
<br/>
<?php echo "Câu 10: ";
//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function removeWhitespace($string) {
    return trim($string);
}

$string = "  Duong Thuy Linh  ";
$trimmedString = removeWhitespace($string);
echo $trimmedString;

?>
<br/>
<?php echo "Câu 11: ";
//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
function removeFirstCharacter($string) {
    return substr($string, 1);
}

// Example usage
$string = "Duong Thuy Linh";
$modifiedString = removeFirstCharacter($string);
echo $modifiedString;
?>
<br/>
<?php echo "Câu 12: ";
//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeLastCharacter($string) {
    return substr($string, 0, -1);
}

$string = "Duong Thuy Linh";
$modifiedString = removeLastCharacter($string);
echo $modifiedString;
?>
<br/>
<?php echo "Câu 13: ";
//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function splitString($string, $delimiter) {
    return explode($delimiter, $string);
}

$string = "Duong,Thuy,Linh";
$delimiter = ",";
$splitArray = splitString($string, $delimiter);
print_r($splitArray);
?>
<br/>
<?php echo "Câu 14: ";
//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function joinArray($array, $delimiter) {
    return implode($delimiter, $array);
}

$array = array("Duong", "Thuy", "Linh");
$delimiter = ",";
$joinedString = joinArray($array, $delimiter);
echo $joinedString; 
?>
<br/>
<?php echo "Câu 15: ";
//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function appendToStart($string, $append) {
    return $append . $string;
}

function appendToEnd($string, $append) {
    return $string . $append;
}

$string = "Thuy";
$appendStart = "Duong ";
$appendEnd = " Linh";

$newStringStart = appendToStart($string, $appendStart);
$newStringEnd = appendToEnd($string, $appendEnd);

echo $newStringStart; 
echo "\n";
echo $newStringEnd;  
?>
<br/>
<?php echo "Câu 16: ";
//Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function endsWith($string, $ending) {
    $stringLength = strlen($string);
    $endingLength = strlen($ending);

    if ($endingLength > $stringLength) {
        return false;
    }

    $comparison = substr($string, $stringLength - $endingLength, $endingLength);
    return $comparison === $ending;
}

$inputString = "Duong Thuy Linh";
$endingString = "Linh";

if (endsWith($inputString, $endingString)) {
    echo "Chuỗi kết thúc bằng chuỗi con";
} else {
    echo "Chuỗi không kết thúc bằng chuỗi con";
}
?>
<br/>
<?php echo "Câu 17: ";
//Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function containsSubstring($string, $substring) {
    $position = strpos($string, $substring);
    return $position !== false;
}

$string = "Duong Thuy Linh";
$substring = "Thuy";

if (containsSubstring($string, $substring)) {
    echo "Chuỗi chứa chuỗi con";
} else {
    echo "Chuỗi không chứa chuỗi con";
}
?>
<br/>
<?php echo "Câu 18: ";
//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceNonAlphanumeric($string) {
    $pattern = '/[^a-zA-Z0-9]+/';
    $replacement = '_';
    $result = preg_replace($pattern, $replacement, $string);
    return $result;
}

$string = 'Hello!123 Duong Thuy Linh';
$replacedString = replaceNonAlphanumeric($string);
echo $replacedString; 
?>
<br/>
<?php echo "Câu 19: ";
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function isInteger($string) {
    return filter_var($string, FILTER_VALIDATE_INT) !== false;
}

$string = "123";

if (isInteger($string)) {
    echo "Chuỗi là một số nguyên";
} else {
    echo "Chuỗi không phải là số nguyên";
}
?>
<br/>
<?php echo "Câu 19: ";
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function isValidEmail($string) {
    return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
}

$string = "thuylinh@gmai.com";

if (isValidEmail($string)) {
    echo "Chuỗi là một địa chỉ email hợp lệ";
} else {
    echo "Chuỗi không phải là địa chỉ email hợp lệ";
}
?>
<br/>
</html>
//http://localhost:3000/index.php