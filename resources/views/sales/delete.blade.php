

    <form action="/admin/sales/{{ $store_item->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}

          <!-- Modal -->
          <div class="modal modal-danger fade" id="delete_sales_<?php echo $store_item->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Delete product Confirm</h4>
                </div>
                <div class="modal-body">
                  Are you sure you want to delete - <em>"<?php echo  $store_item->name_of_cafe;?>" ?</em>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-primary" >Yes, Delete</button>
                </div>
              </div>
            </div>
          </div>
          <!-- /- Modal -->
    </form>
    <!-- /.form -->
