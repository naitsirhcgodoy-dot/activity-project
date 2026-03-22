@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('customers.store') }}">
                        @csrf
                        <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                       </div>
                        
                       <div class="mb-3">
                            <label for="branch" class="form-label">Branch</label>
                            <select id="branch" class="form-control @error('branch') is-invalid @enderror" name="branch" required>
                                <option value="">Select Branch</option>
                                <option value="Taytay">Taytay</option>
                                <option value="Angono">Angono</option>
                                <option value="Tagpos">Tagpos</option>
                                <option value="Cainta">Cainta</option>
                            </select>
                            @error('branch')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                       </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    <button type="submit" class="content-center btn btn-primary">Register</button>
                </div>
            </form>
            <!-- Success Message -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="d-flex align-items-center">
                        <svg class="bi shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill"/>
                        </svg>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            </div>
        </div>
    </div>
 </div>
</div>
@endsection