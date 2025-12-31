<div>
    <div class="container-xl">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Add New Blog</h3>
                <span wire:loading wire:target="save" class="text-muted">Saving...</span>
            </div>

            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form wire:submit.prevent="save">
                    <div class="row g-3">
                        <!-- Category -->
                        <div class="col-md-6">
                            <label class="form-label">Category</label>
                            <select class="form-select" wire:model="blog_category_id">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('blog_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Title -->
                        <div class="col-md-6">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" wire:model.live="title" placeholder="Enter blog title">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Slug -->
                        <div class="col-md-6">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" wire:model="slug" placeholder="auto-generated from title">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Featured Image -->
                        <div class="col-md-6">
                            <label class="form-label">Featured Image</label>
                            <input type="file" class="form-control" wire:model="featured_image">
                            @error('featured_image') <small class="text-danger">{{ $message }}</small> @enderror

                            @if ($featured_image)
                                <div class="mt-2">
                                    <label class="form-label small">Preview:</label>
                                    <img src="{{ $featured_image->temporaryUrl() }}" alt="Preview" class="img-fluid rounded" style="max-height:150px;">
                                </div>
                            @endif

                            <div wire:loading wire:target="featured_image" class="text-muted mt-1">Uploading...</div>
                        </div>

                        <!-- Intro -->
                        <div class="col-12">
                            <label class="form-label">Intro</label>
                            <textarea class="form-control" rows="3" wire:model="intro" placeholder="Short introduction"></textarea>
                            @error('intro') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- At a glance -->
                        <div class="col-12">
                            <label class="form-label">At a Glance</label>
                            <textarea class="form-control" rows="2" wire:model="at_a_glance" placeholder="Short summary or bullets"></textarea>
                            @error('at_a_glance') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Content (TinyMCE) -->
                        <div class="col-12" wire:ignore>
                            <label class="form-label">Content</label>
                            <textarea id="content-editor" class="form-control"></textarea>
                            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Tags -->
                        <div class="col-12 mt-2">
                            <label class="form-label">Tags</label>
                            <input type="text" class="form-control" wire:model="tags" placeholder="Comma separated tags (example: php,laravel,vue)">
                            @error('tags') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- SEO -->
                        <div class="col-md-4">
                            <label class="form-label">Meta Title</label>
                            <input type="text" class="form-control" wire:model="meta_title">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" class="form-control" wire:model="meta_keywords">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Meta Description</label>
                            <textarea class="form-control" wire:model="meta_description"></textarea>
                        </div>

                        <!-- Status -->
                        <div class="col-12">
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" wire:model="status">
                                <span class="form-check-label">Publish</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                            <span wire:loading.remove>Save Blog</span>
                            <span wire:loading>Saving...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('tabler/theme/libs/tinymce/tinymce.min.js') }}"></script>
<script>
document.addEventListener('livewire:init', function () {
    function initEditor() {
        if (tinymce.get('content-editor')) {
            tinymce.get('content-editor').remove();
        }

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
                editor.on('FullscreenStateChanged', function (e) {
                    if (e.state) {
                        editor.theme.resizeTo(window.innerWidth, window.innerHeight);
                    } else {
                        editor.theme.resizeTo(null, 500);
                    }
                });
            }
        });
    }

    initEditor();

    Livewire.on('tinyMceReset', function () {
        const ed = tinymce.get('content-editor');
        if (ed) ed.setContent('');
    });
});
</script>
@endpush
