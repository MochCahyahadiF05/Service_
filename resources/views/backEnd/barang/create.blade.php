<div class="modal fade" id="addBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror" name="nama_barang">
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control  @error('merk') is-invalid @enderror" name="merk">
                            @error('merk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok Barang</label>
                            <input type="text" class="form-control  @error('stok_barang') is-invalid @enderror" name="stok_barang">
                            @error('stok_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Barang</label>
                            <input type="number" class="form-control  @error('harga_barang') is-invalid @enderror" name="harga_barang">
                            @error('harga_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        {{-- <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Gambar Produk</label>
                            <input class="form-control" type="file" id="formFileMultiple" name="foto" accept="image/png,image/jpg,image/jpeg">
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label">Foto baran</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" accept="image/png,image/jpg,image/jpeg,image/svg">
                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="floatingTextarea">Description</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" name="status">
                                {{-- <option value="null" aria-readonly="false">Status</option> --}}
                                <option value="ready">Ready</option>
                                <option value="sold">Sold</option>
                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
