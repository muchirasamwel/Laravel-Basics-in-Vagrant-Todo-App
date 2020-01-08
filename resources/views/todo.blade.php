@extends('layouts.masterA')
@section('style')
    <style>
        input {
            padding: 5px;
            margin: 10px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input:focus {
            box-shadow: 2px 2px 4px black;
            border: 2px solid greenyellow;
        }

        button {
            background-color: white;
            border-radius: 4px;
            padding: 5px;
            margin: 10px;
            border: 1px solid black;
        }

        .del {
            background-color: red;
            color: white;
        }

        button:hover {
            background-color: greenyellow;
            font-weight: bolder;
            border-color: greenyellow;
            cursor: pointer;
        }

        #tasklist ul {
            text-align: left;
        }

        .error li {
            display: inline;
            font-weight: bolder;
            color: red;
        }
    </style>
@endsection
@section('childinfo here')
    <div>
        <h1>TO DO APP</h1>
        <div>
            <h2>My Tasks</h2>
            <?php
            //var_dump($data)
            ?>

            <div id="tasklist">
                <ol>
                    @foreach($data as $task)
                        <li>{{$task->taskname}} on {{$task->taskdate}}
                            <form action="/del" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$task->id}}">
                                <button type="submit" class="del">Delete</button>
                            </form>
                        </li>
                    @endforeach
                    {{--                    <li>Design an interface</li>--}}
                    {{--                    <li>Implement the design</li>--}}
                    {{--                    <li>Create back end</li>--}}

                </ol>
                @if($errors)
                    <ul class="error">
                        @foreach($errors as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div>
                <form action="/todo" method="post">
                    @csrf
                    <div>
                        <label>Task</label><br>
                        <input type="text" name="taskname">
                    </div>
                    <div>
                        <label>Date</label><br>
                        <input type="date" name="taskdate">
                    </div>
                    <div>
                        <button type="submit">Add To List</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
