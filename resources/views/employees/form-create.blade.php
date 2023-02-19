<form class="row g-3" action="{{ route('employees.store') }}" method="post">
    @csrf

    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="John"
            value="{{ old('name') }}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control" id="position" name="position" placeholder="Laravel Developer"
            value="{{ old('position') }}">
        @error('position')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-6">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="34"
            value="{{ old('age') }}">
        @error('age')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="salary" class="form-label">Salary</label>
        <input type="number" class="form-control" id="salary" name="salary" placeholder="1000"
            value="{{ old('salary') }}">
        @error('salary')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="office" class="form-label">Office</label>
        <select id="office" name="office" class="form-select">
            <option value="" selected>Choose...</option>
            <option value="Tokyo">Tokyo</option>
            <option value="London">London</option>
            <option value="San Francisco">San Francisco</option>
            <option value="New York">New York</option>
            <option value="Montevideo">Montevideo</option>
            <option value="Chicago">Chicago</option>
        </select>
        @error('office')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
