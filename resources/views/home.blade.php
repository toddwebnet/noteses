@extends('template')
@section('body')

    <button onclick="addNote_click()" class="float-right btn btn-primary" style="margin-top: 10px">Add Note</button>
    <h1>Your Notes</h1>
    <div id="noteList" style="min-height: 300px"></div>
    <script type="text/javascript">
        $(document).ready(function(){
          getNoteList();
        });
    </script>
@endsection
