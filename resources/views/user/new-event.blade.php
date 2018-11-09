@extends('layouts.main_user')

@section('style')

@endsection

@section('header')
  <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">New Event</span> - Create tickets for your event!
  </h4>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          <form action="{{url('/user/events')}}" method="POST"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="event-name">Event name</label>
              <input type="text" class="form-control" required name="event_name" value="">
              <p class="help-block">What is your event called?</p>
            </div>
            <div class="form-group">
              <label for="event-name">Description</label>
              <textarea name="event_description" class="form-control" rows="8" cols="80" required></textarea>
              <p class="help-block">Describe your event so users know how entertaining it is!</p>
            </div>
            <div class="form-group">
              <label for="event-name">Event type</label>
              <select class="form-control" required name="event_type">
                  <option value="Concert">Concert</option>
                  <option value="Seminar">Seminar</option>
                  <option value="Workshop">Workshop</option>
                  <option value="Exhibition">Exhibition</option>
                  <option value="Sport">Sport</option>
              </select>
            </div>
            <div class="form-group">
              <label for="event-name">Start date</label>
              <input class="form-control input-date" type="date" name="start_date" required>
              <p class="help-block">When does your event start?</p>
            </div>
            <div class="form-group">
              <label for="event-name">End date</label>
              <input class="form-control input-date" type="date" name="end_date" required>
              <p class="help-block">When does your event end?</p>
            </div>
            <div class="form-group">
              <label for="event-name">Price</label>
              <input class="form-control" type="number" min="1" step="1" required name="price">
              <p class="help-block">The price for one ticket.</p>
            </div>
            <div class="form-group">
              <label for="event-name">Quota</label>
              <input class="form-control" type="number" min="1" step="1" required name="quota">
              <p class="help-block">The tickets available for your event.</p>
            </div>
            <div class="form-group">
              <input type="file" name="event_pictures" multiple="multiple" class="form-control" accept="image/*" onchange="validate_fileupload(this.value);">
              <p class="help-block">Attach pictures to add buzz to your event.</p>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script type="text/javascript">
  $("input, textarea").keyup(function(){
    if ($(this).val().trim() != "") {
      $(this).css('border-left', '2px solid  #03D61D');
    }else{
      $(this).css('border-left', '2px solid  red');

    }
  });

  $('[type="date"]').prop('min', function(){
      return new Date().toJSON().split('T')[0];
  });


  function validate_fileupload(fileName)
  {
    var allowed_extensions = new Array("jpg","png", "jpeg");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    for(var i = 0; i <= allowed_extensions.length; i++)
    {
      if(allowed_extensions[i]==file_extension)
      {
        return true; // valid file extension
      }
    }
    alert("Please attach a jpg or png image.")
    $("input[name='event_pictures']").val('');
    return false;
  }
</script>
@endsection
