<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="page-title">Roles & Permissions</h2>

        <button wire:click="openModal" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Add Role
        </button>
    </div>

    <!-- Search -->
    <div class="mb-3">
        <input
            wire:model.live.debounce.300ms="search"
            type="text"
            class="form-control"
            placeholder="Search roles..."
        >
    </div>

    <!-- Alert -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Roles Table -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Role</th>
                        <th>Permissions</th>
                        <th class="text-end" width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <!-- Role Badge -->
                            <td>
                                <span class="badge bg-indigo-lt text-indigo fw-semibold">
                                    <i class="ti ti-shield-lock me-1"></i>
                                    {{ $role->name }}
                                </span>
                            </td>

                            <!-- Permission Badges -->
                            <td>
                                <div class="d-flex flex-wrap gap-1">
                                    @forelse($role->permissions as $permission)

                                        @php
                                            $color = str_contains($permission->name, 'create') ? 'green' :
                                                     (str_contains($permission->name, 'edit') ? 'yellow' :
                                                     (str_contains($permission->name, 'delete') ? 'red' : 'azure'));
                                        @endphp

                                        <span class="badge bg-{{ $color }}-lt text-{{ $color }}">
                                            <i class="ti ti-check me-1"></i>
                                            {{ $permission->name }}
                                        </span>
                                    @empty
                                        <span class="text-muted">No permissions</span>
                                    @endforelse
                                </div>
                            </td>

                            <!-- Actions -->
                            <td class="text-end">
                                <button wire:click="edit({{ $role->id }})"
                                        class="btn btn-sm btn-warning me-1">
                                    <i class="ti ti-edit"></i>
                                </button>

                                <button
                                    wire:click="confirmDelete({{ $role->id }})"
                                    class="btn btn-sm btn-danger">
                                    <i class="ti ti-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">
                                No roles found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
            {{ $roles->links() }}
        </div>
    </div>

    <!-- Modal (Livewire-only) -->
    @if($modalOpen)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $roleId ? 'Edit Role' : 'Create Role' }}
                        </h5>
                        <button wire:click="closeModal" class="btn-close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Role Name -->
                        <div class="mb-3">
                            <label class="form-label">Role Name</label>
                            <input wire:model.defer="name" type="text" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Permissions -->
                        <div class="mb-3">
                            <label class="form-label">Permissions</label>

                            <div class="row">
                                @foreach($permissions as $permission)
                                    <div class="col-md-4 mb-2">
                                        <label class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                wire:model="selectedPermissions"
                                                value="{{ $permission->name }}"
                                            >
                                            <span class="badge bg-gray-lt text-dark ms-1">
                                                {{ $permission->name }}
                                            </span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button wire:click="closeModal" class="btn btn-secondary">
                            Cancel
                        </button>
                        <button wire:click="save" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i> Save Role
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Backdrop -->
        <div class="modal-backdrop fade show"></div>
    @endif

    <!-- Delete Confirmation Modal -->
    @if($confirmingDelete)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-title">Delete Role</div>
                        <p>Are you sure you want to delete <strong>{{ $deleteName }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="cancelDelete" class="btn btn-secondary">Cancel</button>
                        <button wire:click="deleteConfirmed" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
