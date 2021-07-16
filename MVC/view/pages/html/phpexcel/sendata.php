<script>
function myFunction() {
    var table = $("#htmltable");
    if(table && table.length){
    $(table).table2excel({
    exclude: ".noExl",
    name: "Excel Document Name",
    filename: "BBBootstrap" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
    fileext: ".xls",
    exclude_img: true,
    exclude_links: true,
    exclude_inputs: true,
    preserveColors: false
    });
    }
}
</script>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title">Basic Table</h4>
                                <p class="card-description"> Basic table with card </p>
                            </div>
                            <div class="col-md-4 text-right"> <button onclick="myFunction()" id="exporttable" class="btn btn-primary">Export</button> </div>
                        </div>
                        <div class="table-responsive">
                            <table id="htmltable" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ID No.</th>
                                        <th>Created On</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Samso Park</td>
                                        <td>34424433</td>
                                        <td>12 May 2017</td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                    </tr>
                                    <tr>
                                        <td>Marlo Sanki</td>
                                        <td>53425532</td>
                                        <td>15 May 2015</td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                    <tr>
                                        <td>John ryte</td>
                                        <td>53275533</td>
                                        <td>14 May 2017</td>
                                        <td><label class="badge badge-info">Fixed</label></td>
                                    </tr>
                                    <tr>
                                        <td>Peter mark</td>
                                        <td>53275534</td>
                                        <td>16 May 2017</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                    </tr>
                                    <tr>
                                        <td>Dave</td>
                                        <td>53275535</td>
                                        <td>20 May 2017</td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>