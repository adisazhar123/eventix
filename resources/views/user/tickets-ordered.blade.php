@extends('layouts.main_user')

@section('style')

@endsection

@section('header')
<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">My Tickets</span> - These are the tickets I have ordered!</h4>
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
              @for ($i = 0; $i < 5; $i++)
                <tr>
                  <td>Ludruk</td>
                  <td>09-10-2018</td>
                  <td>
                    <button type="button" name="button" class="btn btn-info">View</button>
                  </td>
                </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready( function () {
  $('table').DataTable({
    responsive: true
  });
});
</script>
@endsection
