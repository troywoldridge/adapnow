@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Presentation Folders</h2>

    <div class="row">
        <!-- Standard Matte Folder -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/14pt-matte-finish-folders.png') }}" class="img-fluid" alt="Standard Matte Folder">
                    <h5 class="card-title">Standard Matte Folder</h5>
                    <p class="card-text">Classic matte finish folder perfect for professional presentations.</p>
                    <a href="{{ route('presentation-folders.standard-matte') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Standard UV Folder -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/14pt-standard-uv-folders.png') }}" class="img-fluid" alt="Standard Matte Folder">
                    <h5 class="card-title">Standard UV Folder</h5>
                    <p class="card-text">Glossy UV-coated folders offering a vibrant and shiny finish.</p>
                    <a href="{{ route('presentation-folders.standard-uv') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Matte Laminated Folder -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/14pt-matte-laminated-folders.png') }}" class="img-fluid" alt="Standard Matte laminated Folder">
                    <h5 class="card-title">Matte Laminated Folder</h5>
                    <p class="card-text">Durable matte laminated finish for a sophisticated look and feel.</p>
                    <a href="{{ route('presentation-folders.matte-laminated') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Metallic Foil Folder -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('images/all-images/metallic-foil-prsentation-folder.png') }}" class="img-fluid" alt="Standard Matte laminated Folder">
                    <h5 class="card-title">Metallic Foil Folder</h5>
                    <p class="card-text">High-end metallic foil folders that add a touch of luxury.</p>
                    <a href="{{ route('presentation-folders.metallic-foil') }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
