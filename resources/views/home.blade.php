@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Hi guys this blog belongs to the general category of the bootstrap and just start work on it. There are some functions like yield and the section. If you have any category then you can upload on this blog. You can also mail us at below address. </p>
    @endsection


@section('sidebar')
    @parent
<p>This is appended to the sidebar</p>
@endsection

