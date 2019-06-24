<h1>Меню</h1>

<ul>
    <?php
    $result = db("SELECT id, menu_name FROM pages");

    while ($menu = mysqli_fetch_assoc($result))
    {
        echo "<li><a href='index.php'>{$menu['menu_name']}</a></li>";
    }
    ?>
</ul>