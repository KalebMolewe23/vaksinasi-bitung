<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Reksadana Bitung</span>
    </div>

    <main>
        <div class="container">

            <br>

            <a href="<?= base_url("administrator/data/tambah_datareksadana"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
            <br><br>
            <form action="<?= base_url('administrator/data/deleteall_kmeans') ?>" method="POST">
                <table class="table table-bordered table_hover table-striped">
                    <thead>
                        <tr>
                            <th>
                                <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm"><i class='bx bxs-folder-minus'></i> Delete</button>&nbsp;<input type="checkbox" id="option-all" onchange="checkAll(this)">
                            </th>
                            <th>
                                <center>No.</center>
                            </th>
                            <th>
                                <center>Nama Area</center>
                            </th>
                            <th>
                                <center>Nama Reksadana</center>
                            </th>
                            <th>
                                <center>1 Year Return</center>
                            </th>
                            <th>
                                <center>1 Month Return</center>
                            </th>
                            <th>
                                <center>Expense Ratio</center>
                            </th>
                            <th>
                                <center>Total AUM</center>
                            </th>
                            <th>
                                <center>Min. Pembelian</center>
                            </th>
                            <th>
                                <center>Bank Penampung</center>
                            </th>
                            <th>
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data->result() as $value) : ?>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="checkbox_value[]" value="<?= $value->idreksadana ?>">
                                </td>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $value->area_name ?></td>
                                <td align="center"><?= $value->reksadana_name ?></td>
                                <td align="center"><?= $value->one_year ?>%</td>
                                <td align="center"><?= $value->one_month ?>%</td>
                                <td align="center"><?= $value->expense_ratio ?>%</td>
                                <td align="center"><?= $value->total_aum ?></td>
                                <td align="center"><?= $value->min ?></td>
                                <td align="center"><?= $value->bank ?></td>
                                <td align="center">
                                <?= anchor('administrator/data/edit_reksadana/' . $value->idreksadana, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                                </td>  
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
</section>

<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
</script>