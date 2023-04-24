<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Iterasi K-3</span>
    </div>

    <main>
        <div class="container-fluid">
            <div class="container">
                <br>
                <form action="<?= base_url('data/import_excel_2020'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Pilih File Excel</label><br>
                  <input type="file" name="fileExcel">
                </div>
                <div>
                  <button class='btn btn-success' type="submit">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Import		
                  </button>
                </div>
              </form>
            </div>
      </div>
    </main>
</section>