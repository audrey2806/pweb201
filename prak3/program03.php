<?php
  require_once("program03.data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style(data).css">
  <title>nuradrey_program03</title>
</head>
  <body>
    <div class="container">
      <div class="row">

        <div class="col6">

          <table>
            <thead>
              <tr>
                <th class="cell1">NIM</th>
                <th class="cell2">Mahasiswa</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($mahasiswa as $mhs)
              {

                $link = $_SERVER['PHP_SELF'].'?nim='.$mhs['nim'];
                if (isset($_GET['pa'] ) )
                  {
                  if ($mhs['dosen_pa']['nidn'] == $_GET['pa'] )
                    {
                ?>
                      <tr>
                        <td class="text-center">
                          <a href="<?= $link ?>"><?= $mhs['nim']?> </a>
                        </td>
                        <td class="data2">
                          <a href="<?= $link ?>"><?= $mhs['nama']?> </a>
                        </td>
                      </tr>
              <?php }
                  }
                  else
                    {?>
                      <tr>
                        <td class="text-center">
                          <a href="<?= $link ?>"><?= $mhs['nim']?> </a>
                        </td>
                        <td class="data2">
                          <a href="<?= $link ?>"><?= $mhs['nama']?> </a>
                        </td>
                      </tr>
            <?php
                    }
              } ?>
            </tbody>
          </table>

        </div>

        <div class="col6">
          <?php
          if ( isset($_GET['nim']))
          {
            foreach ($mahasiswa as $findmhs)
            {
              if( $findmhs['nim'] == $_GET['nim'])
              {
                $find=$findmhs;
                break;
              }
            }
            if ($find['lp']=='L'){
              $lp='Laki-Laki';}
              else{$lp='Perempuan';}


          ?>
          <table>
            <tr>
              <td class="field">NIM</td>
              <td class="data"><?=$find['nim']?></td>
            </tr>
            <tr>
              <td class="field">Nama Lengkap</td>
              <td class="data"><?=$find['nama']?></td>
            </tr>
            <tr>
              <td class="field">Jenis Kelamin</td>
              <td class="data"><?=$lp?></td>
            </tr>
            <tr>
              <td class="field">E-Mail</td>
              <td class="data"><?=$find['email']?></td>
            </tr>
            <tr>
              <td class="field">Tanggal Masuk</td>
              <td class="data"><?=date("d F Y",strtotime($find['tanggal_masuk']))?></td>
            </tr>
            <tr>
              <td class="field">Pembimbing Akademik</td>
              <td class="data">
              <a href="<?= $_SERVER['PHP_SELF'].'?pa='.$find['dosen_pa']['nidn']?>"><?=$find['dosen_pa']['nama'].", ".$find['dosen_pa']['gelar_depan'].$find['dosen_pa']['gelar_belakang']?></td></a>

            </tr>

          </table>
        <?php } ?>
        </div>

      </div>

    </div>

  </body>
</html>
