<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test No. {{ $result->id }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <style type="text/css">
        @font-face {
  font-family: 'font_family';
  font-style: normal;
  font-weight: normal;
  src: url(http://qld_one_e.test/fonts/kalpurush.ttf) format('truetype');
}
            html {
                margin: 0;
            }
            body {
                background-color: #FFFFFF;
                font-size: 15px;
                margin: 36pt;
            }
            td{
                /* height: 70%; */
            }
        </style>
    </head>
    <body>
        <p class="mt-5">Total points: {{ $result->total_points }} points</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Question Text</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result->questions as $question)
                    <tr>
                        <td style="font-family: font_family, sans-serif;">{{ $question->question_text }}</td>
                        <td style="">{{ $question->pivot->points/2 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>