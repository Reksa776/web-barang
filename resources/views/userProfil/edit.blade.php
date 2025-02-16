<x-main title="Edit User" loginFoto="{{$login->foto}}" loginNama="{{$login->nama}}" loginUid="{{$login->uid}}" loginAlamat="{{$login->alamat}}" loginFullName="{{$login->full_name}}" loginTelepon="{{$login->telepon}}" loginAbout="{{$login->About}}" loginEmail="{{$login->Email}}">
    <section class="content">
        <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit User</h3>
          </div>
          @foreach($user as $index => $User)
          <form action="" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="fullnama">Full Nama</label>
                  <input type="text" class="form-control" id="fullnama" value="{{$User->full_name}}" name="full_nama" placeholder="Full Nama">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="mail" class="form-control" id="email" value="{{$User->email}}" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" value="{{$User->alamat}}" name="alamat" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="telepon">Telepon</label>
                  <input type="text" class="form-control" id="telepon" value="{{$User->telepon}}" name="telepon" placeholder="Telepon">
                </div>
                <div class="form-group">
                  <label for="Foto">Foto</label>
                  <input type="file" class="form-control" id="foto" value="{{$User->foto}}" name="foto" placeholder="Choose Image" accept="image/png, image/jpeg">
                  <!-- <div id="imagePreview" style="@if (isset($user->id) && $user->foto != '') background-image:url('{{ url('/') }}/image/{{ $user->foto }}')@else background-image: url('{{ url('/image/icon/icon-profil.jpg') }}') @endif"></div> -->
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="nama">User</label>
                  <input type="text" class="form-control" id="nama" value="{{$User->nama}}" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="uid">UID</label>
                  <input type="text" inputmode="numeric" class="form-control" value="{{$User->uid}}" id="uid" name="uid" placeholder="uid">
                </div>
                <div class="form-group">
                  <label for="telepon">About</label>
                  <input type="text" class="form-control" id="about" value="{{$User->about}}" name="about" placeholder="About">
                </div>
                
                <div class="form-group">
                  <label for="nama">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="modal-footer">
                    <a href="/user" class="btn btn-secondary">Close</a>
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