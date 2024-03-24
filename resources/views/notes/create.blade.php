@extends('include.master')
@section('content')
@section('title','Note')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add new Note</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{-- <p class="text-center text-success">{{Session::get('message')}}</p> --}}
                <div class="card-body">
                  
                        <form class="form-valide" action="{{route('note.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" name="title" value="{{old('title')}}" id="example-text-input">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" id="content" value="{{old('content')}}"  rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
