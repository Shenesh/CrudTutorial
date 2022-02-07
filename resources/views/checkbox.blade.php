@extends('layout.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

        <label for="click on me">
            <input type="checkbox" id="click_on_me" />
            Click on me?
        </label>
        <hr />
        <div id="radio_content" style="display: none;">
            <label for="radio_1">
                <input type="radio" name="radio" id="radio_1" />
                Radio 1
            </label>
            <label for="radio_2">
                <input type="radio" name="radio" id="radio_2" />
                Radio 2
            </label>
            <label for="radio_3">
                <input type="radio" name="radio" id="radio_3" />
                Radio 3
            </label>
            <br>
           Sha la la la la.........
        </div>
        <script>
            $(function () {
                $("#click_on_me").click(function () {
                    if ($(this).is(":checked")) {
                        $("#radio_content").show();
                      
                    } else {
                        $("#radio_content").hide();
                  
                    }
                });
            });
        </script>


@endsection