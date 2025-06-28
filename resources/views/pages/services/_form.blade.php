@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $service->name ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Price</label>
    <input type="text" name="price" value="{{ old('price', $service->price ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Discount</label>
    <input type="number" name="discount" value="{{ old('discount', $service->discount ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Vat</label>
    <input type="number" name="vat" value="{{ old('vat', $service->vat ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Medicine_category</label>
    <select name="medicine_category_id" class="form-select">
        <option value="">--- Select Medicine_category ---</option>
        @foreach ($medicineCategories as $option)
            <option value="{{ $option->id }}" {{ old('medicine_category_id', $service->medicine_category_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>