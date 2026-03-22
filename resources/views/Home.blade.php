@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto space-y-6">
  <h1 class="text-3xl font-extrabold">{{ config("") }}</h1>
   <div class="mini-card">
  <div class="bg-white border rounded-lg p-6 shadow-sm">
    <h1 class="text-lg font-semibold mb-2">WELCOME!</h1>
  </div>
  <div class="card">
   <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <h3><button class="bg-white p-4 rounded-lg border"> Username</button></h3>
    <h3><button class="bg-white p-4 rounded-lg border"> Login</button></h3>
    <h3><button class="bg-white p-4 rounded-lg border"> Password</button></h3>
    <h3><button class="bg-white p-4 rounded-lg border">Register</button></h3>
  </div>
</div>
@endsection