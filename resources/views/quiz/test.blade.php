@extends('layouts.app')

@section('content')
<div class="col-md-13 col-sm-8" style="margin-left:auto;margin-right:auto">
    <h3 class="text-center">Click on Button to answer question</h3>
    <h3 class="text-center"><b>P</b>: Pending  <b>D</b>: Done</h3>
    @foreach($questions as $question)
        @if($question->ques_ans == 1)
        <button type="button" class="attendance-card col-xs-2 col-sm-2 col-md-3 btn-success" style="margin: 0.5%" data-toggle="modal" data-target="#questionModal{{$question->ques_id}}">
            <span id="info {{ $question->ques_set_id }}" class="state">D</span>
            <div class="roll-no text-center">{{ $question->ques_id }}</div>
            <div class="text-center name">{{$question->ques_set_name}}</div>
        </button>
        @else
        <button type="button" class="attendance-card col-xs-2 col-sm-2 col-md-3 btn-warning" style="margin: 0.5%" data-toggle="modal" data-target="#questionModal{{$question->ques_id}}">
            <span id="info {{ $question->ques_set_id }}" class="state">P</span>
            <div class="roll-no text-center">{{ $question->ques_id }}</div>
            <div class="text-center name">{{$question->ques_set_name}}</div>
        </button>
        @endif
        
        <div id="questionModal{{$question->ques_id}}" class="modal fade" role="dialog">
            <div class="modal-dialog">
        
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        
                    <h4 class="modal-title">{{$question->ques}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p><b>Question Number: </b>{{$question->ques_id}}</p>
                        <p><b>Ouestion: </b>{{$question->ques}}</p>
                        
                        <p>
                            <form action="/quiz/update" method="post">
                            @csrf
					        	@if($question->ques_ans == 1)
		        			        <b><p style="color: red">Already Answered!</p> However, you may update it.</b>
							        <!-- <input class="form-control" name="rfid" value="" required> -->
						        @else
		        			        <b>RFID: </b>
                                    <!-- OPtions -->
                                @endif
                                    <input type="text" class="form-control" name="questionAnswer" value="" id="questionAnswer" required>
                                <br>
                                    <input name="uid" value="{{$question->ques_id}}" type="hidden">

                                <input class="col-md-4 col-md-offset-4  btn btn-success" type="submit" name="submit" value="Update Answer">
                                </form>
					<br>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        
            </div>
        </div>
    @endforeach
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $(".modal").on('shown.bs.modal', function(){
            $(this).find('#questionAnswer').focus();
        });
    });
</script>

@endsection