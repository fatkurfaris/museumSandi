<div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4 text1">User Feedback</h2>
    <table class="table">
        <tr class="tr">
            <th class="content">Username</th>
            <th class="content">Email</th>
            <th class="content">Phone</th>
            <th class="content">Pesan</th>
        </tr>
        <?php foreach ($data['feedback'] as $feedback) : ?>
            <tr class="tr">
                <td class="content"> <?= $feedback['username']; ?></td>
                <td class="content"><?= $feedback['email']; ?></td>
                <td class="content"><?= $feedback['phone']; ?></td>
                <td class="content"><?= $feedback['pesan']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>