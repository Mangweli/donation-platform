<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/members">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">New Donar</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card card-plain">
                        <div class="card-body">

                                @csrf
                                <label>{{ __('First Name') }}</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First Name" aria-label="name" aria-describedby="name-addon" @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>{{ __('Last Name') }}</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Last Name" aria-label="name" aria-describedby="name-addon" @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>{{ __('Email Address') }}</label>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>{{ __('Phone') }}</label>
                                <div class="mb-3">
                                    <input type="number" class="form-control" placeholder="2547XXXXXXXX" aria-label="phone" aria-describedby="phone-addon" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>{{ __('Address') }}</label>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Address" aria-label="Address" aria-describedby="address-addon" @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-warningr" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Process</button>
                </div>
            </form>

        </div>
    </div>
</div>
