<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th><?= esc($heading) ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($tableTitle as $itemTitle) :  ?>
            <td><?= esc($itemTitle)?></td>
            <?php endforeach ?>
        </tr>
        <?php foreach($todo_list as $key => $itemContent) :  ?>
            <tr>
                <td><?= esc($key)?></td>
                <?php foreach($itemContent as $itemContent1) :  ?>
                <td><?= esc($itemContent1)?></td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>
