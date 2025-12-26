<div>
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Blog</h3>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" wire:model="blog_category_id">
                                <option value="">Select category</option>
                                @foreach (\App\Models\BlogCategory::where('is_active', true)->get() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('blog_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" wire:model.live="title">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" wire:model="slug">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Featured Image</label>
                            <input type="file" class="form-control" wire:model="featured_image">
                            @error('featured_image') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Intro</label>
                            <textarea class="form-control" rows="3" wire:model="intro"></textarea>
                        </div>

                        <div class="col-12 mb-3" wire:ignore>
                            <label class="form-label">Content</label>
                            <textarea id="content-editor" class="form-control"></textarea>
                            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control" wire:model="meta_title">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" class="form-control" wire:model="meta_keywords">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" wire:model="meta_description"></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" wire:model="status">
                                <span class="form-check-label">Publish</span>
                            </label>
                        </div>
                    </div>

                    <div class="text-end">
                        <button class="btn btn-primary">Update Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('tabler/theme/libs/tinymce/tinymce.min.js') }}"></script>
    <script>
        document.addEventListener('livewire:init', function () {
            tinymce.init({
                selector: '#content-editor',
                height: 500,
                menubar: true,
                plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen table paste emoticons wordcount help',
                toolbar: 'undo redo | styleselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table | emoticons | removeformat | code fullscreen',
                setup: function (editor) {
                    editor.on('init', function () {
                        editor.setContent(@json($content ?? ''));
                    });
                    editor.on('Change KeyUp input', function () {
                        @this.set('content', editor.getContent());
                    });
                }
            });

            Livewire.on('tinyMceReset', function () {
                const ed = tinymce.get('content-editor');
                if (ed) ed.setContent('');
            });
        });
    </script>
    @endpush
</div>
