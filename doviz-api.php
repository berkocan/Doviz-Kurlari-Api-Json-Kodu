Döviz kurlarını json ile api olarak sitenize eklemek için aşağıdaki kodları kullanabilirsiniz. ▼☟↓

<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>
<ul>
    <li>
        <span>USD</span>
        <span>Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['USD']['degisim']; ?></span>
    </li>
    <li>
        <span>EUR</span>
        <span>Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['EUR']['degisim']; ?></span>
    </li>
    <li>
        <span>GBP</span>
        <span>Fiyat: <?php echo $JSON['GBP']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['GBP']['degisim']; ?></span>
    </li>
    <li>
        <span>CHF</span>
        <span>Fiyat: <?php echo $JSON['CHF']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['CHF']['degisim']; ?></span>
    </li>
    <li>
        <span>CAD</span>
        <span>Fiyat: <?php echo $JSON['CAD']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['CAD']['degisim']; ?></span>
    </li>
</ul>


Yada iframe ile hazır kodlar olarak eklemek için aşağıdaki iframe kodunu kullanabilirsiniz.

<iframe src="https://www.genelpara.com/embed/?symbol=doviz&doviz=USD,EUR,GBP,CHF,CAD&stil=stil-6&renk=beyaz" frameborder="0" width="1020" height="300"></iframe>

GP.
