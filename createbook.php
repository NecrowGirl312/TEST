<form  action="savebook.php" method="post">
    <div>
      <label for="title">Title :</label>
      <input type="text"  id="name"  name="title">
    </div> 
    <!--<div>
      <label  for="description">Description :</label>
      <textarea  id="message"  name="description"></textarea>
    </div>-->
    <div>
      <label  for="years">Years:</label>
      <textarea  id="years"  name="years"></textarea>
    </div>
    <div>
    Author<br/>
    <select name="author"> 
      <?php 
      $pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');
      $query = "SELECT * FROM Author";
      $statement = $pdo->query($query); 
      $authors = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($authors as $author) {
      ?>
      <option value="<?=$author['idAuthor']?>"><?=$author['name']." ".$author['last_name']?></option>
      
      <?php  } ?>
      </select>
      <!--<label  for="autor">Author :</label>
      <textarea  id="autor"  name="author"></textarea>
    </div>-->

    <div>
      <label  for="autor">Price :</label>
      <textarea  id="price"  name="price"></textarea>
    </div>

    <div  class="button">
      <button  type="submit">Send</button>
    </div>
  </form>