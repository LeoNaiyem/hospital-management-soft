@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $doctor->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone', $doctor->phone ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Designation</label>
    <select name="designation_id" class="form-select">
        <option value="">--- Select Designation ---</option>
        @foreach ($designations as $option)
            <option value="{{ $option->id }}" {{ old('designation_id', $doctor->designation_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Department</label>
    <select name="department_id" class="form-select">
        <option value="">--- Select Department ---</option>
        @foreach ($departments as $option)
            <option value="{{ $option->id }}" {{ old('department_id', $doctor->department_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>