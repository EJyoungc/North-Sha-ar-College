<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Default box -->
                    
                    <div class="card">

                        <div class="card-body">
                            <form wire:submit='store'>
                                <div class="form-group">
                                    <label for="">About</label>
                                    {{-- <textarea wire:model='about' class="form-control"></textarea> --}}
                                    <input type="text" id="content" wire:model.live='about' hidden >
                                    <trix-editor  class="trix-content" x-on:trix-change="$wire.about = $event.target.value" input="content" ></trix-editor>
                                    <x-error for="about" />
                                </div>
                                <button class="btn btn-dark btn-sm ">save <x-spinner target="store" /></button>
                            </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section>


    <script src="{{ asset('dash/plugins/trix/trix.min.js') }}"></script>
    <script>


//var HOST = {{-- @js(route('about.trix.upload')) --}} ;
        document.addEventListener('livewire:init', () => {
            // Runs after Livewire is loaded but before it's initialized
            // on the page...
            // var Host ={{-- @js(route('about.trix.upload')) --}};
            // var Host = "https://d13txem1unpe48.cloudfront.net/"
            var trixEditor = document.getElementById('content')
            var element = document.querySelector("trix-editor")
            var myProperty = @json($about);
            element.editor.insertHTML(myProperty)
            // console.log($wire.get('about'));
            addEventListener("trix-attachment-add", function(event) {
                if (event.attachment.file) {

                    console.log('uploaded', event.attachment.file);
                    uploadFileAttachment(event.attachment)
                }



                function uploadFileAttachment(attachment) {
                    uploadFile(attachment.file, setProgress, setAttributes)

                    function setProgress(progress) {
                        attachment.setUploadProgress(progress)
                    }

                    function setAttributes(attributes) {
                        attachment.setAttributes(attributes)
                    }
                }

                function uploadFile(file, progressCallback, successCallback) {
                    var key = createStorageKey(file)
                    var formData = createFormData(key, file)
                    var xhr = new XMLHttpRequest()

                    xhr.open("about", Host, true)

                    xhr.upload.addEventListener("progress", function(event) {
                        var progress = event.loaded / event.total * 100
                        progressCallback(progress)
                    })

                    xhr.addEventListener("load", function(event) {
                        if (xhr.status == 204) {
                            var attributes = {
                                url: HOST + key,
                                href: HOST + key + "?content-disposition=attachment"
                            }
                            successCallback(attributes)
                        }
                    })

                    xhr.send(formData)
                }

                function createStorageKey(file) {
                    var date = new Date()
                    var day = date.toISOString().slice(0, 10)
                    var name = date.getTime() + "-" + file.name
                    return ["tmp", day, name].join("/")
                }

                function createFormData(key, file) {
                    var data = new FormData()
                    data.append("key", key)
                    data.append("Content-Type", file.type)
                    data.append("file", file)
                    return data
                }
            })


        });

        // element.editor.insertString("Hello 2")
        // console.log($wire.get('about'));
        // addEventListener('trix-blur', function(event) {
        //     @this.set('value', trixEditor.getAttribute('value'))
        // })
    </script>

<script src="{{ asset('attachment.js') }}"></script>
</div>
