<div class="modal fade" id="editUserData-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{route('user.update',$data->id)}}" method="post">
                @csrf
                @method('put')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="mb-3">
                            <label for="formName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="formName" name="name" placeholder="Your Name" value="{{$data->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="formEmail" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="formEmail" name="email" placeholder="name@example.com" value="{{$data->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="old_password" class="form-label">{{ __('Old Password') }}</label>
                            <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">

                            @error('old_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-">
                            <label for="password" class="form-label">{{ __('New Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="radioRole" value="user" @if($data->role == 'user') checked @endif>
                                <label class="form-check-label" for="radioRole">
                                    User
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="radioRole" value="admin" @if($data->role == 'admin') checked @endif>
                                <label class="form-check-label" for="radioRole">
                                    Admin
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formNumberPon" class="form-label">Your No Phone</label>
                            <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_telepon" value="{{$data->no_telepon}}">
                        </div>
                        <div class="mb-3">
                            <label for="formNumberPon" class="form-label">Your No Polisi</label>
                            <input type="text" class="form-control" id="formNumberPon" placeholder="name@example.com" name="no_polisi" value="{{$data->no_polisi}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" >{{$data->alamat}}</textarea>
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
