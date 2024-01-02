@extends('backend.LayoutAdmin.appadmin')

@section('content')
<div id="mainDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5">
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="th-sm">Image</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">Description</th>
                    <th class="th-sm">Edit</th>
                    <th class="th-sm">Delete</th>
                </tr>
                </thead>
                <tbody id="service_table">

                </tbody>
            </table>

        </div>
    </div>
</div>

<div id="loaderDiv" class="container">
    <div class="row">
        <div class="col-md-12 text-center p-5">
            <img class="loading-icon" src="{{asset('AdminFront/images/loader.svg')}}" alt="loading ...">

        </div>
    </div>
</div>

<div id="wrongDiv" class="container d-none">
    <div class="row">
        <div class="col-md-12 text-center p-5">
           <h1 class="mes-text">Data not found</h1>
        </div>
    </div>
</div>

<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm" role="document">


        <div class="modal-content">
            <div class="modal-body text-center p-3">
               <h4>Are sure to delete?</h4>
                <h5 id="serviceDeleteId"></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">NO</button>
                <button type="button" id="serviceDeleteConfirmBtn"  class="btn btn-danger btn-sm">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->


@endsection

@push('script')
    <script type="text/javascript">
{{-- Show table --}}
        function getServicesDta() {

            axios.get('/getServices')
                .then(function(response) {
                    if (response.status == 200) {

                        $('#mainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#service_table').empty();
                        let jsonData = response.data;
                        // table data create
                        $.each(jsonData, function(i, item) {
                            $('<tr>').html(
                                "<td><img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                                "<td>" + jsonData[i].service_name + "</td>" +
                                "<td>" + jsonData[i].service_des + "</td>" +
                                "<td><a href='' ><i class='fas fa-edit'></i></a></td>" +
                                "<td><a class='serviceDeleteBtn'  data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt'></i></a></td>"
                            ).appendTo('#service_table')


                            //Service table Delete icon click

                            $('.serviceDeleteBtn').click(function() {
                                let id = $(this).data('id');
                                $('#serviceDeleteId').html(id);
                                $('#centralModalSm').modal('show');
                            })

                        //     Services table edit icon click

                        });
                        // onclick yes btn of modal to delete data
                        $('#serviceDeleteConfirmBtn').click(function() {
                            let id = $('#serviceDeleteId').html();
                            ServicesDelete(id);

                        })
                    } else {

                        $('#loaderDiv').addClass('d-none');
                        $('#wrongDiv').removeClass('d-none');

                    }

                }).catch(function(error) {
                $('#loaderDiv').addClass('d-none');
                $('#wrongDiv').removeClass('d-none');
            });
        }

        getServicesDta();

        // show table end

        // service table delete icon click
        function ServicesDelete(deleteId) {
            axios.post('/deleteService', {
                id: deleteId
            })
                .then(function(response) {

                    if (response.data == 1) {
                        $('#centralModalSm').modal('hide');
                        toastr.success('Delete success');
                        getServicesDta();
                    } else {
                        $('#centralModalSm').modal('show');
                        toastr.error('error in deleting');
                        getServicesDta();
                    }

                })
                .catch(function(error) {

                });
        }


    </script>

@endpush
