@extends('site')

@section('title', 'Tytul strony')
@section('sidebar')
  @parent
  <p>
    Dołączenie do głównego paska bocznego
  </p>
@endsection

@section('content')
  <p>Treść strony</p>
@endsection
