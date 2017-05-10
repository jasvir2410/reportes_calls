<!-- Modal -->
<div :class="showStatusModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <button type="button" class="close" @click="showStatusModal = 'modal fade'">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Cambio de Estado</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3" data-toggle="tooltip" v-for="getListEvent in getListEvents" :title="getListEvent.name" style="margin-bottom: 10px;" >
                        <a href="#" @click="changeStatus(getListEvent.id)">
                            <span :class=" 'info-box-icon bg-' + getListEvent.color " style="width:100%; height: 100%">
                                <i :class="getListEvent.icon"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>