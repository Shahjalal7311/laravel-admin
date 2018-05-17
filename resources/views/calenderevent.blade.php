@extends('layouts.app')

@section('content')
<div class="wraper container-fluid">
			<div class="page-title"> 
					<h3 class="title">Calendar</h3>
					<a href="http://fullcalendar.io/" class="btn btn-primary pull-right m-b-15">Full Documentation</a>
			</div>
			<div class="clearfix"></div>

			<div class="row">
					<div class="col-lg-2 col-md-3">

							<h4>Created Events</h4>
							<form method="post" id="add_event_form">
									<input type="text" class="form-control new-event-form" placeholder="Add new event..." />
							</form>

							<div id='external-events'>
									<h4 class="m-b-15">Draggable Events</h4>
									<div class='fc-event'>My Event 1</div>
									<div class='fc-event'>My Event 2</div>
									<div class='fc-event'>My Event 3</div>
									<div class='fc-event'>My Event 4</div>
									<div class='fc-event'>My Event 5</div>                                                
							</div>
							<label class="cr-styled form-label m-t-20" for='drop-remove'>
									<input type="checkbox" id='drop-remove'>
									<i class="fa"></i> 
									Drop&nbsp;&&nbsp;Remove
							</label>
					</div>

					<div id='calendar' class="col-md-9 col-lg-10"></div>

			</div>
			<!-- page end-->

	</div> <!-- END Wraper -->
@endsection