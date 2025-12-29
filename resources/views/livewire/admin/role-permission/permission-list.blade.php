<div>
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="page-title mb-0">Permissions</h2>
            <small class="text-muted">Manage system permissions</small>
        </div>

        <button wire:click="openModal" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> Add Permission
        </button>
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
                    placeholder="Search permission..."
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

    <!-- Table -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th width="60">#</th>
                        <th>Permission</th>
                        <th class="text-end" width="140">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($permissions as $permission)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <!-- Permission Badge -->
                            <td>
                                @php
                                    $color = str_contains($permission->name, 'create') ? 'green' :
                                             (str_contains($permission->name, 'edit') ? 'yellow' :
                                             (str_contains($permission->name, 'delete') ? 'red' : 'azure'));
                                @endphp

                                <span class="badge bg-{{ $color }}-lt text-{{ $color }} fw-semibold">
                                    <i class="ti ti-lock me-1"></i>
                                    {{ $permission->name }}
                                </span>
                            </td>

                            <!-- Actions -->
                            <td class="text-end">
                                <button
                                    wire:click="edit({{ $permission->id }})"
                                    class="btn btn-sm btn-warning me-1"
                                    title="Edit">
                                    <i class="ti ti-edit"></i>
                                </button>

                                <button
                                    wire:click="confirmDelete({{ $permission->id }})"
                                    class="btn btn-sm btn-danger"
                                    title="Delete">
                                    <i class="ti ti-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-4">
                                <i class="ti ti-ban fs-20 d-block mb-1"></i>
                                No permissions found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
            {{ $permissions->links() }}
        </div>
    </div>

    <!-- Modal -->
    @if($modalOpen)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $permissionId ? 'Edit Permission' : 'Create Permission' }}
                        </h5>
                        <button wire:click="closeModal" class="btn-close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Permission Name</label>
                            <input
                                wire:model.defer="name"
                                type="text"
                                class="form-control"
                                placeholder="e.g. user.create"
                            >
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button wire:click="closeModal" class="btn btn-secondary">
                            Cancel
                        </button>
                        <button wire:click="save" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Save
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
        <div class="modal modal-blur fade show d-block" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-status bg-danger"></div>

                    <div class="modal-body text-center py-4">
                        <i class="ti ti-trash ti-3x text-danger mb-2"></i>
                        <h3 class="mb-1">Delete Permission</h3>
                        <p class="text-muted mb-0">Are you sure you want to delete <strong>{{ $deleteName }}</strong>?</p>
                        <p class="text-muted small mt-2">This action cannot be undone.</p>
                    </div>

                    <div class="modal-footer">
                        <div class="w-100 d-flex justify-content-end gap-2">
                            <button wire:click="cancelDelete" class="btn btn-outline-secondary">Cancel</button>
                            <button wire:click="deleteConfirmed" class="btn btn-danger">Yes, delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
