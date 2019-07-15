<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>Form Input Master Tags
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="panel-body">
			<table class="table">
				<?php
					echo form_open('admin/tags/post');
				?>
					<tr>
						<td align='right' width='20%'>
							<label class="col-sm-12 control-label" for="form-field-1">TAGS NAME :</label>
						</td>
						<td>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="form-field-1" placeholder="* Tags Name" name="tags" required />
							</div>
						</td>
					</tr>
					
					<tr>
						<td align='right' width='20%'></td>
						<td>
							<div class="col-sm-12">
								<button type="submit" name="submit" class="btn btn-success btn-sm"><i class='fa fa-save'></i> SAVE</button>
								<?php
									echo anchor('admin/tags', "<i class='fa fa-arrow-left'></i> BACK",array('class'=>'btn btn-info btn-sm'));
								?>
							</div>
						</td>
					</tr>
				</form>
			</table>
		</div>
	</div>
	<!-- end: TEXT FIELDS PANEL -->
</div>