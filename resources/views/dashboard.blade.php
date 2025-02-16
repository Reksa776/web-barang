<x-main title="Dashboard" loginFoto="{{$login->foto}}" loginNama="{{$login->nama}}" loginUid="{{$login->uid}}" loginAlamat="{{$login->alamat}}" loginFullName="{{$login->full_name}}" loginTelepon="{{$login->telepon}}" loginAbout="{{$login->About}}" loginEmail="{{$login->Email}}">
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$dataBarang}}</h3>

                <p>Data Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/data_barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>Jumlah User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$barangMasuk}}</h3>

                <p>Total Transaksi Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/barang_masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$barangKeluar}}</h3>

                <p>Total Transaksi Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/barang_keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Account</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="">
                <table class="table table-head-fixed text-nowrap">
                  
                  <tbody>
                    <tr>
                      <td>User</td>
                      <td>{{$login->nama}}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{{$login->email}}</td>
                    </tr>
                    <tr>
                      <td>Telepon</td>
                      <td>{{$login->telepon}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

</x-main>