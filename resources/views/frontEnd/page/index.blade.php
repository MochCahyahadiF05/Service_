
@extends('frontEnd.layouts.indexx')
@section('banner')
@include('sweetalert::alert')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Booking Service</h1>
        <nav class="d-flex align-items-center">
          <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
          <a href="category.html">Booking Servicer</a>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection
@section('contentt')
<section class="mb-5 mt-5">
    <div class="container">
        <div class="tab-pane">
            <form class="form-horizontal" method="POST" action="{{route('transaksi.store')}}">
                @csrf
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputName" placeholder="Name" name="nama">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">No Plat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="inputEmail" placeholder="D 1234 TES" name="no_polisi">
                        @error('no_polisi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Tanggal Boking</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control @error('tgl_boking') is-invalid @enderror" id="inputSkills" placeholder="Skills" name="tgl_boking">
                        @error('tgl_boking')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="inputExperience" placeholder="Experience" name="alamat"></textarea>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Jenis Service</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="inputSkills" placeholder="Skills"> --}}
                        <select class="form-contro @error('id_service') is-invalid @enderror" name="id_service">
                            <option value="0">Pilih Komponen Request</option>
                            @foreach($service as $services)
                            @if($services->status == 'aktif')
                            <option value="{{$services->id}}">{{$services->nama_service }} | {{$services->harga_service}} </option>
                            @endif
                            @endforeach
                        </select>
                        @error('id_service')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="form-group-row">
            <label for="inputExperience" class="col-sm-2 col-form-label">barang?</label>
            <input type="radio" name="yesno" id="yesCheck" onclick="javascript:yesNoCheck();">iya
            <input type="radio" name="yesno" id="noCheck" onclick="javascript:yesNoCheck();">no
          </div> --}}
                {{-- <span id="ifYes" style="display: none"> --}}
                <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Merk oli</label>
                    <div class="col-sm-10">
                        <select class="form-control @error('id_barang') is-invalid @enderror" name="id_barang">
                            <option value="0">Pilih Komponen Request</option>
                            @foreach($barang as $barangs)
                            @if($barangs->status == 'ready')
                            <option value="{{$barangs->id}}">{{$barangs->merk }} | {{$barangs->harga_barang}} </option>
                            @endif
                            @endforeach
                        </select>
                        @error('id_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">qty</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="inputSkills" placeholder="qty" name="jumlah">
                        @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- </span> --}}
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">pesan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
<script type="text/javascript">
      function yesNoCheck(){
        if (document.getElementById('yesCheck').checked) {
          document.getElementById('ifYes').style.display='block';
        }
        else{
          document.getElementById('ifYes').style.display='none';
        }
      }
    </script>
@endsection

