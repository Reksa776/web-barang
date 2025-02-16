<x-main title="Edit Barang Keluar" loginFoto="{{$login->foto}}" loginNama="{{$login->nama}}" loginUid="{{$login->uid}}" loginAlamat="{{$login->alamat}}" loginFullName="{{$login->full_name}}" loginTelepon="{{$login->telepon}}" loginAbout="{{$login->About}}" loginEmail="{{$login->Email}}">
    <section class="content">
        <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Barang Keluar</h3>
          </div>
          @foreach($barangKeluar as $index => $Barang)
          <form action="" method="post">
          {{ csrf_field() }}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="namaBarang">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="{{$Barang->tanggal}}">
                </div>
                <div class="form-group">
                  <label for="namaBarang">Nama Barang</label>
                  <select class="custom-select rounded-0" id="namaBarang" name="namaBarang">
                    <option>{{$Barang->nama_barang}}</option>
                    @foreach($barang as $index => $dataBarang)
                        <option>{{$dataBarang->nama_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" value="{{$Barang->jumlah}}">
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="penerima">Penerima</label>
                  <input type="text" class="form-control" id="penerima" name="penerima" placeholder="Penerima" value="{{$Barang->penerima}}">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="{{$Barang->keterangan}}">
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="modal-footer">
                    <a href="/barang_keluar" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                </div>
              
              <!-- /.row -->
            </div>
          </form>
          @endforeach
          <!-- /.card-body -->
        </div>
        </div>
    </section>
</x-main>