<?php

$result = 0;
if (isset($_POST['submit'])) {
if ($_POST['math-op'] == 'addition') {
$result = $_POST['first-value'] + $_POST['second-value'];
} elseif ($_POST['math-op'] == 'subtraction') {
$result = $_POST['first-value'] - $_POST['second-value'];
} elseif ($_POST['math-op'] == 'multiplication') {
$result = $_POST['first-value'] * $_POST['second-value'];
} elseif ($_POST['math-op'] == 'division') {
$result = $_POST['first-value'] / $_POST['second-value'];
}
echo $result;
}