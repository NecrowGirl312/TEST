<!--
    <form method="get" action="contact.php">
        <label for= "subject">Sujet : </lable>
        <input id="subject" type="text" name="subject"/><br/><br/>
    <label for="email">Email :</lable>

    <input id="email" type="text" name="email"/><br/><br/>

    <label for="phone">Numéro de téléphone :</lable>

    <input id="phone" type="text" name="phone"/><br/><br/>
    <label for="message">Message :</lable>
    <textarea name="message" id="mes"></textarea><br/><br/>
    <br/><input type="submit" value="Envoyer">
</form>
-->

<?php
    $query = "SELECT * FROM cinema";
    $statement = $pdo->query($query);
    $friend = $statemen->fetchAll();







?>