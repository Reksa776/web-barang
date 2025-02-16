<x-main title="Barang Masuk" loginFoto="{{$login->foto}}" loginNama="{{$login->nama}}" loginUid="{{$login->uid}}" loginAlamat="{{$login->alamat}}" loginFullName="{{$login->full_name}}" loginTelepon="{{$login->telepon}}" loginAbout="{{$login->About}}" loginEmail="{{$login->Email}}">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            
            <form action="" method="post">
                {{ csrf_field() }}
              <div class="modal-body">
                <div class="form-group">
                  <label for="namaBarang">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                  <label for="namaBarang">Nama Barang</label>
                  <select class="custom-select rounded-0" id="namaBarang" name="namaBarang">
                    <option value="" disabled selected>Nama Barang</option>
                    @foreach($barang as $index => $dataBarang)
                        <option>{{$dataBarang->nama_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary tambah">Tambah</button>
              </div>
            </form>
            </div>
        </div>
        </div>
<div class="row">
          <div class="col-md-6 col-lg-12">
            <div class="card">
              <div class="card-header">
              <div class="col-lg-2">
              <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Transaksi</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x: scroll; ">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Tanggal</th>
                      <th>Nama Barang</th>
                      <th>Jenis</th>
                      <th>Merek</th>
                      <th>Ukuran</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($barangMasuk as $index => $Barang)
                    
                    <tr>
                      <td>{{$index + 1}}</td>
                      <td>{{$Barang->tanggal}}</td>
                      <td>{{$Barang->nama_barang}}</td>
                      <td>{{$Barang->jenis}}</td>
                      <td>{{$Barang->merek}}</td>
                      <td>{{$Barang->ukuran}}</td>
                      <td>{{$Barang->jumlah}}</td>
                      <td>{{$Barang->keterangan}}</td>
                      <td><div class="btn-group">
                      <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#edit{{$Barang->id}}">Edit</button>
                        <div class="modal fade" id="edit{{$Barang->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang Masuk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            
                            <form action="/barang_masuk/edit/{{$Barang->id}}" method="post">
                                {{ csrf_field() }}
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="namaBarang">Tanggal</label>
                                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$Barang->tanggal}}" placeholder="Tanggal">
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
                                  <input type="text" class="form-control" id="jumlah" value="{{$Barang->jumlah}}" name="jumlah" placeholder="Jumlah">
                                </div>
                                <div class="form-group">
                                  <label for="keterangan">Keterangan</label>
                                  <input type="text" class="form-control" id="keterangan" value="{{$Barang->keterangan}}" name="keterangan" placeholder="Keterangan">
                                </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-warning tambah">Edit</button>
                              </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        <form action="{{url('barang_masuk', $Barang->id)}}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger show_confirm">Hapus </button>
                        </form>
                        <a href="/barang_masuk/print/{{$Barang->id}}" target="_blank" class="btn btn-primary">Print</a>
                        <!-- <a href="/data_barang/{{$Barang->id}}" class="btn btn-danger" data-confirm-delete="true">Hapus</a> -->
                      </div></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul> -->
                {{ $barangMasuk->links('pagination::bootstrap-4') }}
                <a href="/barang_masuk/export" target="_blank" class="btn btn-primary">Export Laporan</a>
              </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
    $(document).on('click', '.show_confirm', function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      var form =  $(this).closest("form");
      Swal.fire({
        title: "Yakin?",
        text: "Ingin Menghapus Data Barang Masuk Ini?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Delete"
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
          Swal.fire({
            title: "Deleted!",
            text: "Berhasil Menghapus Data Barang Masuk",
            icon: "success"
          });
        }
      });
    })
  });
    </script>
</x-main>