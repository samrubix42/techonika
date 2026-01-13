<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">

            {{-- PAGE HEADER --}}
            <div class="page-header d-print-none mb-4">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="page-pretitle text-muted">Administration</div>
                        <h2 class="page-title">Package Enquiries</h2>
                    </div>
                    <div class="col-auto">
                        @if($unreadCount)
                            <span class="badge bg-red-lt">
                                {{ $unreadCount }} Unread
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            {{-- FLASH MESSAGE --}}
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible mb-4">
                    {{ session('success') }}
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- FILTERS --}}
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <input wire:model.live="search"
                                   type="text"
                                   class="form-control"
                                   placeholder="Search by name, email, phone or package">
                        </div>
                        <div class="col-md-4">
                            <select wire:model.live="filterStatus" class="form-select">
                                <option value="all">All enquiries</option>
                                <option value="unread">Unread</option>
                                <option value="read">Read</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TABLE --}}
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead class="bg-light">
                        <tr>
                            <th>Status</th>
                            <th>User</th>
                            <th>Contact</th>
                            <th>Package</th>
                            <th>Date</th>
                            <th class="text-end">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($enquiries as $enquiry)
                            <tr class="{{ !$enquiry->is_read ? 'bg-yellow-lt' : '' }}">
                                <td>
                                    <span class="badge {{ $enquiry->is_read ? 'bg-success-lt' : 'bg-warning-lt' }}">
                                        {{ $enquiry->is_read ? 'Read' : 'Unread' }}
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar me-2"
                                              style="background-image:url('https://ui-avatars.com/api/?name={{ urlencode($enquiry->name) }}')"></span>
                                        <div>
                                            <div class="fw-medium">{{ $enquiry->name }}</div>
                                            <div class="text-muted small">{{ $enquiry->email }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-muted">{{ $enquiry->phone }}</td>

                                <td>
                                    <span class="badge bg-azure-lt">{{ $enquiry->package }}</span>
                                </td>

                                <td class="text-muted">
                                    <div>{{ $enquiry->created_at->format('d M Y') }}</div>
                                    <div class="small">{{ $enquiry->created_at->format('h:i A') }}</div>
                                </td>

                                <td class="text-end">
                                    <div class="btn-list justify-content-end">
                                        <button wire:click="viewEnquiry({{ $enquiry->id }})"
                                                class="btn btn-sm btn-outline-primary">
                                            View
                                        </button>

                                        <button wire:click="toggleRead({{ $enquiry->id }})"
                                                class="btn btn-sm btn-outline-secondary">
                                            {{ $enquiry->is_read ? 'Unread' : 'Read' }}
                                        </button>

                                        <button wire:click="confirmDelete({{ $enquiry->id }})"
                                                class="btn btn-sm btn-outline-danger">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-6 text-muted">
                                    No enquiries found
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                @if($enquiries->hasPages())
                    <div class="card-footer d-flex justify-content-between">
                        <div class="text-muted small">
                            Showing {{ $enquiries->firstItem() }}–{{ $enquiries->lastItem() }}
                            of {{ $enquiries->total() }}
                        </div>
                        {{ $enquiries->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- VIEW MODAL --}}
    @if($showModal && $selectedEnquiry)
        <div class="modal modal-blur fade show d-block">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Enquiry Details</h5>
                        <button class="btn-close" wire:click="closeModal"></button>
                    </div>

                    <div class="modal-body">
                        <dl class="row">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9">{{ $selectedEnquiry->name }}</dd>

                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9">{{ $selectedEnquiry->email }}</dd>

                            <dt class="col-sm-3">Phone</dt>
                            <dd class="col-sm-9">{{ $selectedEnquiry->phone }}</dd>

                            <dt class="col-sm-3">Package</dt>
                            <dd class="col-sm-9">
                                <span class="badge bg-azure">{{ $selectedEnquiry->package }}</span>
                            </dd>

                            @if($selectedEnquiry->message)
                                <dt class="col-sm-3">Message</dt>
                                <dd class="col-sm-9">{{ $selectedEnquiry->message }}</dd>
                            @endif
                        </dl>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" wire:click="closeModal">Close</button>
                        <button class="btn btn-primary"
                                wire:click="toggleRead({{ $selectedEnquiry->id }})">
                            Toggle Read
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif

    {{-- DELETE MODAL --}}
    @if($deleteConfirmId)
        <div class="modal modal-blur fade show d-block">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title text-danger">Confirm Delete</h5>
                        <button class="btn-close" wire:click="cancelDelete"></button>
                    </div>

                    <div class="modal-body text-center">
                        <h3>Are you sure?</h3>
                        <p class="text-muted">
                            This enquiry will be permanently deleted.
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn w-100" wire:click="cancelDelete">Cancel</button>
                        <button class="btn btn-danger w-100" wire:click="deleteEnquiry">
                            Yes, Delete
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show" wire:click="cancelDelete"></div>
    @endif
</div>
