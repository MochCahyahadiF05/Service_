<div class="modal fade" id="detaiTransaksi-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col">
                            <label for="" class="form-label">User Yang Pesan</label>
                            <input type="text" class="form-control" value="{{$data->user->name}}" readonly>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Nama Montir</label>
                            <input type="text" class="form-control" value="{{$data->montir->nama_montir ?? 'Belum DI Terima'}}" readonly>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="" class="form-label">Tanggal Pesan</label>
                            <input type="text" class="form-control" value="{{$data->tgl_boking}}" readonly>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">No Polisi</label>
                            <input type="text" class="form-control" value="{{$data->no_polisi}}" readonly>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="" class="form-label">Jenis Service</label>
                            <input type="text" class="form-control" value="{{$data->service->nama_service}}" readonly>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Harga Service</label>
                            <input type="text" class="form-control" value=" Rp. {{$data->service->harga_service}}" readonly>
                        </div>
                    </div>
                    @if($data->id_barang)
                    <div class="row mt-2">
                        <div class="col">
                            <label for="" class="form-label">Oli</label>
                            <input type="text" class="form-control" value="{{$data->barang->merk}}" readonly>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Qty</label>
                            <input type="text" class="form-control" value="{{$data->jumlah}}" readonly>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Harga Oli</label>
                            <input type="text" class="form-control" value="Rp. {{number_format($data->barang->harga_barang)}}" readonly>
                        </div>
                    </div>
                    @endif
                    <div class="row mt-2">
                        <div class="col">
                            <label for="" class="form-label">Status</label>
                            <input type="text" class="form-control" value="{{$data->status}}" readonly>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Total</label>
                            <input type="text" class="form-control" value="Rp. {{number_format($data->total)}}" readonly>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
