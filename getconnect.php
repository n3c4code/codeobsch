<?php
include('Net/SSH2.php');
include('File/ANSI.php');
$ansi = new File_ANSI();

if(!isset($_POST['show']))
{
$ansi->appendString($ssh->read('inet1:~ #'));
//$ssh->write("htpasswd2 -b /etc/squid/users/lis_logins lis1-765 qweqwe \n");
//$ssh->setTimeout(1);
//$ansi->appendString($ssh->read());
$ssh->write("ls -la \n");
$ssh->setTimeout(1);
$ansi->appendString($ssh->read());
echo $ansi->getHistory(); // or 
} 
else {
$ansi->getHistory();
}
?>

<form>
<button name="show" type="submit" target="/?">Show history </button>
</form>
<?php
//echo $ssh->exec('htpasswd2 -b /etc/squid/users/lis_logins lis1-765 qweqwe');
//echo $ssh->exec('pwd');

//echo $ssh->read('inet1:~ #');
//$ssh->write("htpasswd2 -b /etc/squid/users/lis_logins lis1-765 qweqwe");
//echo $ssh->read('inet1:~ #');


//echo "<br><br><br><br><br><br>";
//echo $ssh->getLog();


//$fp = fopen("logger.txt", "a"); // открываем файл для записи
//$mytext = $ssh->exec('ls -la'); // Исходная строка
//$test = fwrite($fp, $mytext); // Запись в файл
//if ($test) echo 'Äàííûå â ôàéë óñïåøíî çàíåñåíû.';
//else echo 'Ошибка при записи в файл.';
//fclose($fp); //Закрываем файл
?>
