<div id="copyright text-right" class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    © Copyright 2022 Laravel Development
</div>

<!-- <script src="{{ asset('js/jquery-3.6.1.js') }}"></script> -->

<script src="{{ asset('js/datatables.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        console.log("footer")
        $(".datatable-table-list").DataTable();
    });
</script>
