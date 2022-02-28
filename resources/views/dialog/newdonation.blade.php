<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/donations">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">New Donations</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card card-plain">
                        <div class="card-body">

                                @csrf
                                <label>{{ __('Name') }}</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Email" aria-describedby="name-addon" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
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
                                <label>{{ __('Amount') }}</label>
                                <div class="mb-3">
                                    <input type="number" class="form-control" placeholder="Amount" aria-label="amount" aria-describedby="email-addon" @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                                    @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label>{{ __('Donation For') }}</label>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Donation For" aria-label="donationfor" aria-describedby="donationfor-addon" @error('donationfor') is-invalid @enderror" name="donationfor" value="{{ old('donationfor') }}" required autocomplete="donationfor" autofocus></textarea>
                                        @error('donationfor')
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
