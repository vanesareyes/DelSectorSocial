@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear una entrada') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createEntries') }}">
                        @csrf
                        <div class="form-group row title-entry">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row language-entry">
                            <label for="language_id" class="col-md-4 col-form-label text-md-right">{{ __('language') }}</label>

                            <div class="col-md-6">
                                <select name="language_id" id="language_id">
                                    
                                    @foreach ( $languages as $language)
                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                        
                                </select>

                                @error('language_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row category-entry">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('category') }}</label>
                            <p>Puede seleccionar varias categorias sombreando varias opciones sin soltar el mouse o agregar más categorias con Ctrl + click en la categoria</p>
                            <div class="col-md-6">
                                <select name="categories[]" id="category_id" multiple>
                                    
                                    @foreach ( $categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                        
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row definition-entry">
                            <label for="definition" class="col-md-4 col-form-label text-md-right">{{ __('definition') }}</label>

                            <div class="col-md-6">
                                <textarea id="definition" type="textarea" class="form-control @error('definition') is-invalid @enderror" value="{{ old('definition') }}"  autocomplete="definition" autofocus name="definition" cols="30" rows="10"></textarea>


                                @error('definition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row recommendedEntry-entry">
                            <label for="recommendedEntry" class="col-md-4 col-form-label text-md-right">{{ __('recommendedEntry') }}</label>

                            <div class="col-md-6">
                                <input id="recommendedEntry1" type="text" class="form-control @error('recommendedEntry1') is-invalid @enderror" name="recommendedEntry1" value="{{ old('recommendedEntry1') }}"  autocomplete="recommendedEntry1" autofocus>

                                @error('recommendedEntry1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="recommendedEntry2" type="text" class="form-control @error('recommendedEntry2') is-invalid @enderror" name="recommendedEntry2" value="{{ old('recommendedEntry2') }}"  autocomplete="recommendedEntry2" autofocus>

                                @error('recommendedEntry2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row source-entry">
                            <label for="source" class="col-md-4 col-form-label text-md-right">{{ __('source') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="sources[fuente1][titulo-link]"><br>
                                link<input type="text" name="sources[fuente1][link]">

                                <input type="text" name="sources[fuente2][titulo-link]"><br>
                                link<input type="text" name="sources[fuente2][link]">

                                <input type="text" name="sources[fuente3][titulo-link]"><br>
                                link<input type="text" name="sources[fuente3][link]">

                                @error('source')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row howToUse-entry">
                            <label for="howToUse" class="col-md-4 col-form-label text-md-right">{{ __('howToUse') }}</label>

                            <div class="col-md-6">
                                <textarea name="howToUse" id="howToUse" cols="30" rows="10"></textarea>
                                @error('howToUse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@if ($entries ?? '')
 
@foreach ( $entries as $entry )

    <div class="col-12 d-flex" style="border: 1px solid red">
        <div class="col-3 m-auto title" style="border: 1px solid green"><p>{{ $entry->title}}</p></div>
        <div class="col-3 m-auto categories" style="border: 1px solid green">
            @if ($entry->categories->count() > 0)
            <ul>
                @foreach ($entry->categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>
            @else
                <p>no tiene categorias</p>
            @endif
        </div>
        <div class="col-3 m-auto sources" style="border: 1px solid green">
            @if ($entry->sources->count() > 0)
                <ul>
                    @foreach ($entry->sources as $source)
                        <li>{{ $source->name }} {{ $source->link }}</li>
                    @endforeach
                </ul>
            @else
                <p>no tiene fuentes</p>
            @endif
        </div>

    </div>
@endforeach
@endif

</div>
@endsection