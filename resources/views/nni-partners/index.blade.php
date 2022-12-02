<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
</head>

<body>
    {{-- Table --}}
    <div class="container">
        <h1 class="mt-2">NNI Partnes Data</h1>
        <a class="btn mb-3 mt-4 btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
        <table class="table table-bordered table-striped data-table nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>No</th>
                    <th>Partner Name</th>
                    <th>Location</th>
                    <th>Site Id</th>
                    <th>Hostname Metro</th>
                    <th>IP Metro</th>
                    <th>Port Metro</th>
                    <th>Hostname Switch</th>
                    <th>IP Switch</th>
                    <th>Port Switch</th>
                    <th>Note</th>
                    {{-- <th width="280px">Action</th> --}}
                </tr>
            </thead>
            {{-- <tbody>
            </tbody> --}}
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ajaxModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modelHeading"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="nniPartnerForm" name="nniPartnerForm" class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="partner_name" name="partner_name"
                                        placeholder="-">
                                    <label for="partner_name">Partner Name</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="-">
                                    <label for="location">Location</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="site_id" name="site_id"
                                        placeholder="-">
                                    <label for="site_id">Site ID</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="hostname_metro" name="hostname_metro"
                                        placeholder="-">
                                    <label for="hostname_metro">Hostname Metro</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="ip_metro" name="ip_metro"
                                        placeholder="-">
                                    <label for="ip_metro">IP Metro</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="port_metro" name="port_metro"
                                        placeholder="-">
                                    <label for="port_metro">Port Metro</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="hostname_switch"
                                        name="hostname_switch" placeholder="-">
                                    <label for="hostname_switch">Hostname Switch</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="ip_switch" name="ip_switch"
                                        placeholder="-">
                                    <label for="ip_switch">IP Switch</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="port_switch" name="port_switch"
                                        placeholder="-">
                                    <label for="port_switch">Port Switch</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mt-2">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="note" name="note"
                                    style="height: 200px"></textarea>
                                <label for="note">Comments</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <script type="text/javascript">
        $(function() {

            /*------------------------------------------
             --------------------------------------------
             Pass Header Token
             --------------------------------------------
             --------------------------------------------*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            /*------------------------------------------
            --------------------------------------------
            Render DataTable
            --------------------------------------------
            --------------------------------------------*/
            var table = $('.data-table').DataTable({
                scrollX: true,
                processing: true,
                serverSide: true,
                fixedColumns: {
                    left: 0,
                    right: 1
                },
                ajax: "{{ route('nni-partners.index') }}",
                columns: [{
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'partner_name',
                        name: 'partner_name'
                    },
                    {
                        data: 'location',
                        name: 'location'
                    },
                    {
                        data: 'site_id',
                        name: 'site_id'
                    },
                    {
                        data: 'hostname_metro',
                        name: 'hostname_metro'
                    },
                    {
                        data: 'ip_metro',
                        name: 'ip_metro'
                    },
                    {
                        data: 'port_metro',
                        name: 'port_metro'
                    },
                    {
                        data: 'hostname_switch',
                        name: 'hostname_switch'
                    },
                    {
                        data: 'ip_switch',
                        name: 'ip_switch'
                    },
                    {
                        data: 'port_switch',
                        name: 'port_switch'
                    },
                    {
                        data: 'note',
                        name: 'note'
                    },
                ]
            });

            /*------------------------------------------
            --------------------------------------------
            Click to Button
            --------------------------------------------
            --------------------------------------------*/
            $('#createNewProduct').click(function() {
                $('#saveBtn').html('Submit new data');
                $('#id').val('');
                $('#nniPartnerForm').trigger("reset");
                $('#modelHeading').html("Submit New Data");
                $('#ajaxModel').modal('show');
            });

            /*------------------------------------------
            --------------------------------------------
            Click to Edit Button
            --------------------------------------------
            --------------------------------------------*/
            $('body').on('click', '.editProduct', function() {
                var id = $(this).data('id');
                $.get("{{ route('nni-partners.index') }}" + "/" + id + "/edit", function(
                    data) {
                    $('#modelHeading').html("Edit Data");
                    $('#saveBtn').html('Submit changes');
                    $('#ajaxModel').modal('show');
                    $('#id').val(data.id);
                    $('#partner_name').val(data.partner_name);
                    $('#location').val(data.location);
                    $('#site_id').val(data.site_id);
                    $('#hostname_metro').val(data.hostname_metro);
                    $('#ip_metro').val(data.ip_metro);
                    $('#port_metro').val(data.port_metro);
                    $('#hostname_switch').val(data.hostname_switch);
                    $('#ip_switch').val(data.ip_switch);
                    $('#port_switch').val(data.port_switch);
                    $('#note').val(data.note);
                })
            });

            /*------------------------------------------
            --------------------------------------------
            Create Product Code
            --------------------------------------------
            --------------------------------------------*/
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $(this).html('Sending...');

                $.ajax({
                    data: $('#nniPartnerForm').serialize(),
                    url: "{{ route('nni-partners.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {

                        $('#nniPartnerForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();

                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            /*------------------------------------------
            --------------------------------------------
            Delete Product Code
            --------------------------------------------
            --------------------------------------------*/
            $('body').on('click', '.deleteProduct', function() {

                var product_id = $(this).data("id");
                confirm("Are You sure want to delete !");

                $.ajax({
                    type: "DELETE",
                    url: "{{ route('nni-partners.store') }}" + '/' + product_id,
                    success: function(data) {
                        table.draw();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            });

        });
    </script>
</body>

</html>
