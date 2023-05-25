<h1>Chat</h1>


<?php foreach ($users as $user) : ?>
    <div>
        <a href="conversation?userId=<?= $user->userId ?>">
        <li class="motscles"><?= $user->userNom ?></li>
    </a></div>
<?php endforeach ?>
<div>
