@extends('main')

@section('title', 'Contact Me')

@section('content')

  <h5 class="text-center">Leave your message here, we will reply soon as possible!</h5>

  {!! Form::open(['url' => 'contact/submit']) !!}
  {{-- title goes here... --}}
  <div class="col-md-6 offset-md-3">

      {{ Form::label('title', 'Title:') }}

      {{ Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'enter your message title here...']) }}
  </div>
  {{-- phone number goes here... --}}
  <div class="col-md-6 offset-md-3">
    {{ Form::label('phone', 'Phone number:') }}

    {{ Form::number('phone', '', ['class'=>'form-control', 'placeholder'=>'enter your phone number here...']) }}

  </div>
  {{-- email goes from here... --}}
  <div class="col-md-6 offset-md-3">
      {{ Form::label('email', 'E-Mail Address:') }}

      {{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'enter your email here...']) }}
  </div>

  <div class="col-md-6 offset-md-3">
      {{ Form::label('body', 'Message:') }}
  <!-- ckeditor added from here... it can be removed in case of any reason... -->
      {{ Form::textarea('body', '', ['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'enter your message here...']) }}
  </div>




  <div class="col-md-6 offset-md-3" style="margin-top:20px;">
    {{ Form::submit('Submit', ['class'=>'btn btn-primary btn-md btn-block'] ) }}
  </div>
  {!! Form::close() !!}

@endsection
