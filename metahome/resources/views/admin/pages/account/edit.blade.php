@extends('admin.index')
@section('body')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Detail Account</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <input type="file" name="before_crop_image" id="before_crop_image" accept="image/*">



                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="imageModel" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crop and Resize Avatar</h5>
            </div>
            <div class="modal-body">
            <div id="image_demo" style="width:350px; margin-top:30px"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary crop_image">Crop</button>
            </div>
          </div>
        </div>
      </div>
@endsection
