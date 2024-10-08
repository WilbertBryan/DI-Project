
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <div>
        {{ session()->get('success') }}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    <div>
        @foreach ($errors->all() as $e)
        {{ $e }} <br>
        @endforeach
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    <div>
        {{ session()->get('error') }}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

