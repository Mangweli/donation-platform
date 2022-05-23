<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/programs">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">New Program</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card card-plain">
                        <div class="card-body">

                                @csrf
                                <label>{{ __('Name') }}</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="name" aria-describedby="name-addon" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label>{{ __('Description') }}</label>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Description" aria-label="description" aria-describedby="description-addon" @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                        @error('description')
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
