<!-- app/views/tickets/index.php -->

<h1>Jegyek listája</h1>

<ul>
    <?php foreach ($data['tickets'] as $ticket): ?>
        <li>
            <strong><?= htmlspecialchars($ticket['title'])?></strong><br>
            <?= htmlspecialchars($ticket['description']) ?>
        </li>
        <?php endforeach; ?>
</ul>