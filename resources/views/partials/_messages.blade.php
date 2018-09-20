@if (Session::has('success'))
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          <strong>Success: </strong> {{ Session::get('success') }}
        </div>
      </div>
    </div>
	
@endif

@if (count($errors) > 0)

    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <strong>Errors: </strong> 
          <ul>
          @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
          @endforeach
          </ul>
      </div>
      </div>
    </div>

	
@endif