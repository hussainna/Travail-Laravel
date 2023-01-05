@extends('website.master')

@section('content')



<section class="hero" id="home">
        <div class="container">
        <form class='travail' action="insert-travail" method='POST'>
    @csrf

    <div class="form-control">
        <label>{{__('words.name')}}</label>
        <input type="text" name="name" placeholder='write name' id="">
        @error('name')
        <small>{{$message}}</small>
        @enderror
    </div>
    
    <div class="form-control">
        <label>{{__('words.email')}}</label>
        <input type="text" name="email" placeholder='write email' id="">
        @error('email')
        <small>{{$message}}</small>
        @enderror
    </div>
    <div class="form-control">
        <label>{{__('words.from city')}}</label>
        <input type="text" name="from_city" placeholder='write from city' id="">
        @error('from_city')
        <small>{{$message}}</small>
        @enderror
    </div>
    <div class="form-control">
        <label>{{__('words.to city')}}</label>
        <input type="text" name="to_city" placeholder='write to city' id="">
        @error('to_city')
        <small>{{$message}}</small>
        @enderror
    </div>
    <div class="form-control">
        <label>{{__('words.description')}}</label>
        <input type="text" name="description" placeholder='write description' id="">
        @error('description')
        <small>{{$message}}</small>
        @enderror
    </div>
    <div class="form-control">
        <label>{{__('words.from date')}}</label>
        <input type="date" name="from_date" placeholder='write to date' id="">
        @error('from_date')
        <small>{{$message}}</small>
        @enderror
    </div>
    
    <div class="form-control">
        <label>{{__('words.phone')}}</label>
        <input type="text" name="phone" placeholder='write phone' id="">
        @error('phone')
        <small>{{$message}}</small>
        @enderror
    </div>
    <div class="form-control">
        <label>Facebook</label>
        <div class="media">

        <i class="fa-brands fa-facebook"></i>
        <input type="text" name="facebook" placeholder='write' id="">
        </div>
    </div>

    <div class="form-control">
        <label>instagram</label>
        <div class="media">
        <i class="fa-brands fa-instagram"></i>
        <input type="text" name="instagram" placeholder='write' id="">
        </div>

    </div>
    <div class="form-control">
        <label>snapchat</label>
        <div class="media">
        <i class="fa-brands fa-snapchat"></i>
        <input type="text" name="snap" placeholder='write' id="">
        </div>
    </div>
    <button>{{__('words.submit')}}</button>
</form>
        </div>
      </section>


@endsection

