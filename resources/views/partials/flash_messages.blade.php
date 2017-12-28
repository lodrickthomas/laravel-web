@if(Session::has('success'))

      <div class="alert alert-success" role="alert">
        <strong>Success: </strong>{{session::get('success')}}
      </div>

@endif

@if(count($errors) > 0)

      <div class="alert alert-danger" role="alert">
        <strong>Error: </strong>
        <ol type="i">

          @foreach($errors->all() as $error)
          <li style="margin-left:20px;">{{ $error }}</li>
          @endforeach

        </ol>
      </div>

@endif
