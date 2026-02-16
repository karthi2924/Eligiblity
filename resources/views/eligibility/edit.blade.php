<!DOCTYPE html>                                                                                                                                                                                 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Verification Record</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('eligibility.update', $verification->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Date & Appointment ID -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Date *</label>
                        <input type="date" name="date" class="form-control"
                               value="{{ $verification->date }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Appointment ID *</label>
                        <input type="text" name="appt_id" class="form-control"
                               value="{{ $verification->appt_id }}" required>
                    </div>
                </div>

                <!-- Details -->
                <div class="mb-3">
                    <label class="form-label">Details *</label>
                    <input type="text" name="details" class="form-control"
                           value="{{ $verification->details }}" required>
                </div>

                <!-- Insurance & Plan -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Insurance *</label>
                        <select name="insurance" class="form-select" required>
                            @foreach([
                                'Aetna',
                                'Bluecard',
                                'CIGNA',
                                'Emblem Health',
                                'Meritain',
                                'United Healthcare',
                                'United Healthcare Global',
                                'UMR',
                                'CMO',
                                'Other'
                            ] as $insurance)
                                <option value="{{ $insurance }}"
                                    {{ $verification->insurance == $insurance ? 'selected' : '' }}>
                                    {{ $insurance }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Plan *</label>
                        <select name="plan" class="form-select" required>
                            @foreach([
                                'HMO',
                                'PPO',
                                'EPO',
                                'POS',
                                'Medicaid',
                                'Medicare',
                                'Medicare Supplement',
                                'Open Access',
                                'Other'
                                ] as $plan)
                                <option value="{{ $plan }}"
                                    {{ $verification->plan == $plan ? 'selected' : '' }}>
                                    {{ $plan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Status & Action -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Status *</label>
                        <select name="status" class="form-select" required>
                            @foreach([
                                'In Network',
                                'Out of Network',
                                'Other'
                            ] as $status)
                                <option value="{{ $status }}"
                                    {{ $verification->status == $status ? 'selected' : '' }}>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Action *</label>
                        <select name="action" class="form-select" required>
                            @foreach([
                                'New Verification',
                                'Old Verification',
                                'Calling-Auth',
                                'Calling-Benefits',
                                'Calling-Patients',
                                'Calling-Referral',
                                'Klara'
                            ] as $action)
                                <option value="{{ $action }}"
                                    {{ $verification->action == $action ? 'selected' : '' }}>
                                    {{ $action }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Comments -->
                <div class="mb-4">
                    <label class="form-label">Comments *</label>
                    <textarea name="comments" class="form-control" rows="4" required>{{ $verification->comments }}</textarea>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('eligibility.create') }}" class="btn btn-secondary">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-success">
                        Update Record
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>
