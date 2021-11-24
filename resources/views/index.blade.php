@extends('layouts.app')

@section('title', 'Status')

@section('content')
    <div class="container content">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ trans('messages.fields.name') }}</th>
                        <th scope="col">{{ trans('messages.fields.status') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($servers as $server)
                        <tr>
                            <th scope="row">
                                {{ $server->id }}
                            </th>
                            <td>{{ $server->name }}</td>
                            <td>
                                @if($server->isOnline())
                                    <span class="badge badge-success">{{ trans_choice('admin.servers.players', $server->getOnlinePlayers()) }}</span>
                                @else
                                    <span class="badge badge-danger">{{ trans('admin.servers.offline') }}</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
    </div>
@endsection
