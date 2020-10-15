
<form action="{{url('productos')}}" method="POST">
    @csrf
   
    <div class="form-group row">
        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>

        <div class="col-md-6">
            <input id="id" type="id" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

            @error('id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
 <button type="submit"></button>
</form>