@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Vartotojų valdymas</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Vartotojo vardas</th>
                                <th scope="col">El. pastas</th>
                                <th scope="col">Rolės</th>
                                <th scope="col">Veiksmai</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
{{--                                $id = $user->id;--}}
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</th>
                                    <th>
                                        <a href="{{route('admin.users.edit', $user->id)}}" class="float-left">
                                            <button type="button" class="btn btn-primary btn-sm">Redaguoti</button>
                                        </a>
                                        <form method="POST" action="{{ route('admin.users.destroy',['user'=>$user->id]) }}"   class="float-left">
{{--                                        <form method="POST" action="{{ route('admin.users.destroy'), $user->id }}"  class="float-left">--}}
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Ištrinti</button>
                                        </form>
{{--                                        <a href="{{route('admin.Impersonate', $user->id)}}" class="float-left">--}}
{{--                                            <button type="button" class="btn btn-success btn-sm">Impersonate user</button>--}}
{{--                                        </a>--}}
{{--                                        <form method="post" action="{{ route('admin.users.destroy'), $user->id }}">--}}
{{--                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                                            <button class="btn btn-danger delete pull-left">--}}
{{--                                                <i class="fa fa-trash-o"></i>Delete--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}

{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        You are logged in!--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
