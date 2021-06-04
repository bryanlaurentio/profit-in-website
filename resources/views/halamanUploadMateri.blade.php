@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">{{ __('Enter Details to create a material') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ config('app.url')}}/material" >
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="titleOfMaterial" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Tutor') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="nameOfTutor" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="linkVideo" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Category User') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="categoryUser" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Category Material') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="categoryMaterial" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection