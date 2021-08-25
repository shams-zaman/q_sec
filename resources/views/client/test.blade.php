@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('client.test.store') }}">
                        @csrf
        @foreach($categories as $category)
            <div class="card mb-3">
                <div class="card-header">{{ $category->name }}</div>

                <div class="card-body">
                    @foreach($category->categoryQuestions as $question)
                        <div class="card @if(!$loop->last)mb-3 @endif">
                            <div class="card-header">{{ $question->question_text }}</div>
        
                            <div class="card-body">
                                <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                @foreach($question->questionOptions as $option)
                                    <div class="form-check">
                                        <label class="form-check-label" for="option-{{ $option->id }}">
                                           
                                        <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}"@if(old("questions.$question->id") == $option->id) checked @endif>
                                        {{ $option->option_text }}
                                        
                                        </label>
                                    </div>
                                @endforeach

                                @if($errors->has("questions.$question->id"))
                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload=function(){
        document.getElementById("option-7").checked = true;
        document.getElementById("option-11").checked = true;
        document.getElementById('option-7').style.display = 'none';
        document.getElementById('option-11').style.display = 'none';
        // document.getElementById("option-15").checked = true;
        // document.getElementById("option-19").checked = true;
        // document.getElementById("option-23").checked = true;
        // document.getElementById("option-27").checked = true;
        // document.getElementById("option-31").checked = true;
        // document.getElementById("option-35").checked = true;
        // document.getElementById("option-39").checked = true;
        // document.getElementById("option-43").checked = true;
        // document.getElementById("option-47").checked = true;
        // document.getElementById("option-51").checked = true;
        // document.getElementById("option-55").checked = true;
        // document.getElementById("option-59").checked = true;
        // document.getElementById("option-63").checked = true;
        // document.getElementById("option-67").checked = true;
        // document.getElementById("option-71").checked = true;
        // document.getElementById("option-75").checked = true;
        // document.getElementById("option-79").checked = true;
        // document.getElementById("option-83").checked = true;
        // document.getElementById("option-87").checked = true;
        // document.getElementById("option-91").checked = true;
        // document.getElementById("option-95").checked = true;
        // document.getElementById("option-99").checked = true;
        // document.getElementById("option-103").checked = true;
        // document.getElementById("option-107").checked = true;
        // document.getElementById("option-111").checked = true;
        // document.getElementById("option-115").checked = true;
        // document.getElementById("option-119").checked = true;
        // document.getElementById("option-123").checked = true;
        // document.getElementById("option-127").checked = true;
        // document.getElementById("option-131").checked = true;
        // document.getElementById("option-135").checked = true;
        // document.getElementById("option-139").checked = true;
        // document.getElementById("option-143").checked = true;
        // document.getElementById("option-147").checked = true;
        // document.getElementById("option-151").checked = true;
        // document.getElementById("option-155").checked = true;
        // document.getElementById("option-159").checked = true;
        // document.getElementById("option-163").checked = true;
      
      
        // document.getElementById('option-15').style.display = 'none';
        // document.getElementById('option-19').style.display = 'none';
        // document.getElementById('option-23').style.display = 'none';
        // document.getElementById('option-27').style.display = 'none';
        // document.getElementById('option-31').style.display = 'none';
        // document.getElementById('option-35').style.display = 'none';
        // document.getElementById('option-39').style.display = 'none';
        // document.getElementById('option-43').style.display = 'none';
        // document.getElementById('option-47').style.display = 'none';
        // document.getElementById('option-51').style.display = 'none';
        // document.getElementById('option-55').style.display = 'none';
        // document.getElementById('option-59').style.display = 'none';
        // document.getElementById('option-63').style.display = 'none';
        // document.getElementById('option-67').style.display = 'none';
        // document.getElementById('option-71').style.display = 'none';
        // document.getElementById('option-75').style.display = 'none';
        // document.getElementById('option-79').style.display = 'none';
        // document.getElementById('option-83').style.display = 'none';
        // document.getElementById('option-87').style.display = 'none';
        // document.getElementById('option-91').style.display = 'none';
        // document.getElementById('option-95').style.display = 'none';
        // document.getElementById('option-99').style.display = 'none';
        // document.getElementById('option-103').style.display = 'none';
        // document.getElementById('option-107').style.display = 'none';
        // document.getElementById('option-111').style.display = 'none';
        // document.getElementById('option-115').style.display = 'none';
        // document.getElementById('option-119').style.display = 'none';
        // document.getElementById('option-123').style.display = 'none';
        // document.getElementById('option-127').style.display = 'none';
        // document.getElementById('option-131').style.display = 'none';
        // document.getElementById('option-135').style.display = 'none';
        // document.getElementById('option-139').style.display = 'none';
        // document.getElementById('option-143').style.display = 'none';
        // document.getElementById('option-147').style.display = 'none';
        // document.getElementById('option-151').style.display = 'none';
        // document.getElementById('option-155').style.display = 'none';
        // document.getElementById('option-159').style.display = 'none';
        // document.getElementById('option-163').style.display = 'none';
       
       
    }
</script>
@endsection