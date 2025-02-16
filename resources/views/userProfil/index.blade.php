<x-main title="Data User" loginFoto="{{$login->foto}}" loginNama="{{$login->nama}}" loginUid="{{$login->uid}}" loginAlamat="{{$login->alamat}}" loginFullName="{{$login->full_name}}" loginTelepon="{{$login->telepon}}" loginAbout="{{$login->About}}" loginEmail="{{$login->Email}}">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="modal-body">
                <div class="form-group">
                  <label for="fullnama">Full Nama</label>
                  <input type="text" class="form-control" required id="fullnama" name="full_nama" placeholder="Full Nama">
                </div>
                <div class="form-group">
                  <label for="nama">User</label>
                  <input type="text" class="form-control" id="nama" required name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="nama">Password</label>
                  <input type="password" class="form-control" id="password" required name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="mail" class="form-control" id="email" required name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="uid">UID</label>
                  <input type="text" inputmode="numeric" class="form-control" required id="uid" name="uid" placeholder="uid">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" required name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="telepon">About</label>
                  <input type="text" class="form-control" id="about" required name="about" placeholder="About">
                </div>
                <div class="form-group">
                  <label for="telepon">Telepon</label>
                  <input type="text" class="form-control" id="telepon" required name="telepon" placeholder="Telepon">
                </div>
                <div class="form-group">
                  <label for="Foto">Foto</label>
                  <input type="file" class="form-control" id="foto" required name="foto" placeholder="Choose Image" accept="image/png, image/jpeg">
                  <!-- <div id="imagePreview" style="@if (isset($user->id) && $user->foto != '') background-image:url('{{ url('/') }}/image/{{ $user->foto }}')@else background-image: url('{{ url('/image/icon/icon-profil.jpg') }}') @endif"></div> -->
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
              <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal">Tambah User</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div id="scroll" class="card-body" style="overflow-x: scroll; ">
                <table class="table table-bordered inline-block" >
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Foto</th>
                      <th>Full Nama</th>
                      <th>User</th>
                      <th>UID</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $index => $User)
                    @if ($User->nama == $login->nama)
                    <tr >
                      <td class="text-center">{{$index + 1}}</td>
                      <td class="text-center"><img src="/image/{{$User->foto}}" style="width: 100px; height: 100px; " class="rounded-circle" alt=""></td>
                      <td class="text-center">{{$User->full_name}}</td>
                      <td class="text-center">{{$User->nama}}</td>
                      <td class="text-center">{{$User->uid}}</td>
                      <td class="text-center">{{$User->alamat}}</td>
                      <td class="text-center">{{$User->telepon}}</td>
                      <td><div class="btn-group">
                      
                        

                         <!-- <a href="/data_barang/{{$User->id}}" class="btn btn-danger" data-confirm-delete="true">Hapus</a> -->
                      </div></td>
                    </tr>
                    @else
                    <tr >
                      <td class="text-center">{{$index + 1}}</td>
                      <td class="text-center"><img src="/image/{{$User->foto}}" style="width: 100px; height: 100px; object-fit: fill; " class="rounded-circle" alt=""></td>
                      <td class="text-center">{{$User->full_name}}</td>
                      <td class="text-center">{{$User->nama}}</td>
                      <td class="text-center">{{$User->uid}}</td>
                      <td class="text-center">{{$User->alamat}}</td>
                      <td class="text-center">{{$User->telepon}}</td>
                      <td><div class="btn-group">
                      <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#edit{{$User->id}}">Edit</button>
                        <div class="modal fade" id="edit{{$User->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <form action="/user/edit/{{$User->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="fullnama">Full Nama</label>
                                  <input type="text" class="form-control" required id="fullnama" value="{{$User->full_name}}" name="full_nama" placeholder="Full Nama">
                                </div>
                                <div class="form-group">
                                  <label for="nama">User</label>
                                  <input type="text" class="form-control" required id="nama" value="{{$User->nama}}" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                  <label for="nama">Password</label>
                                  <input type="password" class="form-control" required id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="mail" class="form-control" required id="email" value="{{$User->email}}" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                  <label for="uid">UID</label>
                                  <input type="text" inputmode="numeric" required class="form-control" value="{{$User->uid}}" id="uid" name="uid" placeholder="uid">
                                </div>
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" class="form-control" required id="alamat" value="{{$User->alamat}}" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                  <label for="telepon">About</label>
                                  <input type="text" class="form-control" required id="about" value="{{$User->about}}" name="about" placeholder="About">
                                </div>
                                <div class="form-group">
                                  <label for="telepon">Telepon</label>
                                  <input type="text" class="form-control" required id="telepon" value="{{$User->telepon}}" name="telepon" placeholder="Telepon">
                                </div>
                                <div class="form-group">
                                  <label for="Foto">Foto</label>
                                  <input type="file" class="form-control" required id="foto" name="foto" placeholder="Choose Image" accept="image/png, image/jpeg">
                                  <!-- <div id="imagePreview" style="@if (isset($user->id) && $user->foto != '') background-image:url('{{ url('/') }}/image/{{ $user->foto }}')@else background-image: url('{{ url('/image/icon/icon-profil.jpg') }}') @endif"></div> -->
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
                        <form action="{{ url('user', $User->id) }}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger show_confirm">Hapus </button>
                        </form>
                        <a href="/user/profil/{{$User->id}}" class="btn btn-primary">Cek</a>

                         <!-- <a href="/data_barang/{{$User->id}}" class="btn btn-danger" data-confirm-delete="true">Hapus</a> -->
                      </div></td>
                    </tr>
                    @endif
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
                {{ $user->links('pagination::bootstrap-4') }}
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