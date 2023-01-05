@extends('website.master')
@section('content')


<section class="hero posts" id="home">
        <div class="container">

          <h2 class="h1">The Posts</h3>

          <div class="row">
            @foreach($travail as $t)
            <div class="col">
                <h4>{{__('words.name')}}: {{$t->name}}</h4>
                <h4> {{__('words.from city post')}} {{$t->from_city}} {{__('words.to city post')}}{{$t->to_city}}</h4>
                <p>{{__('words.description')}}:- {{$t->description}}</p>
                <ul>
                    <li>{{__('words.from date')}}:- {{$t->from_date}}</li>
                    <div class="media">
                    <i class="fa-brands fa-facebook"></i>

                    <li>Facebook:- 
                    <?php
                  if(isset($t->facebook)){
                     echo $t->facebook;
                  }
                  else
                  {
                    echo 'facebook not set';
                  }
                  ?>
                    </li>
                    </div>
                    

                    <div class="media">
                    <i class="fa-brands fa-instagram"></i>

                    <li>instagram:-
                    <?php
                  if(isset($t->instagram)){
                    echo $t->instagram;
                  }
                  else
                  {
                    echo 'instagram not set';
                  }
                  ?>
                    </li>
                    </div>

                    <div class="media">
                    <i class="fa-brands fa-snapchat"></i>

                    <li>snapchat:-
                    <?php
                  if(isset($t->snap)){
                    echo $t->snap;
                  }
                  else
                  {
                    echo 'snapchat not set';
                  }
                  ?>
                    </li>
                    </div>
                    

                </ul>
                <span>{{__('words.phone')}}:
                  <?php
                  if(isset($t->phone)){
                    echo $t->phone;
                  }
                  else
                  {
                    echo 'phone not set';
                  }
                  ?>
                </span>
                <span>{{__('words.email')}}:{{$t->email}}</span>


            </div>
            @endforeach
            
          </div>
        </div>
      </section>


@endsection