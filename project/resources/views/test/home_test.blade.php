@extends('layouts.master_layout')

@section('title', 'Hello World')

@section('main_content')
    <h2>This is my page</h2>

    <h3>Hi everyone, I made a page for us to join on HipChat</h3>
    <p>When you join HipChat join the group name "Cs444-kidsfirst" without the quotes!</p>
	
	<p>Dr. Joan here. Hold off on that HipChat group until you get the word from the Proj. Management team.</p>

    <p>Zach Newell</p>
    <p>Blake Smola</p>
    <p>Lukas Hoover</p>
	<p>Thor Holmquist</p>
    <p>Matt Mullenbach</p>
    <p>Alex Buchanan</p>
    <p>Sean Meyer</p>
    <p>Min Lee</p>
    <p>Jordan Brockopp</p>
    <p>Geeorge Krenik</p>
    <p>Spencer Davis</p>
    <p>Jeremy Viet</p>
    @yield('sub_content')
@endsection
