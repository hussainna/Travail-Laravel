@extends('website.master')

@section('content')

<section class="hero sender" id="home">
        <div class="container">

        <form action="/search-post" type='get' class="tour-search-form">

<div class="input-wrapper">
  <label for="destination" class="input-label">From City</label>

  <input type="text" name="from_city" id="destination" required placeholder="Enter Destination"
    class="input-field">
</div>
<div class="input-wrapper">
  <label for="destination" class="input-label">To City</label>

  <input type="text" name="to_city" id="destination" required placeholder="Enter Destination"
    class="input-field">
</div>
<div class="input-wrapper">
  <label for="checkin" class="input-label">From Date</label>

  <input type="date" name="from_date" id="checkin" required class="input-field">
</div>

<button type="submit" class="btn btn-secondary">Search now</button>

</form>

        </div>
      </section>


@endsection