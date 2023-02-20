<div class="modal fade" id="updateTransaksi-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('transaksi.update',$data->id)}}" method="post">
                @method('put')
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="mb-3">
                            <label class="form-label">Pilih Montir</label>
                            <select class="form-select @error('id_montir') is-invalid @enderror" name="id_montir" value="{{$data->id_montir}}">
                                {{-- <option value="null" aria-readonly="false" selected>Pilih Montir</option> --}}
                                @foreach($montir as $montirs)
                                    @if($montirs->status == 'aktif')
                                    <option value="{{$montirs->id}}" {{$montirs->id == $montirs->id ? 'selected' : ''}}>{{$montirs->nama_montir }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('id_montir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" name="status">
                                <option value="null" aria-readonly="false">Status</option>

                                <option value="Boking" {{$data->status == 'Boking' ? 'selected' : ''}}>Booking</option>
                                <option value="Proses" {{$data->status == 'Proses' ? 'selected' : ''}}>Proses</option>
                                <option value="Selesai"{{$data->status == 'Selesai' ? 'selected' : ''}}>Selesai</option>
                                <option value="Cencel"{{$data->status == 'Cencel' ? 'selected' : ''}}>Cenceled</option>

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
