@extends('admin')

@section('style')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endsection

@section('content')
<section class="row">
  <div class="col-sm-12">
      @include('partials.notif.error')
      @include('partials.notif.success')
      <section class="row">
          @include('pages.doctor._partials.nav-pills')
          <div class="col-sm-12">

            <div class="card text-center">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('schedule')}}">Back</a>
                  </li>
                </ul>
              </div>
              
              <div class="card-block">
                <div class="card text-left" style="width: 100%; border-style: none;">
                  <div class="card-body">
                    <form class="form-horizontal" action="{{route('schedule-update', $schedule->id)}}" method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                      <div class="form-group">
                        <label class="col-12 control-label no-padding" for="name">City</label>
                        <div class="col-12 no-padding">
                          <input type="text" class="form-control" value="{{$schedule->city->name}}" name="doctor_id" disabled>
                          {{-- <select class="form-control" name="city_id">
                            <option selected disabled>Select City</option>
                            @foreach($city as $v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                            @endforeach
                          </select> --}}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-12 control-label no-padding" for="address">Doctor</label>
                        <div class="col-12 no-padding">
                          <input type="text" class="form-control" value="{{$schedule->doctor->name}}" name="doctor_id" disabled>
                          {{-- <select class="form-control" name="doctor_id">
                            <option selected disabled>Select Doctor</option>
                            @foreach($doctor as $d)
                            <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach
                          </select> --}}
                        </div>
                      </div>
                      <div class="row col-12">
                        <label class="col-12 control-label no-padding" for="address">Days & Time</label>
                        <div class="col">
                          <select class="form-control" name="day">
                            <option selected disabled>Select Day</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                          </select>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control time_picker" name="start_time" placeholder="Start Time">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control time_picker" name="end_time" placeholder="End Time">
                        </div>
                      </div><br>
                      <div class="form-group">
                          <div class="col-12 widget-right no-padding">
                            <button type="submit" class="btn btn-primary btn-md float-right">Edit</button>
                          </div>
                        </div>
                    </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <section class="row">
          {{-- <div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div> --}}
      </section>
  </div>
</section>
@endsection

@section('javascript')
<script type="text/javascript">
  $('#bs-example-navbar-collapse-1').on('show.bs.collapse', function() {
    $('.nav-pills').addClass('nav-stacked');
  });

  //Unstack menu when not collapsed
  $('#bs-example-navbar-collapse-1').on('hide.bs.collapse', function() {
      $('.nav-pills').removeClass('nav-stacked');
  });
</script>
@endsection