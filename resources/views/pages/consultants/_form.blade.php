@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $consultant->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Hms_department</label>
    <select name="hms_department_id" class="form-select">
        <option value="">--- Select Hms_department ---</option>
        @foreach ($hmsDepartments as $option)
            <option value="{{ $option->id }}" {{ old('hms_department_id', $consultant->hms_department_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Designation</label>
    <input type="text" name="designation" value="{{ old('designation', $consultant->designation ?? '') }}" class="form-control">
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>