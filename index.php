<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<h1>Mini tweeter</h1>

<table>
    <thead>
    <tr>
        <th>Username</th>
        <th>Tweet</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tweets as $tweet) : ?>
        <tr>
            <td><?= $tweet['username'] ?></td>
            <td><?= $tweet['message'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>