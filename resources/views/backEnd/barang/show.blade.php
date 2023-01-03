<div class="modal fade" id="showBarang-{{$barangs->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-5 col-xl-3">
                            @if(isset($barangs) && $barangs->foto)
                                <img src="{{ asset('gambar/barangs/'. $barangs->foto) }}" class="img-responsive" style="width: 250px; height: 250px; border-radius: 12px;">
                            @endif
                        </div>
                        <div class="col-md-5 col-lg-7 col-xl-9">
                            <label class="form-label mt-1">Nama Barang</label>
                            <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{$barangs->nama_barang}}" readonly>
                            <label class="form-label mt-1">Merk</label>
                            <input type="text" class="form-control  @error('merk') is-invalid @enderror" name="merk" value="{{$barangs->merk}}" readonly>
                            <label class="form-label mt-1">Stok Barang</label>
                            <input type="number" class="form-control  @error('stok_barang') is-invalid @enderror" name="stok_barang" value="{{$barangs->stok_barang}}" readonly>
                            <label class="form-label mt-1">Harga Barang</label>
                            <input type="number" class="form-control  @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{$barangs->harga_barang}}" readonly>
                            <label for="floatingTextarea" class="mt-1">Description</label>
                            <textarea class="form-control" placeholder="Description Barang" id="floatingTextarea" name="deskripsi" readonly>{{$barangs->deskripsi}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
