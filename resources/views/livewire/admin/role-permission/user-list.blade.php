<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="page-title mb-0">Users & Roles</h2>
            <small class="text-muted">Manage user role assignments</small>
        </div>
    </div>

    <!-- Search -->
    <div class="card mb-3">
        <div class="card-body p-2">
            <div class="input-icon">
                <span class="input-icon-addon">
                    <i class="ti ti-search"></i>
                </span>
                <input
                    wire:model.live.debounce.300ms="search"
                    type="text"
                    class="form-control"
                    placeholder="Search by name or email..."
                >
            </div>
        </div>
    </div>

    <!-- Alert -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="ti ti-check me-1"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Users Table -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th width="60">#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th class="text-end" width="140">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <div class="fw-semibold">{{ $user->name }}</div>
                            </td>

                            <td class="text-muted">{{ $user->email }}</td>

                            <!-- Role Badges -->
                            <td>
                                <div class="d-flex flex-wrap gap-1">
                                    @forelse($user->roles as $role)
                                        <span class="badge bg-indigo-lt text-indigo">
                                            <i class="ti ti-shield-lock me-1"></i>
                                            {{ $role->name }}
                                        </span>
                                    @empty
                                        <span class="text-muted">No role</span>
                                    @endforelse
                                </div>
                            </td>

                            <!-- Action -->
                            <td class="text-end">
                                <div class="btn-group">
                                    <button
                                        wire:click="openEditModal({{ $user->id }})"
                                        class="btn btn-sm btn-info">
                                        <i class="ti ti-edit"></i> Edit
                                    </button>
                                    <button
                                        wire:click="openModal({{ $user->id }})"
                                        class="btn btn-sm btn-primary">
                                        <i class="ti ti-user-cog"></i> Roles
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                <i class="ti ti-users fs-20 d-block mb-1"></i>
                                No users found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Modal -->
    @if($modalOpen)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Assign Roles</h5>
                        <button wire:click="closeModal" class="btn-close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row">
                            @foreach($roles as $role)
                                <div class="col-md-6 mb-2">
                                    <label class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            wire:model="selectedRoles"
                                            value="{{ $role->name }}"
                                        >
                                        <span class="badge bg-gray-lt text-dark ms-1">
                                            {{ $role->name }}
                                        </span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button wire:click="closeModal" class="btn btn-secondary">
                            Cancel
                        </button>
                        <button wire:click="save" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Save Roles
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Backdrop -->
        <div class="modal-backdrop fade show"></div>
    @endif

    <!-- Edit User Modal -->
    @if($editModalOpen)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User Details</h5>
                        <button wire:click="closeEditModal" class="btn-close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label required">Name</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                wire:model="name"
                                placeholder="Enter user name"
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">Email</label>
                            <input
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                wire:model="email"
                                placeholder="Enter user email"
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr class="my-3">
                        <small class="text-muted d-block mb-2">
                            <i class="ti ti-info-circle"></i> Leave blank to keep current password
                        </small>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                wire:model="password"
                                placeholder="Enter new password"
                            >
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input
                                type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                wire:model="password_confirmation"
                                placeholder="Confirm new password"
                            >
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button wire:click="closeEditModal" class="btn btn-secondary">
                            Cancel
                        </button>
                        <button wire:click="updateUser" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Update User
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Backdrop -->
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
