<div class="modal fade" id="editMontir-{{ $montirs->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{route('montir.update',$montirs->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="mb-3">
                            <label class="form-label">Nama Montir</label>
                            <input type="text" class="form-control  @error('nama_montir') is-invalid @enderror" name="nama_montir" value="{{$montirs->nama_montir}}">
                            @error('nama_montir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="text" class="form-control  @error('tlp_montir') is-invalid @enderror" name="tlp_montir" value="{{$montirs->tlp_montir}}">
                            @error('tlp_montir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="floatingTextarea">Alamat</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat_montir">{{$montirs->alamat_montir}}</textarea>
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
