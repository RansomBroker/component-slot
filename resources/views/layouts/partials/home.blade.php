@extends('layouts.index')

@section('title', 'Home Page')

@section('content')
  <h1>HI this is Home</h1>
  <p>andd we will practices how use Component and slot</p>

  {{-- this make  manual  --}}
  <div class="card mt-5 bg-primary border-0">
    <div class="card-body">
      <h4>this is card</h4>
    </div>
  </div>


  {{-- this make  with Component and this file in layouts Components  --}}
  @card

    {{--
        We can overrdirve component befor u must use seccond parameter in component
        and u must input some value or it will error :_)
        and u can use it in slot to
      --}}

    @slot('option', 'ml-3 mr-3 mt-5')

    @slot('optionBody')
      bg-primary
    @endslot

    @slot('cardHeaderTitle')
      This is card make with component
    @endslot

    <p>HI :D </p>

  @endcard



@endsection
