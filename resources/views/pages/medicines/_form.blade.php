@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $medicine->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Hms_medicine_category</label>
    <select name="hms_medicine_category_id" class="form-select">
        <option value="">--- Select Hms_medicine_category ---</option>
        @foreach ($hmsMedicineCategories as $option)
            <option value="{{ $option->id }}" {{ old('hms_medicine_category_id', $medicine->hms_medicine_category_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Hms_medicine_type</label>
    <select name="hms_medicine_type_id" class="form-select">
        <option value="">--- Select Hms_medicine_type ---</option>
        @foreach ($hmsMedicineTypes as $option)
            <option value="{{ $option->id }}" {{ old('hms_medicine_type_id', $medicine->hms_medicine_type_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
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
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>