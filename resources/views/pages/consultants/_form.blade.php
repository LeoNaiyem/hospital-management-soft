@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $consultant->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Department</label>
    <select name="department_id" class="form-select">
        <option value="">--- Select Department ---</option>
        @foreach ($departments as $option)
            <option value="{{ $option->id }}" {{ old('department_id', $consultant->department_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Designation</label>
    <input type="text" name="designation" value="{{ old('designation', $consultant->designation ?? '') }}" class="form-control">
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>