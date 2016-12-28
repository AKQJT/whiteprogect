<?php require_once('templates/top.php');
require_once('libs/functions.php');
if ($_GET['url']){
	$file=$_GET['url'];
}
else {
	$file = 'index';
}
$query = "SELECT * FROM maintexts WHERE url='$file'";

$row = selectone($query);

//echo "<pre>";                     //  проверям получаем лди данные из базы данных (убрать слеши коментария из кода)
//print_r($row);
//echo "</pre>";
?>




    <article class="bit">
      <header>
        <h1> <?php echo $row['name'];?> </h1>                   
      </header>
       <img src ="media/img/bit.png" alt = "bitcoin">      
	   
       <p><?php echo $row['body'];?> <p/>                        
      <footer>
        <a href="index.php?url=bitcoin"> подробнее о bitcoin </a> 
      </footer>
    </article>
    <article class="eth">
      <header>
        <h1>Etherium</h1>
      </header>
      <img src ="media/img/eth.png"/>
      <p>Ethereum — «эфир», Эфириум — платформа для создания децентрализованных онлайн-сервисов на базе блокчейна
         (Đapps, Decentralized applications, децентрализованных приложений), работающих на базе умных контрактов.
         Реализована как единая децентрализованная виртуальная машина. Был предложен основателем журнала Bitcoin Magazine[en]
          Виталиком Бутериным в конце 2013 года, cеть была запущена 30 июля 2015 года. <br/>
          <br/>
          Являясь открытой платформой (open source),
          Ethereum значительно упрощает внедрение технологии блокчейн, что объясняет интерес со стороны не только у новых стартапов,
          но и крупнейших разработчиков ПО, таких как Microsoft, IBM и Acronis. Заметный интерес к платформе проявляют и финансовые компании,
          включая Сбербанк. </p>
      <footer>
        <a href="#"> подробнее о etherium </a>
      </footer>
    </article>
    <article class="bit">
      <header>
        <h1>Monero</h1>
      </header>
       <img src ="media/img/monero.png" class="monero">
       <p> Monero (от эспер. Monero – «монета») – криптовалюта с открытым исходным кодом, предназначенная для анонимных денежных транзакций.
           В отличие от Биткоина, Monero использует протокол CryptoNote, благодаря которому происходит обфускация транзакций.
           По данным от ноября 2016 года, Монеро входит в пятерку криптовалют с самой высокой рыночной капитализацией<p/>
      <footer>
        <a href="#"> подробнее о monero </a>
      </footer>
    </article>
<?php require_once('templates/bottom.php')?>

