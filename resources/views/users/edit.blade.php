@extends('base') 
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
    <a href="{{ route('users.index')}}" class="float-right btn btn-primary">Home</a>
</div>
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a User</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $user->name }} />
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" class="form-control" name="age" value={{ $user->age }} />
            </div>

            <div class="form-group">
              <label for="gender">Gender:</label>
              <select class="form-control" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
              
          </div>
          <div class="form-group">
              <label for="department">Department:</label>
              <select class="form-control" name="department">
                <option value="Technology">Technology</option>
                <option value="Services">Services</option>
                <option value="Sales">Sales</option>
                <option value="Accounts">Accounts</option>
                <option value="HR">HR</option>
              </select>
          </div>
          <div class="form-group">
              <label for="education_qual">Education Qualification:</label>
              <select class="form-control" name="education_qual">
                <option value="BTech">BTech</option>
                <option value="MCA">MCA</option>
                <option value="Graduate">Graduate</option>
                <option value="10+2">10+2</option>
              </select>
          </div>  
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection