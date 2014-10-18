<?php

require_once('autoload.php');

$errors = [];

if (RequestHelper::getMethod() == 'POST') {
    $input = new Input();
    $validator = new Validator();

    try {
        $username = $input->getInput('username', '');
        $validator->validateString($username);
        $validator->validateNotBlank($username);
    } catch (\Exception $e) {
        $errors['username'] = $e->getMessage();
    }

    try {
        $message = $input->getInput('message', '');
        $validator->validateString($message);
        $validator->validateNotBlank($message);
    } catch (\Exception $e) {
        $errors['message'] = $e->getMessage();
    }

    if (count($errors) == 0) {
        $tweets_manager = new TweetsManager();
        $tweets_manager->store([
            'username' => $input->getInput('username'),
            'message' => $input->getInput('message')
        ]);
        RequestHelper::redirectUser('index.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<h1>Ajouter un tweet</h1>

<form action="" method="post">
    <div>
        <label for="username">Username</label>
        <?php if (isset($errors['username'])): ?>
            <div class="error">
                <?= $errors['username'] ?>
            </div>
        <?php endif; ?>
        <input type="text" id="username" name="username"/>
    </div>
    <div>
        <label for="message">Message</label>
        <?php if (isset($errors['message'])): ?>
            <div class="error">
                <?= $errors['message'] ?>
            </div>
        <?php endif; ?>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>
</body>
</html>