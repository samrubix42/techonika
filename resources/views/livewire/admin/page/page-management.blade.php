<div class="container-xl">

    <!-- Page Header -->
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">Pages</h2>
                <div class="text-muted fs-14">Manage website pages & SEO metadata</div>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" wire:click="openModal">
                    <i class="ti ti-plus me-1"></i> Add Page
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
                        <th>Page</th>
                        <th>Slug</th>
                        <th>Meta Title</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                        <tr>
                            <td class="fw-500">{{ $page->name }}</td>
                            <td class="text-muted">{{ $page->slug }}</td>
                            <td class="text-muted">{{ $page->meta_title ?? '-' }}</td>
                            <td class="text-end">
                                <div class="btn-list justify-content-end">
                                    <button class="btn btn-sm btn-outline-primary"
                                        wire:click="edit({{ $page->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger"
                                        wire:click="confirmDelete({{ $page->id }})">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5">
                                No records found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted fs-14">
                Showing {{ $pages->firstItem() ?? 0 }}–{{ $pages->lastItem() ?? 0 }}
                of {{ $pages->total() }} entries
            </div>
            {{ $pages->links() }}
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($modalOpen)
        <div class="modal modal-blur fade show d-block">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $pageId ? 'Edit Page' : 'Create Page' }}
                        </h5>
                        <button class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Page Name</label>
                                <input type="text" class="form-control" wire:model="name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" wire:model="slug">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" wire:model="meta_title">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Meta Description</label>
                                <textarea class="form-control" rows="3"
                                    wire:model="meta_description"></textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control"
                                    wire:model="meta_keywords">
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

    <!-- DELETE CONFIRMATION MODAL -->
    @if($confirmDelete)
        <div class="modal modal-blur fade show d-block">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title text-danger">
                            Confirm Delete
                        </h5>
                        <button class="btn-close"
                            wire:click="closeDeleteModal"></button>
                    </div>

                    <div class="modal-body text-center">
                        <p class="mb-1">Are you sure you want to delete this page?</p>
                        <small class="text-muted">This action cannot be undone.</small>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-light"
                            wire:click="closeDeleteModal">Cancel</button>
                        <button class="btn btn-danger"
                            wire:click="deleteConfirmed">Delete</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

</div>
