<x-main title="Data Barang" loginFoto="{{$login->foto}}" loginNama="{{$login->nama}}" loginUid="{{$login->uid}}" loginAlamat="{{$login->alamat}}" loginFullName="{{$login->full_name}}" loginTelepon="{{$login->telepon}}" loginAbout="{{$login->About}}" loginEmail="{{$login->Email}}">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <form action="{{route('addBarang')}}" method="post">
            {{ csrf_field() }}
              <div class="modal-body">
                <div class="form-group">
                  <label for="namaBarang">Nama Barang</label>
                  <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                  <label for="jenis">Jenis</label>
                  <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis Barang">
                </div>
                <div class="form-group">
                  <label for="merek">Merek</label>
                  <input type="text" class="form-control" id="merek" name="merek" placeholder="Merek Barang">
                </div>
                <div class="form-group">
                  <label for="ukuran">Ukuran</label>
                  <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran">
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
                </div>
                <div class="form-group">
                  <label for="satuan">Satuan</label>
                  <select class="custom-select rounded-0" id="satuan" name="satuan">
                    <option value="" disabled selected>Satuan</option>
                    <option>Pack</option>
                    <option>Unit</option>
                    <option>Buah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="lokasi">lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi">
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
              <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Barang</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x: scroll; ">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Barang</th>
                      <th>Jenis</th>
                      <th>Merek</th>
                      <th>Ukuran</th>
                      <th>Stock</th>
                      <th>Satuan</th>
                      <th>Lokasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($barang as $index => $Barang)
                    <tr>
                      <td>{{$index + 1}}</td>
                      <td>{{$Barang->nama_barang}}</td>
                      <td>{{$Barang->jenis}}</td>
                      <td>{{$Barang->merek}}</td>
                      <td>{{$Barang->ukuran}}</td>
                      <td>{{$Barang->stock}}</td>
                      <td>{{$Barang->satuan}}</td>
                      <td>{{$Barang->lokasi}}</td>
                      <td><div class="btn-group">
                        <!-- <a href="/data_barang/edit/{{$Barang->id}}" class="btn btn-warning">Edit</a> -->
                        <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#edit{{$Barang->id}}">Edit</button>
                        <div class="modal fade" id="edit{{$Barang->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header bg-primary">
                                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true ">&times;</span>
                                  </button>
                              </div>
                              <form action="/data_barang/edit/{{$Barang->id}}" method="post">
                              {{ csrf_field() }}
                              <!-- <input type="text" class="form-control" hidden id="namaBarang" name="namaBarang" value="{{$Barang->id}}" placeholder="Nama Barang"> -->
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="namaBarang">Nama Barang</label>
                                    <input type="text" class="form-control" id="namaBarang" name="namaBarang" value="{{$Barang->nama_barang}}" placeholder="Nama Barang">
                                  </div>
                                  <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <input type="text" class="form-control" id="jenis" name="jenis" value="{{$Barang->jenis}}" placeholder="Jenis Barang">
                                  </div>
                                  <div class="form-group">
                                    <label for="merek">Merek</label>
                                    <input type="text" class="form-control" id="merek" name="merek" value="{{$Barang->merek}}" placeholder="Merek Barang">
                                  </div>
                                  <div class="form-group">
                                    <label for="ukuran">Ukuran</label>
                                    <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{$Barang->ukuran}}" placeholder="Ukuran">
                                  </div>
                                  <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="text" class="form-control" id="stock" name="stock" value="{{$Barang->stock}}" placeholder="Stock">
                                  </div>
                                  <div class="form-group">
                                    <label for="satuan">Satuan</label>
                                    <select class="custom-select rounded-0" id="satuan" name="satuan">
                                      <option>{{$Barang->satuan}}</option>
                                      <option>Pack</option>
                                      <option>Unit</option>
                                      <option>Buah</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="lokasi">lokasi</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$Barang->lokasi}}" placeholder="Lokasi">
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
                        <form action="{{ url('data_barang', $Barang->id) }}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger show_confirm">Hapus </button>
                        </form>
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
                {{ $barang->links('pagination::bootstrap-4') }}
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
  $(function() {
    $(document).on('click', '.show_confirm', function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      var form =  $(this).closest("form");
      Swal.fire({
        title: "Yakin?",
        text: "Ingin Menghapus Data Barang Ini?",
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
            text: "Berhasil Menghapus Data Barang",
            icon: "success"
          });
        }
      });
    })
  });
 // $('.show_confirm').click(function(event) {
  //     e.preventDefault();
  //     var link = $(this).attr("href");
  //     var form =  $(this).closest("form");
  //         form.submit();
  //         Swal.fire({
  //           position: "top-end",
  //           icon: "success",
  //           title: "Your work has been saved",
  //           showConfirmButton: false,
  //           timer: 1500
  //         });
  //       });
 
    //  $('.tambah').click(function(event) {
    //       var form =  $(this).closest("form");
    //       var name = $(this).data("name");
    //       event.preventDefault();
    //       swal({
    //           title: `Yakin Ingin Hapus Data Barang?`,
    //           text: "Data Barang Yang di Hapus Tidak Dapat Di Pulihkan",
    //           icon: "warning",
    //           buttons: true,
    //           dangerMode: true,
    //       })
    //       .then((willDelete) => {
    //         if (willDelete) {
    //           form.submit();
    //         }
    //       });
    //   });
  
</script>
</x-main>