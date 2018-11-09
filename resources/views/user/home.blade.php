@extends('layouts.main_user')

@section('style')
<style media="screen">
  .event{
    text-align: center;
    border-color: #eeeeef;
    border-style: solid;
    border-width: thin;
    border-radius: 5px;
  }
  .event:hover{
    cursor: pointer;
    background-color: #eeeeef;
  }

  .event a{
    text-decoration: none;
    color: black;
  }
</style>
@endsection

@section('header')
  <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">My Tickets</span> - These are the tickets for my events!
    <button id="new-ticket" type="button" class="btn btn-primary" name="button" style="float: right">New ticket</button>
  </h4>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table table-striped table-hover table-responsive">
            <thead>
              <th>Event name</th>
              <th>Date</th>
              <th>Action</th>
            </thead>
            <tbody>
              @foreach ($events as $e)
                <tr>
                  <td>{{$e->name}}</td>
                  <td>{{$e->date1}}</td>
                  <td>
                    {{-- <button type="button" name="button" class="btn btn-danger">Delete</button> --}}
                    <button type="button" name="button" class="btn btn-info">View</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div id="event-type" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">What type of event?</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <div class="event">
                  <a href="{{url('/user/new/event')}}">
                    <h4>Concert</h4>
                  </a>

                </div>
              </div>
              <div class="col-md-3">
                <div class="event">
                  <a href="{{url('/user/new/event')}}">
                    <h4>Seminar</h4>
                  </a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="event">
                  <a href="{{url('/user/new/event')}}">
                    <h4>Workshop</h4>
                  </a>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <div class="event">
                  <a href="{{url('/user/new/event')}}">
                    <h4>Exhibition</h4>
                  </a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="event">
                  <a href="{{url('/user/new/event')}}">
                    <h4>Sport</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
    </div>

  </div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $("#new-ticket").click(function(){
      $("#event-type").modal('show');
    });

    $(document).ready( function () {
      $('table').DataTable();
    });


  });
</script>
@endsection
