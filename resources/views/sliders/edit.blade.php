@extends('layout.master')
@section('content')


<div class="card">
    <div class="card-header">
        <div class="card-title">
            Create Slider
        </div>
        <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-info">List</a>
    </div>
    <div class="card-body">
        <form action="{{ route('sliders.update',$slider->id) }}" method="post">
            @csrf
            
            @method('PUT')
            {{-- Title --}}
            <div class="form-group">
                <label class="col-md-10 control-label">
                    Title
                </label>
                <div class="col-md-8">
                    <input type="text" name="title" value=" " placeholder="title" class="form-control input-md">
                </div>
            </div>
            {{-- Subtitle --}}
            <div class="form-group">
                <label class="col-md-10 control-label">Subtitle</label>
                <div class="col-md-8">
                    <input type="text" name="subtitle" value="" placeholder="subtitle" class="form-control input-md" />
                </div>
            </div>
            {{-- Price --}}
            <div class="form-group">
                <label class="col-md-10 control-label">Price</label>
                <div class="col-md-8">
                    <input type="text" name="price" value="" placeholder="price" class="form-control input-md" />
                </div>
            </div>
            {{-- Link --}}
            <div class="form-group">
                <label class="col-md-10 control-label">Link</label>
                <div class="col-md-8">
                    <input type="text" name="link" value="" placeholder="link" class="form-control input-md" />
                </div>
            </div>
            {{--image  --}}
            <div class="form-group">
                <label class="col-md-10 control-label">
                    Image
                </label>
                <div class="col-md-8">
                    <input type="text" name="image" value="" placeholder="Image" class="form-control input-md">
                </div>
            </div>

            {{-- Status --}}
            <div class="form-group">
                <label class="col-md-10 control-label">
                    Status
                </label>
                <div class="col-md-8">
                    <input type="text" name="status" value="" placeholder="status" class="form-control input-md">
                </div>
            </div>
            {{-- Submit Button --}}
            <div class="form-group">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
