@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <b style="color:green;">{{ Auth::user()->name }}</b>
                </div>
                <div class="table-responsive">
                    <table class="table .table-sm">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Date Created</th>
                                <th>Date Modified</th>
                            </tr>
                        </thead>
                        <tbody >
                        <?php $datanew = json_decode(json_encode($data),true); ?>
                        @foreach($datanew['data'] as $val)
                            <tr>
                                <td>
                                    {{ $val['name'] }}
                                </td>
                                <td>
                                    {{ $val['email'] }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$val['created_at'])->diffForHumans() }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$val['updated_at'])->diffForHumans() }}
                                </td>
                            </tr>
                        @endforeach    
                        </tbody>
                    </table>
                    <div>
                        {{ $data->appends(['name'=>'desc'])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
