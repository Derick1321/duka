   <div class="mb-3">
       <label for="{{ $label }}">{{ $label }}</label>
       <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
           class="form-control  @error($name) is-invalid @enderror" id="username" placeholder="{{ $placeholder }}"
           {{ $attributes }}>
       @error($name)
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
   </div>