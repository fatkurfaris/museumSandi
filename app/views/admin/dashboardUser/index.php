<div id="content" class="p-4 p-md-5 pt-5">
    <?php Flasher::flash(); ?>
    <h2 class="mb-4 text1">Daftar User</h2>
    <table class="table">
        <tr class="tr">
            <th class="content">Username</th>
            <th class="content">Email</th>
            <th class="content">Phone</th>
            <th class="content">address</th>
            <th class="content">gender</th>
            <th class="content">role</th>
            <th class="button">Function</th>
        </tr>
        <?php foreach ($data['user'] as $user) : ?>
            <tr class="tr">
                <td class="content"> <?= $user['username']; ?></td>
                <td class="content"><?= $user['email']; ?></td>
                <td class="content"><?= $user['phone']; ?></td>
                <td class="content"><?= $user['addrees']; ?></td>
                <td class="content"><?= $user['gender']; ?></td>
                <td class="content"><?= $user['role']; ?></td>
                <td class="button">
                    <!-- <button class="detail"> <a href="<?= HOMEUSER; ?>/AdminUser/detail/<?= $user['id']; ?>">Detail</a></button> -->
                    <button class="hapus" onclick="return confirm('yakin?' )"><a href="<?= HOMEUSER; ?>/AdminUser/hapus/<?= $user['id']; ?>">Hapus</a></button>
                </td>

            </tr>
        <?php endforeach; ?>
        <!-- <tr class="tr">
            <td class="content">Alfreds Futterkiste</td>
            <td class="content">Maria Anders</td>
            <td class="content">
                Germany
            </td>
            <td class="button">
                <button class="detail">Detail</button>
                <button class="hapus">Hapus</button>
            </td>

            </td>
        </tr>
        <tr class="tr">
            <td class="content">Centro comercial Moctezuma</td>
            <td class="content">Francisco Chang</td>
            <td class="content">Mexico</td>
            <td class="button">
                <button class="detail">Detail</button>
                <button class="hapus">Hapus</button>
            </td>
        </tr> -->
    </table>
</div>
</div>