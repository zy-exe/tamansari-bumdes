<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ADMIN | Tamansari Tourism</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('img/logo-tamansari-sm.png') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="kaiadmin/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["kaiadmin/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="kaiadmin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="kaiadmin/css/plugins.min.css" />
    <link rel="stylesheet" href="kaiadmin/css/kaiadmin.min.css" />

    {{-- CDN Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar -->
          @include('admin.component.sidebar')
        <!-- end sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="kaiadmin/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                {{-- header --}}
                  @include('admin.component.header')
                {{-- end header --}}
            </div>

            {{-- content --}}
                @yield('content')
            {{-- end content --}}

        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="kaiadmin/js/core/jquery-3.7.1.min.js"></script>
    <script src="kaiadmin/js/core/popper.min.js"></script>
    <script src="kaiadmin/js/core/bootstrap.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> --}}

    <!-- jQuery Scrollbar -->
    <script src="kaiadmin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="kaiadmin/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="kaiadmin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="kaiadmin/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="kaiadmin/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="kaiadmin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="kaiadmin/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="kaiadmin/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="kaiadmin/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="kaiadmin/js/kaiadmin.min.js"></script>

    <script>
        $(document).ready(function () {
          $("#basic-datatables").DataTable({});
  
          $("#multi-filter-select").DataTable({
            pageLength: 10,
            initComplete: function () {
              this.api()
                .columns()
                .every(function () {
                  var column = this;
                  var select = $(
                    '<select class="form-select"><option value=""></option></select>'
                  )
                    .appendTo($(column.footer()).empty())
                    .on("change", function () {
                      var val = $.fn.dataTable.util.escapeRegex($(this).val());
  
                      column
                        .search(val ? "^" + val + "$" : "", true, false)
                        .draw();
                    });
  
                  column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                      select.append(
                        '<option value="' + d + '">' + d + "</option>"
                      );
                    });
                });
            },
          });
  
          // Add Row
          $("#add-row").DataTable({
            pageLength: 10,
          });
  
          var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
  
          $("#addRowButton").click(function () {
            $("#add-row")
              .dataTable()
              .fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action,
              ]);
            $("#addRowModal").modal("hide");
          });
        });
      </script>
</body>

</html>
