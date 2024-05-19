@if ($errors->any())
          <div class="pt-3">
            <div class="alert alert-danger">
              @foreach ($errors->all() as $item)
                  <li>{{ $item }}</li>
              @endforeach
            </div> 
          </div>
@endif

@if (Session::has('success'))
        <div class="pt-3">
          <div class="alert alert-success">
             {{ Session::get('success') }}
          </div>
        </div>
@endif

@if (Session::has('loginError'))
        <div class="pt-3">
          <div class="alert alert-danger">
             {{ Session::get('loginError') }}
          </div>
        </div>
@endif