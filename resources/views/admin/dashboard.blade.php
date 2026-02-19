@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                        <h1 class="h3 mb-0">Admin Dashboard</h1>
                    </div>

                    <p class="text-muted mb-4">
                        User records overview.
                    </p>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>E-mel</th>
                                    <th>Akses</th>
                                    <th>ID Pengguna</th>
                                    <th>Nombor IC</th>
                                    <th>Status</th>
                                    <th>ID Penyelaras</th>
                                    <th>ID Unit</th>
                                    <th>ID PTJ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role ?? '-' }}</td>
                                        <td>{{ $user->penggunaId ?? '-' }}</td>
                                        <td>{{ $user->icNum ?? '-' }}</td>
                                        <td>{{ $user->status ?? '-' }}</td>
                                        <td>{{ $user->penyelarasId ?? '-' }}</td>
                                        <td>{{ $user->unitId ?? '-' }}</td>
                                        <td>{{ $user->ptjId ?? '-' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted">No users found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
