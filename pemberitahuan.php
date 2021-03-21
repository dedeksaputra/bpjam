<html>

<head>
    <style>
        /* table {
            font-size: 12px;
            margin: 0;
            text-align: left;
        } */
        table tr .bb {
            border-bottom: 1 solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td style="padding: 0;">
                <img src="/assets/img/brand2.png" width="130" alt="" style="padding: 0;">
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td width="63">Nomor
            </td>
            <td width="18">:
            </td>
            <td style="text-align: left;" width="290">
                <?= $client['noSuratFull']; ?>
            </td>
            <td style="text-align: right;">
                <?= date("d F Y", $client['updated_at'] = time()); ?>
            </td>
        </tr>
        <tr>
            <td>Lampiran
            </td>
            <td>:
            </td>
            <td>
                1 Berkas
            </td>
        </tr>
    </table>
    <p>
    <table>
        <tr>
            <td>Yth.</td>
        </tr>
        <tr>
            <td>Pimpinan</td>
        </tr>
        <tr>
            <td><?= $client['namaPerusahaan']; ?></td>
        </tr>
        <tr>
            <td width="250"><?= $client['alamat']; ?></td>
        </tr>
    </table>
    <table>
        <tr>
            <td width="40">NPP</td>
            <td width="10">:</td>
            <td><?= $client['npp']; ?></td>
        </tr>
        <tr>
            <td>DIV</td>
            <td>:</td>
            <td>000</td>
        </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <td width="50">Perihal
            </td>
            <td width="15">:</td>
            <td>Pemberitahuan Tagiahan Iuran</td>
        </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <td>Dengan hormat,</td>
        </tr>
        <tr>
            <td width="507" style="column-fill: balance;">Berdasarkan Peraturan Pemerintah (PP) Nomor 44 Tahun 2015 j.o PP 82 tahun 2019, 45 Tahun 2015,
dan 46 Tahun 2015 j.o PP Nomor 60 Tahun 2015 serta Peraturan turunannya terkait dengan
Penyelenggaraan Program Jaminan Sosial Ketenagakerjaan, serta mencermati kondisi pandemik COVID-
19 yang berimbas pada perekonomian Indonesia, bersama ini kami sampaikan sebagai berikut :</td>
        </tr>
    </table>
    <br>
    <table cellpadding="1" cellspacing="1">
        <tr>
            <td width="18">1.</td>
            <td width="507">Kita semua prihatin karena kondisi darurat pandemik COVID-19, namun perlindungan hak-hak
jaminan sosial pekerja tetap harus menjadi perhatian kita bersama.</td>
        </tr>
        <tr>
            <td width="18">2.</td>
            <td width="507">Salah satu kepedulian kita adalah dengan membayar iuran Jaminan Sosial Ketenagakerjaan dan
berdasarkan catatan kami sampai dengan tanggal surat ini, maka jumlah tagihan iuran yang harus
dibayarkan adalah sebagai berikut :</td>
        </tr>

    </table>
    <table cellpadding="1" cellspacing="2">
        <?php
        $ibr = $client['ibr'];
        $bruto = $client['tBruto'];
        $denda = $client['totalIuranDenda'];


        $tagihanIuran = $bruto - $ibr;

        $total = $tagihanIuran + $denda;



        ?>
        <tr>
            <td width="20"></td>
            <td width="200">- Tagihan Bruto</td>
            <td align="center" width="160">: Rp.</td>
            <td align="right"><?= number_format($client['tBruto'], 2, ',', '.'); ?></td>
            <td width="10px"></td>
        </tr>
        <tr>
            <td></td>
            <td class="bb">- Sisa Iuran Belum Rinci(IBR)</td>
            <td class="bb" align="center">: Rp.</td>
            <td class="bb" align="right"><?= number_format($client['ibr'], 2, ',', '.'); ?></td>
            <td class="bb"> -</td>
        </tr>
        <tr>
            <td width="20"></td>
            <td width="200">- Tagihan Iuran</td>
            <td align="center" width="160">: Rp.</td>
            <td align="right"><?= number_format($tagihanIuran, 2, ',', '.'); ?></td>
            <td width="10px"></td>
        </tr>
        <tr>
            <td></td>
            <td class="bb">- Denda</td>
            <td class="bb" align="center">: Rp.</td>
            <td class="bb" align="right"><?= number_format($client['totalIuranDenda'], 2, ',', '.'); ?></td>
            <td class="bb">+</td>
        </tr>
        <tr>
            <td width="20px"></td>
            <td width="200px">- Total Tagihan Iuran</td>
            <td align="center" width="160">: Rp.</td>
            <td align="right"><?= number_format($total, 2, ',', '.'); ?></td>
            <td width="10px"></td>
        </tr>
    </table>
    <table cellpadding="1" cellspacing="1">
        
        <tr>

            <td width="18">3.</td>
            <td width="480">Jika Badan usaha Bapak/Ibu terdampak dalam pendemik COVD-19 dapat melakukan konsultasi dengan Sdr.<?= $client['namaPembina']; ?> (email: <?= $client['emailPembina']; ?>/Hp: <?= $client['hpPembina']; ?>) dan terkait telah membayar iuran dapat menghubungi Sdr. <?= $client['namaKeuangan']; ?> (email: <?= $client['emailKeuangan']; ?>/Hp: <?= $client['hpKeuangan']; ?>)</td>
        </tr>
        <tr>
            <td width="18">5.</td>
            <td width="480">Mohon Abaikan pemberitahuan ini, apabila Bapak/Ibu telah membayar iuran.</td>
        </tr>
    </table>
    <p>
        Demikian kami sampaikan, atas perhatian dan kerja sama yang baik kami ucapkan terimakasih. <br>
    <p>
    <table>
        <tr>
            <td style="text-align: left;" width="175"><img src="assets/img/ttd/<?= $client['kepalaKantor']; ?>.jpg"></td>
        </tr>
        <tr>
            <td align="center"><?= $client['kepalaKantor']; ?></td>
        </tr>
        <tr>
            <td align="center">Kepala Kantor Cabang</td>
        </tr>
    </table>
    <p></p>
    <span style="text-align: left; font-size: 8px; color:blue;">kp.03.02</span><br>
</body>

</html>