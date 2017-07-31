<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script>
        </script>
        <!-- Styles -->

    </head>
    <body>
            <div class="calcBG">
                <div class="rows" id="result">
                    <form class="form" name="calc" method="post">
                        {{ csrf_field() }}
                        <input type="text" class="screen text-right" name="result" readonly>
                    </form>
                </div>
                <div class="rows">
                    <button id="7" type="button" class="btn btn-info num" >7</button>
                    <button id="8" type="button" class="btn btn-info num" >8</button>
                    <button id="9" type="button" class="btn btn-info num" >9</button>
                    <button id="+" type="button" class="btn btn-info operation" disabled>+</button>
                </div>
                <div class="rows">
                    <button id="4" type="button" class="btn btn-info num" >4</button>
                    <button id="5" type="button" class="btn btn-info num" >5</button>
                    <button id="6" type="button" class="btn btn-info num" >6</button>
                    <button id="*" type="button" class="btn btn-info operation" disabled>x</button>
                </div>
                <div class="rows">
                    <button id="1" type="button" class="btn btn-info num" >1</button>
                    <button id="2" type="button" class="btn btn-info num" >2</button>
                    <button id="3" type="button" class="btn btn-info num" >3</button>
                    <button id="equals" type="button" class="btn btn-success">=</button>

                </div>
                <div class="rows">
                    <button id="0" type="button" class="btn btn-info num">0</button>
                    <button id="C" type="button" class="btn btn-danger clear">C</button>
                </div>
            </div>
    <script src="/js/app.js"></script>
    </body>
</html>
