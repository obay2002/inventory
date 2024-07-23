@extends('layout.layout')
@section('internal')

<div class="container mt-4 border-light" >
<div class="text-right">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
 مناقلة داخلية
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      مناقلة خارجية
    </label>
  </div>
</div>
</div>




@endsection