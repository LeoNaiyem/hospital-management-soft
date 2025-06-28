@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $medicine->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Medicine_category</label>
    <select name="medicine_category_id" class="form-select">
        <option value="">--- Select Medicine_category ---</option>
        @foreach ($medicineCategories as $option)
            <option value="{{ $option->id }}" {{ old('medicine_category_id', $medicine->medicine_category_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Medicine_type</label>
    <select name="medicine_type_id" class="form-select">
        <option value="">--- Select Medicine_type ---</option>
        @foreach ($medicineTypes as $option)
            <option value="{{ $option->id }}" {{ old('medicine_type_id', $medicine->medicine_type_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Generic_name</label>
    <input type="text" name="generic_name" value="{{ old('generic_name', $medicine->generic_name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Description</label>
    <input type="text" name="description" value="{{ old('description', $medicine->description ?? '') }}" class="form-control">
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>