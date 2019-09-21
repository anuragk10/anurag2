@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>{{ Auth::user()->name }}</th>
                      </tr>
                      <tr>
                        <th>Last Name</th>
                        <th>{{ Auth::user()->lastName }}</th>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <th>{{ Auth::user()->email }}</th>
                      </tr>
                      <tr>
                        <th>Contact</th>
                        <th>{{ Auth::user()->contact }}</th>
                      </tr>
                      <tr>
                        <th>Account Created At</th>
                        <th>{{ Auth::user()->created_at }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
