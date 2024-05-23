@include('partials.header')

<body>
  @include('sweetalert::alert')

  <!-- ======= Header ======= -->
  @include('partials.topbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  @include('partials.sidebar')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <table class="table datatable table-responsive">
          <thead>
            <tr>
              <th>Kode Buku</th>
              <th>Kategori</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Judul Seri</th>
              <th>No Panggil</th>
              <th>Penerbit</th>
              <th>Deskripsi Fisik</th>
              <th>Bahasa</th>
              <th>ISBN/ISSN</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($buku as $item)
            <tr>
              <td>{{$item->kode_buku}}</td>
              <td>{{$item->kategori->nama_kategori}}</td>
              <td>{{$item->judul_buku}}</td>
              <td>{{$item->pengarang}}</td>
              <td>{{$item->judul_seri}}</td>
              <td>{{$item->no_panggil}}</td>
              <td>{{$item->penerbit}}</td>
              <td>{{$item->deskripsi_fisik}}</td>
              <td>{{$item->bahasa}}</td>
              <td>{{$item->isbn_issn}}</td>
              <td class="d-flex gap-3">
                <a href="{{route('dashboard.admin.buku.editbuku',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{route('dashboard.admin.buku.destroybuku',$item->id)}}" method="post">
                @csrf
                @method("delete")
                <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
 @include('partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('partials.scripts')

</body>

</html>