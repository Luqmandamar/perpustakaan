@include('partials.header')

<body>

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
       <div class="card">
        <div class="card-body">
            <form action="{{route('dashboard.admin.buku.storebuku')}}" method="POST">
              @csrf
                <label for="kode_buku">Kode Buku</label>
                <input type="text" name="kode_buku"id="kode_buku" class="form-control"
                placeholder="kode buku" value="{{old('kode_buku')}}">

                <label for="judul_buku">Judul Buku</label>
                <input type="text" name="judul_buku"id="judul_buku" class="form-control"
                placeholder="judul buku" value="{{old('judul_buku')}}">

                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang"id="pengarang" class="form-control"
                placeholder="pengarang" value="{{old('pengarang')}}">

                <label for="judul_seri">Judul Seri</label>
                <input type="text" name="judul_seri"id="judul_seri" class="form-control"
                placeholder="judul seri" value="{{old('judul_seri')}}">

                <label for="no_panggil">No Panggil</label>
                <input type="text" name="no_panggil"id="no_panggil" class="form-control"
                placeholder="nomor" value="{{old('no_panggil')}}">

                <label for="tahun_buku">Tahun Buku</label>
                <input type="text" name="tahun_buku"id="tahun_buku" class="form-control"
                placeholder="tahun buku" value="{{old('tahun_buku')}}">

                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit"id="penerbit" class="form-control"
                placeholder="penerbit" value="{{old('penerbit')}}">

                <label>Select</label>
                <div>
                  <select class="form-select" name="id_kategori"aria-label="Default select example">
                    @foreach ($kategori as $subitem)
                    <option value="{{$subitem->id_kategori}}" @selected(old("id_kategori")==$subitem->id_kategori)>{{$subitem->nama_kategori}}</option>
                    @endforeach
                  </select>
                </div>

                <label>Select</label>
                <div>
                  <select class="form-select" name="id_lokasi"aria-label="Default select example">
                    @foreach ($lokasi as $subitem)
                    <option value="{{$subitem->id_kategori}}" @selected(old("id_lokasi")==$subitem->id)>{{$subitem->nama_lokasi}}</option>
                    @endforeach
                  </select>
                </div>

                <label for="bahasa">Bahasa</label>
                <input type="text" name="bahasa"id="bahasa" class="form-control"
                placeholder="bahasa" value="{{old('bahasa')}}">

                <label for="deskripsi_fisik" class="col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi_fisik"id="deskripsi_fisik"style="height: 100px">{{old('deskripsi_fisik')}}</textarea>
                  </div>

                <label for="isbn_issn">ISBN/ISSN</label>
                <input type="text" name="isbn_issn"id="isbn_issn" class="form-control"
                placeholder="isbn/issn" value="{{old('isbn_issn')}}">
              
                <button type="submit" class="btn btn-primary">
                    Tambah Buku
                </button>
            </form>
        </div>
       </div>
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