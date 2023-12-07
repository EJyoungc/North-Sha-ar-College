<div>
    {{-- The Master doesn't talk, he acts. --}}
    <link rel="stylesheet" href="{{ asset('dash/plugins/trix/trix.min.css') }}">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('posts') }}">Posts</a></li>
                        <li class="breadcrumb-item active">Create Post</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Default box -->

                    <div class="card">

                        <div class="card-body">
                            <form wire:submit.prevent='update'>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" wire:model='name' placeholder="Title">
                                    <x-error for="name" />

                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Image
                                    </label>
                                    <input type="file" class="form-control" wire:model='image'>
                                    <x-error for="image" />
                                </div>



                                <div class="form-group" wire:ignore>
                                    <label for="">Tags</label>
                                    <select class="select2" wire:model.live='tag' id="select2" multiple="multiple"
                                        style="width:100%">
                                        <option value="">select</option>
                                        @forelse ($tags as $item)
                                            <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                            <option value="">Empty</option>
                                        @endforelse
                                    </select>
                                    <x-error for="tag" />
                                </div>

                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select wire:model='category' class="form-control">
                                        <option value="">Select Posts</option>

                                        @forelse ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @empty
                                            <option value="">Empty</option>
                                        @endforelse

                                    </select>

                                    <x-error for="category" />
                                </div>

                                <div class="form-group">
                                    <label for="">Post</label>
                                    <input type="text" id="content" hidden wire:model.live='post'>
                                    <trix-editor class="trix-content"
                                        x-on:trix-change="$wire.post = $event.target.value"
                                        input="content"></trix-editor>

                                    <x-error for="post" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" id="save" class="btn btn-dark">
                                        save <x-spinner target="store" />
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dash/plugins/trix/trix.min.js') }}"></script>
    <script>
        var HOST = @js(route('post.trix.upload'));

        var DelHost = @js(route('post.trix.remove'));
        document.addEventListener('livewire:init', () => {
            // Runs after Livewire is loaded but before it's initialized
            // on the page...
            var HOST = @js(route('post.trix.upload'));
            // var Host = "https://d13txem1unpe48.cloudfront.net/"
            var trixEditor = document.getElementById('content')
            var element = document.querySelector("trix-editor")
            var myProperty = @json($post);
            element.editor.insertHTML(myProperty)
            // console.log($wire.get('post'));


            async function postData(url = "", data = {}) {
                // Default options are marked with *
                const response = await fetch(url, {
                    method: "POST", // *GET, POST, PUT, DELETE, etc.
                    mode: "cors", // no-cors, *cors, same-origin
                    cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
                    credentials: "same-origin", // include, *same-origin, omit
                    headers: {
                        "Content-Type": "application/json",
                        // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    redirect: "follow", // manual, *follow, error
                    referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
                    body: JSON.stringify(data), // body data type must match "Content-Type" header
                });
                return response.json(); // parses JSON response into native JavaScript objects
            }





            document.addEventListener("trix-attachment-remove", (event) => {

                var attachment = event.attachment;

                console.log(attachment.attachment)
                console.log(attachment.attachment.previewURL)

                postData(DelHost, {
                    urlfile: attachment.attachment.previewURL
                }).then((data) => {

                });
                var btn = document.getElementById('save').click();
           


            });











            // addEventListener("trix-attachment-add", function(event) {
            //     if (event.attachment.file) {

            //         console.log('uploaded', event.attachment.file);
            //         uploadFileAttachment(event.attachment)
            //     }



            //     function uploadFileAttachment(attachment) {
            //         uploadFile(attachment.file, setProgress, setAttributes)

            //         function setProgress(progress) {
            //             attachment.setUploadProgress(progress)
            //         }

            //         function setAttributes(attributes) {
            //             attachment.setAttributes(attributes)
            //         }
            //     }

            //     function uploadFile(file, progressCallback, successCallback) {
            //         var key = createStorageKey(file)
            //         var formData = createFormData(key, file)
            //         var xhr = new XMLHttpRequest()

            //         xhr.open("POST", Host, true)

            //         xhr.upload.addEventListener("progress", function(event) {
            //             var progress = event.loaded / event.total * 100
            //             progressCallback(progress)
            //         })

            //         xhr.addEventListener("load", function(event) {
            //             if (xhr.status == 204) {
            //                 var attributes = {
            //                     url: HOST + key,
            //                     href: HOST + key + "?content-disposition=attachment"
            //                 }
            //                 successCallback(attributes)
            //             }
            //         })

            //         xhr.send(formData)
            //     }

            //     function createStorageKey(file) {
            //         var date = new Date()
            //         var day = date.toISOString().slice(0, 10)
            //         var name = date.getTime() + "-" + file.name
            //         return ["tmp", day, name].join("/")
            //     }

            //     function createFormData(key, file) {
            //         var data = new FormData()
            //         data.append("key", key)
            //         data.append("Content-Type", file.type)
            //         data.append("file", file)
            //         return data
            //     }
            // })


        });

        // element.editor.insertString("Hello 2")
        // console.log($wire.get('post'));
        // addEventListener('trix-blur', function(event) {
        //     @this.set('value', trixEditor.getAttribute('value'))
        // })
    </script>

    <script src="{{ asset('attachment.js') }}"></script>


</div>
