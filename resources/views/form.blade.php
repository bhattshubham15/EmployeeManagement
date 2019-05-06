@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Details Fill Here</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <form action="" method="POST">
                        @csrf
                        <label for="Name">Name: <br>
                        <input type="text" name="name" id="">
                        </label>
                        @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif <br>
                        <label for="address">Address: <br>
                            <input type="text" name="address"><br>
                            @if ($errors->has('address')) <p style="color:red;">{{ $errors->first('address') }}</p> @endif <br>
                        </label><br>
                        <label for="address2">Address2: <br>
                          <input type="text" name="address2"><br>
                      </label><br>
                        <label for="department">Department: <br>
                          <select name="department" id="">
                            <option value=""></option>
                            <option value="IT">IT</option>
                            <option value="Management">Management</option>
                            <option value="HR">HR</option>
                          </select>
                          @if ($errors->has('department')) <p style="color:red;">{{ $errors->first('department') }}</p> @endif <br>
                        </label><br>
                        <label for="designation">Designation: <br>
                          <select name="designation" id="">
                            <option value=""></option>
                            <option value="Software Developer">Software Developer</option>
                            <option value="QA">QA</option>
                            <option value="IT">IT</option>
                          </select>
                          @if ($errors->has('designation')) <p style="color:red;">{{ $errors->first('designation') }}</p> @endif <br>
                        </label><br>
                        <label for="Name">Password: <br>
                            <input type="password" name="password" id=""><br>
                        </label><br>
                            @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif <br>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
