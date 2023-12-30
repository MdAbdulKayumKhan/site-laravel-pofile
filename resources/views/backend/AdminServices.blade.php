@extends('backend.LayoutAdmin.appadmin')

@section('content')
<div class="container">
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
@endsection

@push('script')
    <script type="text/javascript">
        function  getServicesDta(){

            axios.get('/getServices')
                .then(function (responce) {
                    let jsonData = responce.data;
                    console.log(jsonData)
                    $.each(jsonData, function (i,item){
                        $('<tr>').html(
                            "<td><img class='table-img' src="+jsonData[i].service_img+"></td>"+
                            "<td>"+jsonData[i].service_name+"</td>"+
                            "<td>"+jsonData[i].service_des+"</td>"+
                            "<td><a href='' ><i class='fas fa-edit'></i></a></td>"+
                            "<td><a href='' ><i class='fas fa-trash-alt'></i></a></td>"
                        ).appendTo('#service_table')
                    });
                }).catch(function (error) {

            });
        }
        getServicesDta();
    </script>

@endpush
