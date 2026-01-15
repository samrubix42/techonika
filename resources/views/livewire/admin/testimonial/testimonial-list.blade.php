<div
    x-data="testimonialSortable()"
    x-init="init()"
>

    <!-- PAGE HEADER -->
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Testimonials</h3>
            <button class="btn btn-primary" wire:click="openModal">
                Add Testimonial
            </button>
        </div>
    </div>

    <!-- SEARCH BAR -->
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
                    placeholder="Search by name, company, or message..."
                >
            </div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th width="40"></th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Sequence</th>
                        <th>Active Status</th>
                        <th>Status</th>
                        <th class="text-end" width="160">Actions</th>
                    </tr>
                </thead>

                <tbody x-ref="list">
                    @foreach ($items as $item)
                        <tr data-id="{{ $item->id }}">
                            <td class="cursor-move drag text-muted">
                                ☰
                            </td>

                            <td>{{ $item->data['name'] ?? '' }}</td>
                            <td>{{ $item->data['company'] ?? '-' }}</td>

                            <td>
                                <span class="badge bg-azure-lt">{{ $item->sequence }}</span>
                            </td>

                            <td>
                                <label class="form-check form-switch mb-0">
                                    <input 
                                        class="form-check-input" 
                                        type="checkbox" 
                                        wire:click="toggleActive({{ $item->id }})"
                                        {{ $item->is_active ? 'checked' : '' }}>
                                    <span class="form-check-label text-muted small">
                                        {{ $item->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </label>
                            </td>

                            <td>
                                @if($item->data['verified'] ?? false)
                                    <span class="badge bg-green-lt">Verified</span>
                                @else
                                    <span class="badge bg-secondary-lt">Unverified</span>
                                @endif
                            </td>

                            <td class="text-end">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-outline-primary"
                                        wire:click="openModal({{ $item->id }})">
                                        <i class="ti ti-edit"></i> Edit
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger"
                                        wire:click="confirmDelete({{ $item->id }})">
                                        <i class="ti ti-trash"></i> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <!-- MODAL -->
    @if($showModal)
    <div class="modal modal-blur fade show d-block" style="background:rgba(0,0,0,.6)" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">
                        {{ $editId ? 'Edit Testimonial' : 'Add Testimonial' }}
                    </h5>
                    <button type="button" class="btn-close" wire:click="$set('showModal', false)"></button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   wire:model.defer="name"
                                   placeholder="Enter client name">
                            @error('name') 
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Company</label>
                            <input type="text" class="form-control" 
                                   wire:model.defer="company"
                                   placeholder="Enter company name (optional)">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                      rows="4"
                                      wire:model.defer="message"
                                      placeholder="Enter testimonial message"></textarea>
                            @error('message') 
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       wire:model.defer="verified">
                                <span class="form-check-label fw-semibold">Verified Client</span>
                            </label>
                        </div>

                        <div>
                            <label class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       wire:model.defer="is_active">
                                <span class="form-check-label fw-semibold">Active Status</span>
                            </label>
                            <small class="text-muted d-block mt-1">Enable to show this testimonial on the website</small>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" wire:click="$set('showModal', false)">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy me-1"></i>
                            Save
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- BACKDROP -->
    <div class="modal-backdrop fade show"></div>
    @endif

    <!-- DELETE CONFIRMATION MODAL -->
    @if($showDeleteModal)
    <div class="modal modal-blur fade show d-block" style="background:rgba(0,0,0,.6)" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content border-0 shadow">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Confirm Delete</h5>
                    <button type="button" class="btn-close" wire:click="$set('showDeleteModal', false)"></button>
                </div>

                <div class="modal-body">
                    <p class="mb-0">Are you sure you want to delete this testimonial?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" wire:click="$set('showDeleteModal', false)">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger" wire:click="delete">
                        <i class="ti ti-trash me-1"></i>
                        Delete
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- BACKDROP -->
    <div class="modal-backdrop fade show"></div>
    @endif

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>

<script>
function testimonialSortable() {
    return {
        init() {
            new Sortable(this.$refs.list, {
                animation: 150,
                handle: '.drag',
                onEnd: () => {
                    let order = [...this.$refs.list.children]
                        .map(row => row.dataset.id)
                    Livewire.dispatch('updateOrder', {order})
                }
            })
        }
    }
}
</script>

</div>
