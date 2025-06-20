@csrf
@if ($mode === 'edit')
    @method('PUT')
@endif

<div class="mb-2">
    <label>Patient id</label>
    <select name="patient_id" class="form-select">
        <option value="">Select Patient id</option>
        @foreach ($patients as $option)
            <option value="{{ $option->id }}" {{ old('patient_id', $appointment->patient_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Doctor id</label>
    <select name="doctor_id" class="form-select">
        <option value="">Select Doctor id</option>
        @foreach ($doctors as $option)
            <option value="{{ $option->id }}" {{ old('doctor_id', $appointment->doctor_id ?? '') == $option->id ? 'selected' : '' }}>{{ $option->name ?? $option->id }}</option>
        @endforeach
    </select>
</div>
<div class="mb-2">
    <label>Appointment at</label>
    <input type="text" name="appointment_at" value="{{ old('appointment_at', $appointment->appointment_at ?? '') }}" class="form-control">
</div>
<div class="mb-2">
    <label>Cc</label>
    <input type="text" name="cc" value="{{ old('cc', $appointment->cc ?? '') }}" class="form-control">
</div>
<button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>