@extends('layouts.app')

@section('content')
<div class="col-md-13 col-sm-8" style="margin-left:auto;margin-right:auto">
    <h3 class="text-center">Click on Button to answer question</h3>
    <h3 class="text-center"><b>P</b>: Pending  <b>D</b>: Done</h3>
    <div class="container">
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
                        <button type="button" class="close"  data-dismiss="modal" >&times;</button>
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
		        			        <b>Options: </b>
                                    <!-- OPtions -->
                                @endif
                                <div id="option_container">
							<ul>
								<li>
									<input type="radio" id="option_1" name="quiz" value="Very Much" class="radio">
									<label for="option_1" id="option1">Very Much</label>

									<div class="check"></div>
								</li>

								<li>
									<input type="radio" id="option_2" name="quiz" value="Sometimes" class="radio">
									<label for="option_2" id="option2">Sometimes</label>

									<div class="check">
										<div class="inside"></div>
									</div>
								</li>

								<li>
									<input type="radio" id="option_3" name="quiz" value="Rarely" class="radio">
									<label for="option_3" id="option3">Rarely</label>

									<div class="check">
										<div class="inside"></div>
									</div>
								</li>
								<li>
									<input type="radio" id="option_4" name="quiz" value="Never" class="radio">
									<label for="option_4" id="option4">Never</label>

									<div class="check">
										<div class="inside"></div>
									</div>
								</li>
							</ul>

						</div>
                                <br>
                                    <input name="question_id" value="{{$question->ques_id}}" type="hidden">

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
</div>
<a href="/generateScore/{{Auth::user()->id}}"><button class = 'btn btn-success ' style="margin-left:40%; margin-top:20px;">Generate Score</button></a>



<script type="text/javascript">
    $(document).ready(function(){
        $(".modal").on('shown.bs.modal', function(){
            $(this).find('#questionAnswer').focus();
        });
    });
</script>

@endsection