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
                                <label>{{ __('Donor') }}</label>
                                <div class="mb-3">
                                    <select class="form-control" placeholder="Select Donor aria-label="donor" aria-describedby="donor-addon" @error('donor') is-invalid @enderror" name="donor" value="{{ old('donor') }}" required autocomplete="donor" autofocus>
                                        @foreach($donors as $donor)
                                            <option value="{{ $donor->id }}">{{ $donor->first_name }} {{ $donor->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label>{{ __('Programs') }}</label>
                                <div class="mb-3">
                                    <select class="form-control" placeholder="Select program aria-label="program" aria-describedby="program-addon" @error('program') is-invalid @enderror" name="program" value="{{ old('program') }}" required autocomplete="program" autofocus>
                                        @foreach($programs as $program)
                                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                                        @endforeach
                                    </select>
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
