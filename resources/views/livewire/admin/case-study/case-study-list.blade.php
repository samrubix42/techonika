<div>
    <div class="container-xl">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex flex-wrap align-items-center gap-2">
                <h3 class="card-title mb-0">Case Studies</h3>

                <div class="ms-auto d-flex flex-wrap gap-2 align-items-center">
                    <div class="input-icon" style="min-width:260px;">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input wire:model.live.debounce.400ms="search" class="form-control" placeholder="Search case studies...">
                    </div>

                    <select wire:model.live="categoryFilter" class="form-select" style="width:180px;">
                        <option value="">All categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

                    <select wire:model.live="perPage" class="form-select" style="width:90px;">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>

                    <a href="{{ route('admin.case-study.add') }}" class="btn btn-primary px-3">
                        <i class="ti ti-plus me-1"></i> Add New
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap table-hover align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($caseStudies as $caseStudy)
                            <tr wire:key="cs-{{ $caseStudy->id }}">
                                <td class="text-muted">{{ $caseStudy->id }}</td>
                                <td>
                                    @if ($caseStudy->featured_image)
                                        <img src="{{ asset('storage/' . $caseStudy->featured_image) }}" alt="{{ $caseStudy->project_name }}"
                                            class="rounded" style="width:64px;height:44px;object-fit:cover;">
                                    @else
                                        <span class="avatar avatar-md"><i class="ti ti-photo"></i></span>
                                    @endif
                                </td>
                                <td class="fw-medium">
                                    {{ $caseStudy->project_name }}
                                    <div class="small text-muted">/case-study/{{ $caseStudy->slug }}</div>
                                </td>
                                <td>
                                    @if ($caseStudy->category)
                                        <span class="badge bg-azure-lt text-azure">{{ $caseStudy->category->title }}</span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <label class="form-check form-switch m-0">
                                        <input class="form-check-input" type="checkbox"
                                            wire:click="toggleActive({{ $caseStudy->id }})" @checked($caseStudy->is_active)>
                                        <span class="form-check-label">{{ $caseStudy->is_active ? 'Active' : 'Inactive' }}</span>
                                    </label>
                                </td>
                                <td><small class="text-muted">{{ $caseStudy->created_at->format('Y-m-d') }}</small></td>
                                <td class="text-end">
                                    <div class="btn-list d-inline-flex">
                                        <a href="{{ route('admin.case-study.edit', $caseStudy->id) }}" class="btn btn-outline-primary px-3 py-1">
                                            <i class="ti ti-edit me-1"></i> Edit
                                        </a>
                                        <button wire:click="showDelete({{ $caseStudy->id }})" class="btn btn-outline-danger px-3 py-1 ms-2">
                                            <i class="ti ti-trash me-1"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">No case studies found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="card-footer d-flex justify-content-between align-items-center">
                <div>
                    Showing {{ $caseStudies->firstItem() ?? 0 }} to {{ $caseStudies->lastItem() ?? 0 }} of {{ $caseStudies->total() }}
                </div>
                <div>
                    {{ $caseStudies->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Delete confirmation modal -->
    @if ($confirmingDelete)
        <div class="modal modal-blur fade show d-block" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-title">Delete Case Study</div>
                        <p>Are you sure you want to delete <strong>{{ $deleteTitle }}</strong>?</p>
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
