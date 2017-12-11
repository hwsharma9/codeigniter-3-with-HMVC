</div><!-- ./wrapper -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js"); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url("assets/superadmin/dist/js/app.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/demo.js"); ?>"></script>
   
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/common.js"); ?>"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/custom_validation.js"); ?>"></script>
    <script src="<?php echo base_url("assets/superadmin/dist/js/custom.js"); ?>"></script>
	<script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>

    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.min.js"); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
            $('#example1').DataTable({
                "bPaginate": false,
            });

            $('#example2').DataTable({
                scrollX: true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
   <script>
        $('.datepicker').datetimepicker({
            format:"YYYY-MM-DD"
        }).on("dp.change",function(e){
            var id = $(this).closest("form").attr("id");
            var name = $(this).parent().find("input").attr("name");
            $("#"+id).formValidation('revalidateField', name);
        });
        $('.datetimepicker').datetimepicker({
            format:"YYYY-MM-DD HH:mm:ss"
        }).on("dp.change",function(e){
            var id = $(this).closest("form").attr("id");
            var name = $(this).parent().find("input").attr("name");
            $("#"+id).formValidation('revalidateField', name);
        });
        $('#datetimepicker1').datetimepicker({
            format:"YYYY-MM-DD HH:mm:ss"
        });
        $('#datetimepicker2').datetimepicker({
            format:"YYYY-MM-DD HH:mm:ss"
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url("assets/plugins/select2/js/select2.full.js"); ?>"></script>
    <script type="text/javascript">
      $(".select2").select2({
        tags: false
      });
      $(".select2_true").select2({
        tags: true
      });
    </script>
    <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.9/adapters/jquery.js"></script>
    <script>
        $(function() {
          $('textarea.ckeditor_full').ckeditor({
                            toolbarGroups: [
                                { name: "document",    groups: [ "mode", "document" ] },            // Displays document group with its two subgroups.
                                { name: "basicstyles", groups: [ "basicstyles", "cleanup" ] },
                                { name: "links" },
                                { name: "list", groups: [ "NumberedList", "BulletedList" ] },
                                { name: 'insert', groups: [ "Table" ] }
                            ]
                          });
          $('textarea.ckeditor_full_limit').ckeditor({
                            toolbarGroups: [
                                { name: "document",    groups: [ "mode", "document" ] },            // Displays document group with its two subgroups.
                                { name: "basicstyles", groups: [ "basicstyles", "cleanup" ] },
                                { name: "links" }
                            ]
                          });
        });
  </script>
  </body>
</html>