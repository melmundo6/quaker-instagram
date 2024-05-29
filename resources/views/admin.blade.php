@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Crear Imagen</div>
            <div class="card-body">
                <div class="d-none" id="alerts">
                    <div class="alert alert-danger" role="alert">
                        Se deben de llenar todos los campos...
                    </div>
                </div>
                <form enctype="multipart/form-data">
                    <div class="row mb-2">
                        <div class="form-group mb-2 col-md-4">
                            <label for="name">URL</label>
                            <input type="file" accept="image/*" class="form-control" id="url" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="start_date">Frase</label>
                            <input type="tex" class="form-control" id="phrase" required>
                        </div>
                    </div>
                    <div class="spinner" id="animacion-carga"></div>
                    <button onclick="saveImage()" type="button" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <div id="button-container" class="mt-3"></div>
    <div id="button-newImage" class="mt-3"></div>
</div>
@endsection

<script>
    function saveImage() {
        let url = document.querySelector('#url').files[0];
        let phrase = document.querySelector('#phrase').value;
        let alerts = document.querySelector('#alerts');
        let animation = document.getElementById('animacion-carga');
        let buttonContainer = document.getElementById('button-container');
        let buttonNew = document.getElementById('button-newImage');

        animation.style.display = 'block';
        if (!url || !phrase) {
            alerts.classList.remove('d-none');
            alerts.classList.add('d-block');

            setTimeout(() => {
                alerts.classList.remove('d-block');
                alerts.classList.add('d-none');
            }, 10000)

            return;
        }

        const formData = new FormData();
        formData.append('url', url, url.name);
        formData.append('phrase', phrase);

        fetch("{{ route('images.store') }}", {
                method: 'POST',
                body: formData
            }).then(response => response.json())
            .then(data => {
                animation.style.display = 'none';
                if (data.imageUrls) {
                    buttonContainer.innerHTML = '';
                    data.imageUrls.forEach(img => {
                        for (const [size, url] of Object.entries(img)) {
                            let btn = `<button type="button" class="btn btn-success m-1" onclick="window.open('${url}', '_blank')">Ver Imagen ${size}</button>`;
                            buttonContainer.innerHTML += btn;
                        }
                        buttonNew.innerHTML = `<button type="button" class="btn btn-info m-1" onclick="window.location.reload()">Generar nuevo</button>`;
                    });
                }
            }).catch(error => {
                animation.style.display = 'none';
                console.error('Error:', error);
            });
    }
</script>