<!-- Full Width Modal Bottom -->
<div class="modal fade right modal-content-clickable" data-backdrop="false" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog merchlist modal-full-height modal-right" role="document" style="position: fixed;margin: 0;bottom: 0;width: 1000px;max-width: 100%;height: auto;min-height: 100%;">

        <div class="modal-content" style="height: 100%; position: fixed;">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Merch List</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="merchlist p-3">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>с1с</td>
                            <td>п3р</td>
                            <td>c1c-p3r@sis.xxx</td>
                            <td>88005553535</td>
                            <td>
                                <!-- Button trigger modal -->
                                <span data-toggle="tooltip" data-placement="top" title="Show Markers">
                                    <a data-toggle="modal" data-target="#basicExampleModalMerchRoutes">
                                        <i class="fa fa-map-marker indigo-text fa-lg" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <span class="ml-2" data-toggle="tooltip" data-placement="top" title="Show Reports">
                                    <a data-toggle="modal" data-target="#basicExampleModalMerchReports">
                                        <i class="fa fa-check green-text fa-lg" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <a class="ml-2" data-toggle="tooltip" data-placement="top" title="Show Route List"><i class="fa fa-plane amber-text fa-lg" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Full Width Modal Bottom -->
