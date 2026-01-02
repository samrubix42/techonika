<div class="page-wrapper">
    <div class="container-xl">

        <!-- Header -->
        <div class="page-header mb-4">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title mb-1">Contacts</h2>
                    <div class="text-muted">Manage incoming contact messages</div>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="card shadow-sm">

            <!-- Filters -->
            <div class="card-body border-bottom">
                <div class="row g-3 align-items-center">
                    <div class="col-md-8">
                        <input
                            type="text"
                            wire:model.live.debounce.500ms="search"
                            class="form-control"
                            placeholder="Search by name, email or subject..."
                        >
                    </div>

                    <div class="col-md-4 text-end">
                        <select wire:model.live="perPage" class="form-select w-auto d-inline-block">
                            <option value="10">10 / page</option>
                            <option value="25">25 / page</option>
                            <option value="50">50 / page</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover card-table">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Received</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($contacts as $contact)
                            <tr @class(['bg-warning-lt' => ! $contact->read])>
                                <td class="text-muted">#{{ $contact->id }}</td>
                                <td class="fw-medium">{{ $contact->name }}</td>
                                <td class="text-muted">{{ $contact->email }}</td>
                                <td>{{ Str::limit($contact->subject, 40) }}</td>

                                <td>
                                    @if($contact->read)
                                        <span class="badge bg-success-lt">Read</span>
                                    @else
                                        <span class="badge bg-warning-lt">New</span>
                                    @endif
                                </td>

                                <td class="text-muted">
                                    {{ $contact->created_at->diffForHumans() }}
                                </td>

                                <td class="text-end">
                                    <div class="btn-list btn-list-sm">
                                        <button
                                            wire:click="openView({{ $contact->id }})"
                                            class="btn btn-outline-primary"
                                        >
                                            View
                                        </button>

                                        <button
                                            wire:click="openDelete({{ $contact->id }})"
                                            class="btn btn-outline-danger"
                                        >
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    No contact messages found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Footer -->
            <div class="card-footer d-flex align-items-center">
                <div class="text-muted">
                    Showing {{ $contacts->count() }} results
                </div>

                <div class="ms-auto">
                    {{ $contacts->links() }}
                </div>
            </div>

        </div>
    </div>

    <!-- ================= VIEW MODAL ================= -->
@if($showViewModal)
<div class="modal modal-blur fade show d-block" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Contact Message</h5>
                <button type="button" class="btn-close" wire:click="closeView"></button>
            </div>

            <div class="modal-body">
                <dl class="row">
                    <dt class="col-3 text-muted">Name</dt>
                    <dd class="col-9">{{ $selectedContact->name }}</dd>

                    <dt class="col-3 text-muted">Email</dt>
                    <dd class="col-9">{{ $selectedContact->email }}</dd>

                    <dt class="col-3 text-muted">Subject</dt>
                    <dd class="col-9">{{ $selectedContact->subject }}</dd>

                    <dt class="col-3 text-muted">Message</dt>
                    <dd class="col-9">{{ $selectedContact->message }}</dd>
                </dl>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" wire:click="closeView">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>

<div class="modal-backdrop fade show"></div>
@endif


    <!-- ================= DELETE MODAL ================= -->
   @if($showDeleteModal)
<div class="modal modal-blur fade show d-block" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-danger">Delete Message</h5>
                <button type="button" class="btn-close" wire:click="closeDelete"></button>
            </div>

            <div class="modal-body">
                <p class="text-muted">
                    Are you sure you want to delete this message?
                    This action cannot be undone.
                </p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-light" wire:click="closeDelete">
                    Cancel
                </button>

                <button class="btn btn-danger" wire:click="delete">
                    Delete
                </button>
            </div>

        </div>
    </div>
</div>

<div class="modal-backdrop fade show"></div>
@endif


</div>
