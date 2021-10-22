<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($arrayTeacher > 0) :
                    foreach ($arrayTeacher as $row => $value) : ?>
                        <tr>
                            <td><?php echo $value->getId(); ?></td>
                            <td><?php echo $value->getName(); ?></td>
                            <td><?php echo $value->getFirstname(); ?></td>
                        </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>