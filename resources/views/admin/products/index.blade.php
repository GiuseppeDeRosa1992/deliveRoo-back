@extends('layouts.admin')

@section('style')
    @vite('/resources/scss/productsIndex.scss')
@endsection

@section('content')
    <div class="container-fluid h-100 px-0 pt-3">
        <div class="row m-0 justify-content-between pt-2 pb-4 px-4">
            <div class="col-2 p-0">
                <h1 class="m-0">Menù List</h1>
            </div>
            <div class="col-2 align-self-center p-0">
                <a href="{{ route('admin.products.create') }}" class="btn my_salmon">
                    <i class="fa-solid fa-plus"></i> Aggiungi Prodotto
                </a>
            </div>
        </div>

        <div class="row m-0">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-lg-4 px-4 py-5">
                    <div class="card text-center h-100">
                        <div class="card-body p-0 px-2 pb-2 d-flex justify-content-between flex-column">
                            <div class="position-relative">
                                @if (Str::startsWith($product->image, 'http'))
                                    <img src="{{ $product->image }}" class="rounded rounded-circle position-absolute mt-4"
                                        alt="{{ $product->image }}">
                                @else
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                        class="rounded rounded-circle position-absolute mt-4">
                                @endif
                                <h4 class="card-title mb-0 pb-1">{{ $product->name }}</h4>
                                <p class="card-text m-0 py-1">{{ $product->description }}</p>
                                <p class="card-text m-0 py-1">€{{ $product->price }}</p>
                                <p class="card-text m-0 py-1">{{ $product->type }}</p>
                                <p class="card-text m-0 py-1">Disponibilita` <i
                                        class="fa-regular {{ $product->visible ? 'fa-circle-check' : 'fa-circle-xmark' }}"></i>
                                </p>

                            </div>
                            <div class="row m-0">
                                <div class="col-6 p-1">
                                    <div class="text-center">
                                        <a href="{{ route('admin.products.edit', $product->id) }}">
                                            <i class="fa-regular fa-pen-to-square p-3 rounded-5"
                                                style="color: #74C0FC; background-color: #D5E5F4;"></i>
                                        </a>
                                    </div>
                                    <span class="m-0 py-1">
                                        <b>Modifica</b>
                                    </span>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="text-center">
                                        <a style="cursor: pointer" data-bs-toggle="modal"
                                            data-bs-target="#modalId{{ $product->id }}">
                                            <i class="fa-regular fa-trash-can p-3 rounded-5"
                                                style="color: #eb0000; background-color: #FFD6CB;"></i>
                                        </a>
                                    </div>
                                    <span class="m-0 py-1">
                                        <b>Cancella</b>
                                    </span>
                                </div>



                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId{{ $product->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Vuoi eliminare {{ $product->name }}?
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Sei sicuro di voler eliminare questo prodotto? <br>
                                                Non puoi annullare questa operazione!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Annulla
                                                </button>
                                                <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Conferma</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    const myModal = new bootstrap.Modal(
                                        document.getElementById("modalId"),
                                        options,
                                    );
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
