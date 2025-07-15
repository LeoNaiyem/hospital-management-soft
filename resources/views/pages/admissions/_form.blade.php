@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Patient</label>
    <select name="patient_id" class="form-select">
        <option value="">--- Select Patient ---</option>
        @foreach ($patients as $option)
            <option value="{{ $option->id }}" {{ old('patient_id', $admission->patient_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Ref_doctor</label>
    <select name="ref_doctor_id" class="form-select">
        <option value="">--- Select Ref_doctor ---</option>
        @foreach ($doctors as $option)
            <option value="{{ $option->id }}" {{ old('ref_doctor_id', $admission->ref_doctor_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Under_doctor</label>
    <select name="under_doctor_id" class="form-select">
        <option value="">--- Select Under_doctor ---</option>
        @foreach ($doctors as $option)
            <option value="{{ $option->id }}" {{ old('under_doctor_id', $admission->under_doctor_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Bed</label>
    <select name="bed_id" class="form-select">
        <option value="">--- Select Bed ---</option>
        @foreach ($beds as $option)
            <option value="{{ $option->id }}" {{ old('bed_id', $admission->bed_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->bed_number ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Admission Date</label>
    <input type="date" name="admission_date" value="{{ old('admission_date', $admission->admission_date ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Department</label>
    <select name="department_id" class="form-select">
        <option value="">--- Select Department ---</option>
        @foreach ($departments as $option)
            <option value="{{ $option->id }}" {{ old('department_id', $admission->department_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Advance</label>
    <input type="number" name="advance" value="{{ old('advance', $admission->advance ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Problem</label>
    <input type="text" name="problem" value="{{ old('problem', $admission->problem ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Remark</label>
    <input type="text" name="remark" value="{{ old('remark', $admission->remark ?? '') }}" class="form-control">
</div>
<button class="btn btn-info">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>