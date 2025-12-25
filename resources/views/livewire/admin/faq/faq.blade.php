<div>
<div class="container-xl">

    <!-- Header -->
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">FAQs</h2>
                <div class="text-muted fs-14">Manage frequently asked questions</div>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" wire:click="openModal">
                    <i class="ti ti-plus me-1"></i> Add FAQ
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
                               wire:model.debounce.500ms="search"
                               class="form-control"
                               placeholder="Search question or answer">
                    </div>
                </div>

                <div class="col-md-3 ms-auto">
                    <select wire:model="perPage" class="form-select">
                        <option value="10">10 per page</option>
                        <option value="25">25 per page</option>
                        <option value="50">50 per page</option>
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
                        <th>Question</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($faqs as $faq)
                        <tr>
                            <td class="fw-500">{{ $faq->question }}</td>

                            <td>
                                <span class="badge {{ $faq->status ? 'bg-success-lt' : 'bg-danger-lt' }}">
                                    {{ $faq->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>

                            <td class="text-end">
                                <div class="btn-list justify-content-end">
                                    <button class="btn btn-sm btn-outline-secondary"
                                        wire:click="toggleStatus({{ $faq->id }})">
                                        Toggle
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary"
                                        wire:click="edit({{ $faq->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger"
                                        wire:click="confirmDelete({{ $faq->id }})">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-5">
                                No FAQs found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="text-muted fs-14">
                Showing {{ $faqs->firstItem() ?? 0 }}–{{ $faqs->lastItem() ?? 0 }}
                of {{ $faqs->total() }} entries
            </div>
            {{ $faqs->links() }}
        </div>
    </div>

    <!-- CREATE / EDIT MODAL -->
    @if($modalOpen)
        <div class="modal modal-blur fade show d-block" wire:ignore.self>
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $faqId ? 'Edit FAQ' : 'Create FAQ' }}
                        </h5>
                        <button class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" class="form-control" wire:model.defer="question">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Answer</label>
                            <textarea class="form-control" rows="4" wire:model.defer="answer"></textarea>
                        </div>

                        <label class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" wire:model="status">
                            <span class="form-check-label">Active</span>
                        </label>
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

    <!-- DELETE MODAL -->
    @if($confirmDelete)
        <div class="modal modal-blur fade show d-block" wire:ignore.self>
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title text-danger">Confirm Delete</h5>
                        <button class="btn-close" wire:click="closeDeleteModal"></button>
                    </div>

                    <div class="modal-body text-center">
                        <p class="mb-1">Are you sure?</p>
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
