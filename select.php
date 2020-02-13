<ul>
    <?php
        include 'config.inc.php';
        $db = new mysqli(
            MySQL_HOST,
            MySQL_USER,
            MySQL_PASSWORD,
            MySQL_DATABASE
        );

        $sql = 'SELECT * FROM users';
        $result = $db->query($sql);

        foreach($result as $row){
            printf(
                '<li><span style ="color: %s">%s (%s)</span>
                    <a href="update.php?id=%s">update</a>
                    <a href="delete.php?id=%s">delete</a>
                </li>',
                htmlspecialchars($row['color'], ENT_QUOTES),
                htmlspecialchars($row['name'], ENT_QUOTES),
                htmlspecialchars($row['gender'], ENT_QUOTES),
                htmlspecialchars($row['id'], ENT_QUOTES),
                htmlspecialchars($row['id'], ENT_QUOTES)
            );
        }

    ?>
</ul>