<div>
   <div class="container-xl">

    <!-- Header -->
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">Service Categories</h2>
                <div class="text-muted fs-14">Manage service category master data</div>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" wire:click="openModal">
                    <i class="ti ti-plus me-1"></i> Add Category
                </button>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="card mb-4">
        <div class="card-body py-3">
            <div class="row align-items-center g-3">

                <div class="col-md-6">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text"
                               wire:model.live.debounce.500ms="search"
                               class="form-control"
                               placeholder="Search by name or slug">
                    </div>
                </div>

                <div class="col-md-3 ms-auto">
                    <select wire:model="perPage" class="form-select">
                        <option value="10">10 per page</option>
                        <option value="25">25 per page</option>
                        <option value="50">50 per page</option>
                        <option value="100">100 per page</option>
                    </select>
                </div>

            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td class="fw-500">{{ $category->name }}</td>
                            <td class="text-muted">{{ $category->slug }}</td>

                            <td>
                                <span class="badge {{ $category->status ? 'bg-success-lt' : 'bg-danger-lt' }}">
                                    {{ $category->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="btn-list justify-content-end">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        wire:click="toggleStatus({{ $category->id }})">
                                        Toggle
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary"
                                        wire:click="edit({{ $category->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger"
                                        wire:click="showDeleteModal({{ $category->id }})">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5">
                                No categories found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted fs-14">
                Showing {{ $categories->firstItem() ?? 0 }}–{{ $categories->lastItem() ?? 0 }}
                of {{ $categories->total() }} entries
            </div>
            {{ $categories->links() }}
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($modalOpen)
        <div class="modal modal-blur fade show d-block">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $categoryId ? 'Edit Category' : 'Create Category' }}
                        </h5>
                        <button class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" wire:model.live="name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" wire:model="slug">
                            </div>

                            <div class="col-md-12">
                                <label class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox"
                                           wire:model="status">
                                    <span class="form-check-label">Active</span>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-light" wire:click="closeModal">Cancel</button>
                        <button class="btn btn-primary" wire:click="save">Save</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

 @if($confirmDelete)
    <div class="modal modal-blur fade show d-block" wire:ignore.self>
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title text-danger">Confirm Delete</h5>
                    <button class="btn-close" wire:click="closeDeleteModal"></button>
                </div>

                <div class="modal-body text-center">
                    <p class="mb-1">Are you sure you want to delete this category?</p>
                    <small class="text-muted">This action cannot be undone.</small>
                </div>

                <div class="modal-footer justify-content-center">
                    <button class="btn btn-light" wire:click="closeDeleteModal">
                        Cancel
                    </button>
                    <button class="btn btn-danger" wire:click="deleteConfirmed">
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
@endif


</div>
</div>
