<div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4 text1">Daftar Reservasi</h2>
    <table class="table">
        <tr class="tr">
            <th class="content">Username</th>
            <th class="content">Keterangan</th>
            <th class="content">Jumlah</th>
            <th class="content">Jam</th>
            <th class="content">Tanggal</th>
            <th class="button">Status</th>
            <th class="button">Function</th>
        </tr>
        <?php foreach ($data['reservasi'] as $reservasi) : ?>
            <tr class="tr">
                <td class="content"> <?= $reservasi['username']; ?></td>
                <td class="content"><?= $reservasi['Keterangan']; ?></td>
                <td class="content"><?= $reservasi['Jumlah']; ?></td>
                <td class="content"><?= $reservasi['Jam']; ?></td>
                <td class="content"><?= $reservasi['Tanggal']; ?></td>
                <form action="<?= HOMEUSER; ?>/AdminReservasi/update/" method="POST">
                    <td class="button">

                        <Select class="form-select" id="status" name="status">
                            <Option hidden value="Menunggu"><?= $reservasi['status']; ?></Option>
                            <Option value="Menunggu">Menunggu</Option>
                            <Option value="Batal">Batal</Option>
                            <Option value="Disetujui">Disetujui</Option>
                        </Select>
                        <input type="hidden" name="id" value=<?= $reservasi['id'] ?> />
                    </td>
                    <td class="button">
                        <button class="save">Save</button>
                    </td>
                </form>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>