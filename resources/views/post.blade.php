@extends('layouts.masterlayout')

@section('content')
    <h1>Post Page</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et officiis consequuntur dolorem incidunt, voluptate itaque
        odit, totam, officia eveniet tempora rem tenetur ut expedita eligendi laboriosam aliquid? Iste accusantium
        praesentium blanditiis sunt non! Voluptas necessitatibus ipsam voluptatibus? Dolorum inventore, magnam maiores non
        perspiciatis impedit libero ad, ut ipsa architecto recusandae?</p>
@endsection

@section('sidebar')
    @parent
    <p>Sidebar Content</p>
@endsection

@section('title')
    Post
@endsection
