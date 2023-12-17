<?php Helper::importView("partials/headerAdmin.view.php") ?>
<div class="tabel">
    <table class="table table-striped" style="margin-inline: 50px;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /**
             * @var DetailPeminjamanModel[] $loanDetails 
             */
            $index = 1;
            foreach ($loanDetails as $loanDetail): ?>
                <tr>
                    <td scope="row">
                        <?= $index++; ?>
                    </td>
                    <td>
                        <?= $loanDetail->getJudulBuku() ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</thead>
</table>
<?php Helper::importView("partials/footer.view.php") ?>
</body>